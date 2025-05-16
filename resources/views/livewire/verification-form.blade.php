<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="save">
        <div class="mb-3">
            <label for="iban" class="form-label">აიბანი</label>
            <input type="text" wire:model.defer="iban" class="form-control" id="iban">
            @error('iban') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="tiktok_link" class="form-label">TikTok-ის ლინკი</label>
            <input type="url" wire:model.defer="tiktok_link" class="form-control" id="tiktok_link">
            @error('tiktok_link') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">შენახვა</button>
    </form>
</div>
