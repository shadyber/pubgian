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



    public function render()
    {
        $categories = ItemCategory::all();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories])->layout('layouts.guest');
    }
}
