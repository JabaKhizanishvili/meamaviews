<div>
<div class="card-header pb-0">
<div class="theme-selector-container">
    <div class="theme-selector-wrapper">
        <!-- Plus Icon -->
        <div wire:click="showform" class="plus-icon cursor-pointer {{$showForm ? 'bg-success' : ''}}">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>

        <!-- Visible Theme Buttons -->
        <div class="theme-bar">
            @foreach($this->getVisibleThemes() as $themeKey => $themeName)
                @php
                    $isTaken = $this->isThemeTaken($themeKey);
                @endphp
                <button
                    type="button"
{{--                    wire:click="selectTheme('{{ $themeKey }}')"--}}
                    @if (!$isTaken)
                      wire:click="selectTheme('{{ $themeKey }}')"
                    @endif
                    class="theme-button
                           {{ $selectedTheme === $themeKey ? 'selected' : '' }}
                           {{ $this->isThemeTaken($themeKey) ? 'disabled' : '' }}"
                    {{ $this->isThemeTaken($themeKey) ? 'disabled' : '' }}
                >
                    {{ $themeName }}
                    @if($this->isThemeTaken($themeKey))
                        <span class="taken-indicator">✓</span>
                    @endif
                </button>
            @endforeach

            <!-- More Themes Button (if there are more themes) -->
            @if($this->hasMoreThemes())
                <div class="more-themes-container">
                    <button
                        type="button"
                        wire:click="toggleDropdown"
                        class="more-themes-button"
                    >
                        +{{ $this->getRemainingCount() }} მეტი
                        <svg class="dropdown-arrow {{ $showDropdown ? 'rotated' : '' }}" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    @if($showDropdown)
                        <div class="dropdown-menu">
                            @foreach($this->getDropdownThemes() as $themeKey => $themeName)
                                <button
                                    type="button"
                                    wire:click="selectTheme('{{ $themeKey }}')"
                                    class="dropdown-theme-button
                                           {{ $selectedTheme === $themeKey ? 'selected' : '' }}
                                           {{ $this->isThemeTaken($themeKey) ? 'disabled' : '' }}"
                                    {{ $this->isThemeTaken($themeKey) ? 'disabled' : '' }}
                                >
                                    {{ $themeName }}
                                    @if($this->isThemeTaken($themeKey))
                                        <span class="taken-indicator">✓</span>
                                    @endif
                                </button>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </div>

    @if($selectedTheme)
        <div class="selected-theme-info">
            Selected Theme: <strong>{{ $themes[$selectedTheme] }}</strong>
        </div>
    @endif

</div>
</div>

    <div class="container mt-4 {{!$showFormSubmit ? 'd-none' : 'd-block'}}">
        <form wire:submit="save" action="#" method="POST" role="form text-left">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {{--                                <label for="user-name" class="form-control-label">{{ __('Full Name') }}</label>--}}
                        <label for="title" class="form-control-label">ვიდეოს სათაური</label>
                        <div class="@error('title')border border-danger rounded-3 @enderror">
                            <input wire:model.live="title" class="form-control" type="text" placeholder="ვიდეოს სათაური"
                                   id="user-name">
                        </div>
                        @error('title') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {{--                                <label for="user-name" class="form-control-label">{{ __('Full Name') }}</label>--}}
                        <label for="url" class="form-control-label">ვიდეოს ლინკი (url)</label>
                        <div class="@error('url')border border-danger rounded-3 @enderror">
                            <input wire:model.live="url" class="form-control" type="text" placeholder="https://www.tiktok.com/@onlyonepercent__/video/7506868720472673544?is_from_webapp=1&sender_device=pc"
                                   id="user-name">
                        </div>
                        @error('url') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>
{{--            <input type="hidden" name="theme_id" wire:model="theme_id" value="{{ $selectedTheme }}">--}}
            <input type="hidden" wire:model="theme_id">
            <div class="form-group">
                {{--                        <label for="about">{{ 'About Me' }}</label>--}}
                <label for="about">ვიდეოს აღწერა</label>
                <div class="@error('description')border border-danger rounded-3 @enderror">
                            <textarea wire:model.live="description" class="form-control" id="about" rows="3"
                                      placeholder=""></textarea>
                </div>
                @error('description') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if(session('message'))
                <p class="text-success">
                    {{ session('message') }}
                </p>
            @endif

            @error('theme_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="d-flex justify-content-center mb-3">
                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'ვიდეოს დამატება' }}</button>
            </div>

        </form>

    </div>
    @if(session('message'))
        <p class="text-success">
            {{ session('message') }}
        </p>
    @endif

<div class="card-body px-0 pt-0 pb-2">
    <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
            <thead>
            <tr>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Name
                </th>

                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    description
                </th>

                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    video url
                </th>

                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Creation Date
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>

{{--            @foreach($video as $value)--}}

{{--            <tr>--}}

{{--                <td class="text-center">--}}
{{--                    <p class="text-xs font-weight-bold mb-0">{{$value->title}}</p>--}}
{{--                </td>--}}

{{--                <td class="text-center">--}}
{{--                    <p class="text-xs font-weight-bold mb-0">{{$value->description}}</p>--}}
{{--                </td>--}}

{{--                <td class="text-center">--}}
{{--                    <a href="{{$value->video_url}}" class="text-xs font-weight-bold mb-0" target="_blank"> {{ Str::limit($value->video_url, 25)}} </a>--}}
{{--                </td>--}}

{{--                <td class="text-center">--}}
{{--                    <span class="text-secondary text-xs font-weight-bold"> {{ date('y m d',strtotime($value->created_at)) }}  </span>--}}
{{--                </td>--}}
{{--                <td class="text-center">--}}
{{--                    <a href="#" class="mx-3" data-bs-toggle="tooltip"--}}
{{--                       data-bs-original-title="Edit user">--}}
{{--                        <i class="fas fa-user-edit text-secondary"></i>--}}
{{--                    </a>--}}
{{--                    <span>--}}
{{--                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>--}}
{{--                                        </span>--}}
{{--                </td>--}}
{{--            </tr>--}}

{{--            @endforeach--}}

@foreach($video as $value)
    <tr>
        {{-- Title --}}
        <td class="text-center">
            @if($editVideoId === $value->id)
                <input
                    type="text"
                    wire:model.defer="title"
                    wire:keydown.enter="update"
                    class="form-control form-control-sm"
                >
                @error('title') <div class="text-danger">{{ $message }}</div> @enderror
            @else
                <p class="text-xs font-weight-bold mb-0">{{ $value->title }}</p>
            @endif
        </td>

        {{-- Description --}}
        <td class="text-center">
            @if($editVideoId === $value->id)
                <textarea wire:model.defer="description" class="form-control form-control-sm"></textarea>
            @else
                <p class="text-xs font-weight-bold mb-0">{{ $value->description }}</p>
            @endif
        </td>

        {{-- Video URL --}}
        <td class="text-center">
            @if($editVideoId === $value->id)
                <input
                    type="text"
                    wire:model.defer="url"
                    wire:keydown.enter="update"
                    class="form-control form-control-sm"
                >
                @error('url') <div class="text-danger">{{ $message }}</div> @enderror
            @else
                <a href="{{ $value->video_url }}" class="text-xs font-weight-bold mb-0" target="_blank">
                    {{ Str::limit($value->video_url, 25) }}
                </a>
            @endif
        </td>

        {{-- Created At --}}
        <td class="text-center">
        <span class="text-secondary text-xs font-weight-bold">
            {{ date('y m d', strtotime($value->created_at)) }}
        </span>
        </td>

        {{-- Actions --}}
        <td class="text-center">
            @if($editVideoId === $value->id)
                <a href="#" wire:click.prevent="update" class="mx-2" title="Save">
                    <i class="fas fa-check text-success"></i>
                </a>
                <a href="#" wire:click.prevent="cancelEdit" class="mx-2" title="Cancel">
                    <i class="fas fa-times text-danger"></i>
                </a>
            @else
                <a href="#" wire:click.prevent="edit({{ $value->id }})" class="mx-2" title="Edit">
                    <i class="fas fa-user-edit text-secondary"></i>
                </a>
                <a href="#" wire:click.prevent="delete({{ $value->id }})" class="mx-2" title="Delete">
                    <i class="fas fa-trash text-danger"></i>
                </a>
            @endif
        </td>
    </tr>
@endforeach


            </tbody>
        </table>
    </div>
</div>

    <style>
        .theme-selector-container {
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        .theme-selector-wrapper {
            display: flex;
            align-items: center;
            gap: 15px;
            background: rgba(255, 255, 255, 0.1);
            padding: 15px 20px;
            border-radius: 50px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .plus-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .theme-bar {
            display: flex;
            gap: 10px;
            align-items: center;
            flex-wrap: wrap;
        }

        .theme-button {
            padding: 8px 16px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
            position: relative;
            min-width: 70px;
            text-align: center;
        }

        .theme-button:hover:not(.disabled) {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .theme-button.selected {
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            border-color: #ff6b6b;
            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.4);
            transform: translateY(-2px);
        }

        .theme-button.disabled {
            background: rgba(150, 150, 150, 0.3);
            color: rgba(255, 255, 255, 0.5);
            cursor: not-allowed;
            border-color: rgba(150, 150, 150, 0.3);
        }

        .theme-button.disabled:hover {
            transform: none;
            box-shadow: none;
        }

        .taken-indicator {
            margin-left: 5px;
            font-size: 12px;
            opacity: 0.7;
        }

        /* More Themes Button */
        .more-themes-container {
            position: relative;
        }

        .more-themes-button {
            padding: 8px 16px;
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.15);
            color: white;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
            display: flex;
            align-items: center;
            gap: 8px;
            border-style: dashed;
        }

        .more-themes-button:hover {
            background: rgba(255, 255, 255, 0.25);
            border-color: rgba(255, 255, 255, 0.6);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .dropdown-arrow {
            transition: transform 0.3s ease;
        }

        .dropdown-arrow.rotated {
            transform: rotate(180deg);
        }

        /* Dropdown Menu */
        .dropdown-menu {
            position: absolute !important;
            display: block;
            top: calc(100% + 10px) !important;
            left: 0 !important;
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(15px) !important;
            border-radius: 15px !important;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3) !important;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 10px;
            min-width: 200px;
            max-height: 300px;
            overflow-y: auto;
            z-index: 999999999999999999999991000 !important;
            animation: slideDown 0.3s ease;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dropdown-theme-button {
            width: 100%;
            padding: 10px 15px;
            border: none;
            border-radius: 10px;
            background: transparent;
            color: #333;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: left;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        .dropdown-theme-button:hover:not(.disabled) {
            background: rgba(102, 126, 234, 0.1);
            color: #667eea;
        }

        .dropdown-theme-button.selected {
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            color: white;
        }

        .dropdown-theme-button.disabled {
            background: rgba(150, 150, 150, 0.1);
            color: rgba(0, 0, 0, 0.4);
            cursor: not-allowed;
        }

        .dropdown-theme-button.disabled:hover {
            background: rgba(150, 150, 150, 0.1);
            color: rgba(0, 0, 0, 0.4);
        }

        .selected-theme-info {
            margin-top: 20px;
            padding: 10px 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            color: #333;
            font-size: 14px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        /* RTL Support for Arabic text */
        .theme-button,
        .dropdown-theme-button {
            direction: rtl;
            text-align: center;
        }

        .dropdown-theme-button {
            text-align: left;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .theme-selector-wrapper {
                flex-direction: column;
                gap: 15px;
                padding: 20px;
            }

            .theme-bar {
                flex-wrap: wrap;
                justify-content: center;
            }

            .theme-button,
            .more-themes-button {
                min-width: 60px;
                font-size: 12px;
                padding: 6px 12px;
            }

            .dropdown-menu {
                left: -50px;
                right: -50px;
                min-width: auto;
            }
        }

        /* Custom Scrollbar for dropdown */
        .dropdown-menu::-webkit-scrollbar {
            width: 6px;
        }

        .dropdown-menu::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.1);
            border-radius: 3px;
        }

        .dropdown-menu::-webkit-scrollbar-thumb {
            background: rgba(102, 126, 234, 0.5);
            border-radius: 3px;
        }

        .dropdown-menu::-webkit-scrollbar-thumb:hover {
            background: rgba(102, 126, 234, 0.7);
        }
    </style>
</div>
