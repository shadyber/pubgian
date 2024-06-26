<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserMenu extends Component
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

    public function render()
    {
        return view('livewire.user-menu');
    }
}
