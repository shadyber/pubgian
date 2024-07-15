<?php

namespace App\Livewire\Admin;

use App\Models\Item;
use App\Models\ItemCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
public $user;
  public function __construct()
  {$this->user=Auth::user();
      if($this->user->id!=1){
          return $this->redirect('dashboard');
      }
  }

    public function render()
    {
        $categories = ItemCategory::all();


        return view('livewire.admin.admin-add-product-component',['categories'=>$categories])->layout('layouts.admin');
    }
}
