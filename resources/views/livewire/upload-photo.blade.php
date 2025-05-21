<div
    x-data="{
        cropper: null,
        initCropper() {
            console.log('Alpine initCropper called');
            this.$nextTick(() => {
                const image = document.getElementById('profileImage');
                if (!image) {
                    console.log('Profile image not found');
                    return;
                }

                // თუ უკვე ინიციალიზებულია, წავშალოთ
                if (this.cropper) {
                    console.log('Destroying existing cropper');
                    this.cropper.destroy();
                }

                console.log('Initializing new cropper');
                // შევქმნათ ახალი Cropper
                try {
                    this.cropper = new Cropper(image, {
                        aspectRatio: 1,
                        viewMode: 1,
                        autoCropArea: 0.8,
                        ready: function() {
                            console.log('Cropper is ready');
                        }
                    });
                    console.log('Cropper initialized successfully');
                } catch (e) {
                    console.error('Error initializing cropper:', e);
                }
            });
        },
        cropImage() {
            console.log('Crop button clicked');
            if (!this.cropper) {
                console.error('Cropper not initialized');
                return;
            }

            try {
                const canvas = this.cropper.getCroppedCanvas();
                if (canvas) {
                    const croppedImage = canvas.toDataURL('image/jpeg');
                    console.log('Image cropped, sending to server');
                    // Livewire 3-ის სწორი სინტაქსი
{{--                    Livewire.dispatch('saveCroppedImage',  { detail: { imageData: croppedImage } });--}}
                    Livewire.dispatch('saveCroppedImage', { imageData: croppedImage });

                } else {
                    console.error('Failed to get cropped canvas');
                }
            } catch (e) {
                console.error('Error cropping image:', e);
            }
        }
    }"
    x-init="console.log('Alpine component initialized');"
    @photo-uploaded.window="initCropper()"
>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

        <div class="col-auto">
        <div class="avatar avatar-xl position-relative">
            <img src="{{ $user->profile_photo_path ? asset('storage/' . $user->profile_photo_path) :  asset('assets/img/team-1.jpg') }}"
                 alt="Profile Image" class="w-100 border-radius-lg shadow-sm">

            <label for="photo" class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2" style="cursor: pointer;">
                <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Image"></i>
            </label>

            <input type="file" id="photo" wire:model.live="photo" class="d-none" accept="image/*">
        </div>

        @error('photo') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
        </div>

@if ($showCropper)
    <div class="mt-3">
        <div class="img-container mb-3">
            <img id="profileImage" src="{{ $photo->temporaryUrl() }}" alt="Cropping Preview" x-on:load="initCropper()">
        </div>

        <button type="button" class="btn btn-primary btn-sm" x-on:click="cropImage()">
            <i class="fas fa-crop me-1"></i> სურათის ამოჭრა
        </button>
        <button type="button" class="btn btn-outline-secondary btn-sm ms-2" wire:click="$set('showCropper', false)">
            <i class="fas fa-times me-1"></i> გაუქმება
        </button>
    </div>
@endif

    {{-- სკრიპტები და სტილები --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js" defer></script>

    <style>
        .img-container {
            max-width: 100%;
            height: 400px;
            margin-bottom: 20px;
        }
        .img-container img {
            display: block;
            max-width: 100%;
            max-height: 100%;
        }
        /* დამატებითი სტილები Cropper.js-თვის */
        .cropper-container {
            margin: 0 auto;
        }
    </style>
</div>
