<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <form wire:submit="save">
<div class="row">


        @if ($photos)
            @foreach($photos as $photo)
                <div class="card col-md-2 p-2 m-2">

                    <img src="{{ $photo->temporaryUrl() }}" width="100px" height="100px">
                </div>
            @endforeach
        @endif
</div>
<div>
    <input type="hidden" wire:model="item_id" value="{{$item->id}}">
</div>
        <div class="form-group mt-3 mb-3 ">
            <input type="file" wire:model="photos" multiple accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">

            @error('photos.*') <span class="error">{{ $message }}</span> @enderror
        </div>
<div      x-data="{ uploading: false, progress: 0 }"
          x-on:livewire-upload-start="uploading = true"
          x-on:livewire-upload-finish="uploading = false; progress = 0;"
          x-on:livewire-upload-progress="progress = $event.detail.progress">
    ---
</div>
        <div x-show="uploading">
            <div class="w-full h-4 bg-slate-100 rounded-lg shadow-inner mt-3">
                <div class="bg-green-500 h-4 rounded-lg" :style="{ width: `${progress}%` }"></div>
            </div>
        </div>

<div class="border-2">
    <button type="submit" class="btn btn-dark btn-lg">Upload and Save photo</button>

</div>

        @if(!empty($successMessage))
            <div class="alert alert-success">
                {{ $successMessage }}
            </div>
        @endif


    </form>

</div>
