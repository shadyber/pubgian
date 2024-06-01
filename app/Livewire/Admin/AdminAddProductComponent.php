<?php

namespace App\Livewire\Admin;

use App\Models\Item;
use App\Models\ItemCategory;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{

    public function mount()
    {

    }


    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:products',
             'detail' => 'required',
             'price' => 'required|numeric',

            'status' => 'required',
            'init_qnt' => 'required|numeric',
            'image' => 'required|mimes:jpeg,png',
            'item_category_id' => 'required'
        ]);
    }

    public function addProduct()
    {      $this->validate([
        'name' => 'required',
        'slug' => 'required|unique:products',
        'detail' => 'required',
        'category_id' => 'required'
    ]);


        $product = new Item();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->detail = $this->detail;

        $product->price = $this->price;

        $product->status = $this->status;
        $product->init_qnt = $this->init_qnt;
        $product->whight = $this->weight;
        $product->color = $this->color;
        $product->tags = $this->tags;
        $product->badge = $this->badge;

        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->thumb = $imageName;
        $product->photo = $imageName;

        if($this->images)
        {
            $imagesname = '';
            foreach($this->images as $key=>$image)
            {
                $imgName = Carbon::now()->timestamp. $key. '.' . $image->extension();
                $image->storeAs('products',$imgName);
                $imagesname = $imagesname . ',' . $imgName;
            }
            $product->images = $imagesname;
        }

        $product->item_category_id = $this->item_category_id;
        $product->save();
        session()->flash('message','Product has been created successfully!');
    }


    public function render()
    {
        $categories = ItemCategory::all();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories])->layout('layouts.guest');
    }
}
