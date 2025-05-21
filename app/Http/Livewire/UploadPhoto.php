<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;

class UploadPhoto extends Component
{
    use WithFileUploads;
    public $photo;
    public $croppedImage;
    public $showCropper = false;
    public $user;

    // შემოწმების წესები
    protected $rules = [
        'photo' => 'image|max:2240', // 10MB
    ];

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function updatedPhoto()
    {
        // გავლიდაციის შემოწმება
        $this->validate();

        // კროპერის ჩვენება
        $this->showCropper = true;

        // ვაცნობოთ JavaScript-ს, რომ ფოტო აიტვირთა - Alpine.js-თან თავსებადი მეთოდი
        $this->dispatch('photo-uploaded');
    }

    // Livewire 3 სინტაქსი - მოვუსმინოთ saveCroppedImage ივენთს

    #[On('saveCroppedImage')]
    public function handleCroppedImage($imageData)
    {
        try {
            // Validate the image data
            if (empty($imageData) || !is_string($imageData) || strpos($imageData, 'data:image/') !== 0) {
                session()->flash('error', 'არასწორი ფორმატის გამოსახულება');
                return;
            }

            $this->croppedImage = $imageData;

            // Process the cropped image
            $imageData = preg_replace('#^data:image/\w+;base64,#i', '', $imageData);
            $imageData = str_replace(' ', '+', $imageData);
            $imageName = 'profile_'.$this->user->id.'_'.time().'.jpg';

            // Save the image
            $saved = Storage::disk('public')->put('profiles/'.$imageName, base64_decode($imageData));

            if (!$saved) {
                session()->flash('error', 'ფაილის შენახვა ვერ მოხერხდა');
                return;
            }

            // Update database
            $oldImage = $this->user->profile_photo_path;
            $this->user->profile_photo_path = 'profiles/'.$imageName;
            $this->user->save();

            // Delete old image if exists
            if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                Storage::disk('public')->delete($oldImage);
            }

            // Reset state
            $this->showCropper = false;
            $this->photo = null;
            $this->croppedImage = null;

            session()->flash('message', 'პროფილის სურათი წარმატებით განახლდა!');
        } catch (\Exception $e) {
            session()->flash('error', 'შეცდომა: ' . $e->getMessage());
        }
    }



    // ძველი მეთოდი - ვტოვებთ უკუთავსებადობისთვის
    public function saveCroppedImage($imageData)
    {
        // გადავამისამართოთ ახალ მეთოდზე
        $this->handleCroppedImage(['imageData' => $imageData]);
    }

    public function render()
    {
        return view('livewire.upload-photo');
    }
}
