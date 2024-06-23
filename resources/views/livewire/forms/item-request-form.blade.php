<div>

    @if(!empty($successMessage))
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endif


    <form wire:submit="submitForm" >


    <div>
        @error('name') <span class="error red-color">{{ $message }}</span> @enderror
        <x-label for="name" value="{{ __('Item Name') }}" />
        <input type="text" name="name" id="name" class="form-control" required wire:model="name">
    </div>


    <div>
        @error('price_range') <span class="error red-color">{{ $message }}</span> @enderror
        <x-label for="price_range" value="{{ __('Price Range (ETB)') }}" />
        <x-input id="price_range" class="block mt-1 w-full" type="text" name="price_range" wire:model="price_range" :value="old('price_range')"  />
    </div>

        <div class="row">


            @if ($images)
                @foreach($images as $image)
                    <div class="card col-md-2 p-2 m-2">

                        <img src="{{ $image->temporaryUrl() }}" width="100px" height="100px">
                    </div>
                @endforeach
            @endif
        </div>


        <div>
            @error('images') <span class="error red-color">{{ $message }}</span> @enderror
            <x-label for="images" value="{{ __('Item Images') }}" />
            <input type="file" wire:model="images" multiple  accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">

        </div>

        <div>
            @error('video_url') <span class="error red-color">{{ $message }}</span> @enderror
            <x-label for="video_url" value="{{ __('Video Url') }}" />
            <x-input id="video_url" class="block mt-1 w-full" type="url" name="video_url" wire:model="video_url" :value="old('video_url')"  />
        </div>

        <div>
            @error('shop_url') <span class="error red-color">{{ $message }}</span> @enderror
            <x-label for="shop_url" value="{{ __('Shop Url') }}" />
            <x-input id="shop_url" class="block mt-1 w-full" type="url" name="shop_url" wire:model="shop_url" :value="old('shop_url')"  />
        </div>

        <div>
            @error('description') <span class="error red-color">{{ $message }}</span> @enderror
            <x-label for="description" value="{{__('Item Description')}}" />

            <textarea name="description" id="description" class="form-control" required wire:model="description">

            </textarea>

    </div>


<div class="p-lg-1 m-lg-1">
    @error('item_category_id') <span class="error red-color">{{ $message }}</span> @enderror
    <select wire:model="item_category_id" class="form-control black-color" wire:model="item_category_id">
        <option value="" selected>Choose Item Category</option>
        @foreach (\App\Models\ItemCategory::all()->all() as $mb)
            <option value="{{$mb->id}}" class="border-0 text-dark">
                @if($mb->parent_category_id !=0)
                    -  {{\App\Models\ItemCategory::find($mb->parent_category_id)->title}} /
                @endif
                {{$mb->title}}    </option>
        @endforeach
    </select>
</div>


    <div class="p-lg-1 m-lg-1">
        @error('order_urgency') <span class="error red-color">{{ $message }}</span> @enderror
        <select wire:model="order_urgency" class="form-control black-color" wire:model="order_urgency">
            <option value="" selected>Select Order Urgency</option>
            <option value="30" selected> less than a month</option>
            <option value="365" selected>This Year</option>
            <option value="1000" selected>Don't Care</option>

        </select>
    </div>


        <div>
            <button type="submit" class="button btn-primary form-control">Save Item Order Request</button>

        </div>

        @if(!empty($successMessage))
            <div class="alert alert-success">
                {{ $successMessage }}
            </div>
        @endif


    </form>


</div>


