<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Theme;
use App\Models\User;
use App\Models\Video;

class ThemeSelector extends Component
{
    public $editVideoId = null;
    public $user;
    public $selectedTheme = null;
    public $themes = [];
    public $theme_id;
    public $title;
    public $description;
    public $url;
    public $takenThemes = [];
    public $showDropdown = false;
    public $maxVisibleThemes = 5; // How many themes to show before dropdown
    public $showForm = false;
    public $showFormSubmit = false;
    public $video;

    public function mount()
    {
        $this->video = Video::where('status',1)
            ->where('user_id',auth()->id())
            ->get();
        $this->user = auth()->user();
        // Define your themes
            $this->themes = Theme::where('active', 1)
            ->pluck('title', 'slug') // ან 'key' ან 'id' რაც გინდა გამოიყენე
            ->toArray();
        // Get taken themes from database
        $this->loadTakenThemes();

        $this->theme_id = $this->selectedTheme;
    }

    public function loadTakenThemes()
    {
        $userId = auth()->id();
        $this->takenThemes = Video::with('theme')
            ->where('user_id', $userId)
            ->get()
            ->map(function ($video) {
                return optional($video->theme)->slug; // ← აქ slug
            })
            ->filter() // მოაშორებს null-ებს
            ->unique() // იმავე თემა-ზე ატვირთულ ვიდეოებს წაშლის
            ->values() // reindex array
            ->toArray();

    }

    public function showform(){
        if(empty($this->selectedTheme)){
          $this->showFormSubmit = false;
        }else{
            $this->showFormSubmit = true;
        }
    }

    public function save(){

        $this->validate([
            'theme_id' => 'required',
            'title' => 'required|string|max:255',
            'url' => 'required|url',
            'description' => 'nullable|string',
        ]);

        if (
            Video::where('user_id', auth()->id())
                ->whereHas('theme', function ($query) {
                    $query->where('slug', $this->theme_id); // თუ slug-ით ამოწმებ
                })
                ->exists()
        ) {
            $this->addError('theme_id', 'თქვენ უკვე ატვირთეთ ვიდეო ამ თემაზე');
            session()->flash('error', 'თქვენ უკვე ატვირთეთ ვიდეო ამ თემაზე');
            return;
        }

        $this->user = auth()->user();
        if (!$this->user) {
            abort(403, 'User not authenticated.');
        }

        $theme_id = Theme::where('slug', $this->theme_id)->first()->id;


        Video::create([
            'user_id' => $this->user->id,
            'theme_id' => $theme_id,
            'title' => $this->title,
            'video_url' => $this->url,
            'description' => $this->description,
            'status' => 1,
        ]);

        // Reset form fields
        $this->reset(['title', 'url', 'description']);
        $this->video = Video::where('status', 1)
            ->where('user_id', auth()->id())
            ->get();
        $this->loadTakenThemes();

        // Show success message
        session()->flash('message', 'Video added successfully!');
    }

    public function selectTheme($themeKey)
    {
        // Check if theme is already taken
        if (in_array($themeKey, $this->takenThemes)) {
            return;
        }

        $this->selectedTheme = $themeKey;
        $this->theme_id = $this->selectedTheme;
        $this->showDropdown = false; // Close dropdown after selection

        if(!empty($this->selectedTheme)){
            $this->showForm = true;
        }
        // Dispatch event when theme is selected
        $this->dispatch('themeSelected', $themeKey);
    }

    public function toggleDropdown()
    {
        $this->showDropdown = !$this->showDropdown;
    }

    public function isThemeTaken($themeKey)
    {
        return in_array($themeKey, $this->takenThemes);
    }

    public function getVisibleThemes()
    {
        return array_slice($this->themes, 0, $this->maxVisibleThemes, true);
    }

    public function getDropdownThemes()
    {
        return array_slice($this->themes, $this->maxVisibleThemes, null, true);
    }

    public function hasMoreThemes()
    {
        return count($this->themes) > $this->maxVisibleThemes;
    }

    public function getRemainingCount()
    {
        return count($this->themes) - $this->maxVisibleThemes;
    }

    public function render()
    {
        return view('livewire.theme-selector');
    }


//    video update

    public function edit($id)
    {
        $video = Video::findOrFail($id);
        $this->editVideoId = $video->id;
        $this->title = $video->title;
        $this->description = $video->description;
        $this->url = $video->video_url;
    }
    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'required|url',
        ]);

        $video = Video::findOrFail($this->editVideoId);
        $video->update([
            'title' => $this->title,
            'description' => $this->description,
            'video_url' => $this->url,
        ]);

        $this->resetEditFields();
        $this->video = Video::where('status', 1)
            ->where('user_id',auth()->id())
            ->get();
        session()->flash('message', 'ვიდეო განახლდა წარმატებით!');
    }

    public function cancelEdit()
    {
        $this->resetEditFields();
    }
    private function resetEditFields()
    {
        $this->editVideoId = null;
        $this->title = null;
        $this->description = null;
        $this->url = null;
    }
    public function delete($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();
        $this->video = Video::where('status', 1)->get();
        $this->loadTakenThemes();
        session()->flash('message', 'ვიდეო წარმატებით წაიშალა!');
    }
}
