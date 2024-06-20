<div>
    <form method="POST" >
@csrf

    <div>
        <x-label for="name" value="{{ __('Item Name') }}" />
        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    </div>


    <div>
        <x-label for="price_range" value="{{ __('Price Range') }}" />
        <x-input id="price_range" class="block mt-1 w-full" type="text" name="price_range" :value="old('price_range')"  />
    </div>

        <div>
            <x-label for="price_range" value="{{ __('Item Images') }}" />
            <x-input id="images" class="block mt-1 w-full" type="file" name="images" :value="old('images')"  />
        </div>

        <div>
            <x-label for="video_url" value="{{ __('Video Url') }}" />
            <x-input id="video_url" class="block mt-1 w-full" type="text" name="video_url" :value="old('video_url')"  />
        </div>

        <div>
            <x-label for="shop_url" value="{{ __('Shop Url') }}" />
            <x-input id="shop_url" class="block mt-1 w-full" type="text" name="shop_url" :value="old('shop_url')"  />
        </div>

        <div>
        <x-label for="description" value="{{__('Item Description')}}" />
        <textarea name="description" id="" cols="30" rows="10" id="description" class="form-control">

        </textarea>
    </div>


<div class="p-lg-1 m-lg-1">
    <select wire:model="item_category_id" class="form-control black-color">
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
        <select wire:model="order_urgency" class="form-control black-color">
            <option value="" selected>Select Order Urgency</option>
            <option value="30" selected> less than a month</option>
            <option value="365" selected>This Year</option>
            <option value="1000" selected>Don't Care</option>

        </select>
    </div>


    <div>
       <x-button> Submit</x-button>
    </div>
    </form>
</div>


