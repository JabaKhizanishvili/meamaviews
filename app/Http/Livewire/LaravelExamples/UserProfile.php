<?php

namespace App\Http\Livewire\LaravelExamples;
use App\Models\User;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProfile extends Component
{
    use WithFileUploads;


    public $photo;
    public User $user;
    public $showSuccesNotification  = false;
    public $showDemoNotification = false;
    public $iban;
    public $tiktok_link;
    public $verified;
    public $hasUploadedIban = false;

    public $photoPath;

    protected $listeners = ['uploadCroppedPhoto'];


    protected $rules = [
        'user.name' => 'required|max:40|min:3',
        'user.email' => 'required|email:rfc,dns',
        'user.id_number' => 'required|numeric|digits:11',
        'user.phone' => 'required|max:10',
        'user.about_me' => 'nullable|max:200',
        'user.instagram' => 'nullable|max:200',
        'user.facebook' => 'nullable|max:200',
        'iban' => 'required|max:200',
        'tiktok_link' => 'required|url|max:200',
    ];
    public function mount()
    {
        $this->photoPath = auth()->user()->profile_photo_path;
        $this->user = $user = Auth::user();
        $this->iban = $user->iban?->iban ?? '';  // თუ ცარიელია, დააყენე ''-ზე

        $this->verified = $user->fresh()->verified ?? false;
        // თუ socialAccount არის hasOne ურთიერთობა და აქვს 'url' სვეტი
        $this->tiktok_link = $user->socialAccount?->url ?? '';
        $this->hasUploadedIban = $user->iban()->exists();
    }


    public function uploadCroppedPhoto($base64Image)
    {
        // ამოჭრა base64 პრეფიქსი
        $base64Image = preg_replace('/^data:image\/\w+;base64,/', '', $base64Image);
        $base64Image = str_replace(' ', '+', $base64Image);

        $imageData = base64_decode($base64Image);
        $fileName = 'profiles/' . auth()->id() . '_' . time() . '.jpg';

        // შეინახე storage-ში
        Storage::disk('public')->put($fileName, $imageData);

        // გაანახლე user-ის სურათის ველი
        $user = auth()->user();
        $user->profile_photo_path = $fileName;
        $user->save();

        $this->photoPath = $fileName;
        $this->dispatchBrowserEvent('notify', ['message' => 'სურათი განახლდა!']);
    }

    public function save()
    {
        $this->validate();
        $user = Auth::user();
        $this->user->save();

        $this->user->iban()->updateOrCreate(
            ['user_id' => $user->id],
            ['iban' => $this->iban]
        );

        $this->user->socialAccount()->updateOrCreate(
            ['user_id' => $user->id, 'provider' => 'tiktok'],
            ['url' => $this->tiktok_link]
        );

        $hasIban = $user->iban()->exists();
        $hasTikTok = $user->socialAccount()->where('provider', 'tiktok')->exists();

        if ($hasIban && $hasTikTok) {
            $user->save();
        }

        $this->showSuccesNotification = true;
    }


    public function render()
    {
        return view('livewire.laravel-examples.user-profile');
    }
}
