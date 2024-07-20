<?php

namespace App\Livewire;

use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminMenu extends Component
{
    public $page=1;
    public $user;

    function mount()
    {
      $this->user=Auth::user();
    }

    function  changePage($n){
        $this->page=$n;
    }

    public function deletItem($item_id){
      $item=Item::find($item_id);
      $item->delete();
    }

    public function render()
    {

        return view('livewire.admin-menu');
    }
}
