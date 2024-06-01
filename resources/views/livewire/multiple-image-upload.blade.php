<div class="card">
    <div class="card-body">
        <form wire:submit.prevent="save">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($images)
                Photo Preview:
                <div class="row">
                    @foreach ($images as $images)
                        <div class="col-3 card me-1 mb-1">
                            <img src="{{ $images->temporaryUrl() }}">
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="mb-3">
                <label class="form-label">Image Upload</label>
                <input type="file" class="form-control" wire:model="images[]" multiple>
                <div wire:loading wire:target="images">Uploading...</div>
                @error('images.*') <span class="error">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save Image</button>
            <div wire:loading wire:target="save">process...</div>
        </form>
    </div>
</div>
