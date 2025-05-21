<div>
<div>
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6">
            <div class="row gx-4">
                <div class="col-auto">
{{--                    <div class="avatar avatar-xl position-relative">--}}
{{--                        <img src="../assets/img/bruce-mars.jpg" alt="..." class="w-100 border-radius-lg shadow-sm">--}}
{{--                        <a href="javascript:;"--}}
{{--                            class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">--}}
{{--                            <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top"--}}
{{--                                title="Edit Image"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                    <livewire:upload-photo />
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
{{--                            {{ __('Alec Thompson') }}--}}
                            {{ $user->name }}
                        </h5>
{{--                        <p class="mb-0 font-weight-bold text-sm">--}}
{{--                            {{ __(' CEO / Co-Founder') }}--}}
{{--                        </p>--}}

                        <div class="mt-1">
                            @if ($verified && $hasUploadedIban )
                                <span class="badge bg-success">სტატუსი : ვერიფიცირებული</span>
                            @elseif(!$hasUploadedIban)
                            @else
                                <span class="badge bg-secondary">სტატუსი : მომლოდინე</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
{{--                <h6 class="mb-0">{{ __('Profile Information') }}</h6>--}}
                <h6 class="mb-0">პროფილი</h6>
            </div>
            <div class="card-body pt-4 p-3">

                @if ($showDemoNotification)
                    <div wire:model.live="showDemoNotification" class="mt-3  alert alert-primary alert-dismissible fade show"
                        role="alert">
                        <span class="alert-text text-white">
                            {{ __('You are in a demo version, you can\'t update the profile.') }}</span>
                        <button wire:click="$set('showDemoNotification', false)" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif

                @if ($showSuccesNotification)
                    <div wire:model.live="showSuccesNotification"
                        class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                        <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                        <span
                            class="alert-text text-white">{{ __('Your profile information have been successfuly saved!') }}</span>
                        <button wire:click="$set('showSuccesNotification', false)" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif

                <form wire:submit="save" action="#" method="POST" role="form text-left">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
{{--                                <label for="user-name" class="form-control-label">{{ __('Full Name') }}</label>--}}
                                <label for="user-name" class="form-control-label">სრული სახელი</label>
                                <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                    <input wire:model.live="user.name" class="form-control" type="text" placeholder="Name"
                                        id="user-name">
                                </div>
                                @error('user.name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-email" class="form-control-label">{{ __('Email') }}</label>
                                <div class="@error('user.email')border border-danger rounded-3 @enderror">
                                    <input wire:model.live="user.email" class="form-control" type="email"
                                        placeholder="@example.com" id="user-email">
                                </div>
                                @error('user.email') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user.phone" class="form-control-label">{{ __('ტელეფონი') }}</label>
                                <div class="@error('user.phone')border border-danger rounded-3 @enderror">
                                    <input wire:model.live="user.phone" class="form-control" type="tel"
                                        placeholder="+995 579 ..." id="phone">
                                </div>
                                @error('user.phone') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user.id_number" class="form-control-label">{{ __('პირადი ნომერი') }}</label>
                                <div class="@error('user.id_number') border border-danger rounded-3 @enderror">
                                    <input wire:model.live="user.id_number" class="form-control" type="text"
                                        placeholder="0101..." id="name">
                                </div>
                                @error('user.id_number') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="iban" class="form-control-label">{{ __('ანგარიშის ნომერი (Iban)') }}</label>
                                <div class="@error('iban') border border-danger rounded-3 @enderror">
                                    <input wire:model.live="iban" class="form-control" type="text"
                                           placeholder="GE00..." id="name">
                                </div>
                                @error('iban') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>

{{--                        <div class="col-md-6">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="url" class="form-control-label">{{ __('ტიკტოკის ანგარიში') }}</label>--}}
{{--                                <div class="@error('url') border border-danger rounded-3 @enderror">--}}
{{--                                    <input wire:model.live="url" class="form-control" type="text"--}}
{{--                                           placeholder="https://www.tiktok.com" id="name">--}}
{{--                                </div>--}}
{{--                                @error('url') <div class="text-danger">{{ $message }}</div> @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tiktok_link" class="form-control-label">{{ __('ტიკტოკის ანგარიში') }}</label>
                                <div class="@error('tiktok_link') border border-danger rounded-3 @enderror">
                                    <input wire:model.live="tiktok_link" class="form-control" type="text"
                                           placeholder="https://www.tiktok.com" id="tiktok_link">
                                </div>
                                @error('tiktok_link') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
{{--                        <label for="about">{{ 'About Me' }}</label>--}}
                        <label for="about">ჩემს შესახებ</label>
                        <div class="@error('user.about_me')border border-danger rounded-3 @enderror">
                            <textarea wire:model.live="user.about_me" class="form-control" id="about" rows="3"
                                placeholder=""></textarea>
                        </div>
                        @error('user.about_me') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'დამახსოვრება' }}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                {{--                <h6 class="mb-0">{{ __('Profile Information') }}</h6>--}}
                <h6 class="mb-0">პაროლის შეცვლა</h6>
            </div>
            <div class="card-body pt-4 p-3">

                <livewire:change-password />

            </div>
        </div>
    </div>
</div>
</div>
