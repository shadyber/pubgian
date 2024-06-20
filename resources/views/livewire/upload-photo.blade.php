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
        <div>
            <input type="file" wire:model="photos" multiple accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">

            @error('photos.*') <span class="error">{{ $message }}</span> @enderror
        </div>

<div>
    <button type="submit" class="button btn-primary form-control">Save photo</button>

</div>

        @if(!empty($successMessage))
            <div class="alert alert-success">
                {{ $successMessage }}
            </div>
        @endif


    </form>

</div>
