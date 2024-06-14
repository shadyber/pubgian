<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <form wire:submit="save">
<div class="row">


        @if ($photos)
            @foreach($photos as $photo)
                <div class="card col-md-2">

                    <img src="{{ $photo->temporaryUrl() }}" width="100px" height="100px">
                </div>
            @endforeach
        @endif
</div>

        <input type="hidden" wire:model="item_id" value="{{$item->id}}">
        <input type="file" wire:model="photos" multiple accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">

        @error('photos.*') <span class="error">{{ $message }}</span> @enderror

        <button type="submit" class="button btn-primary form-control">Save photo</button>

        @if(!empty($successMessage))
            <div class="alert alert-success">
                {{ $successMessage }}
            </div>
        @endif


    </form>

</div>
