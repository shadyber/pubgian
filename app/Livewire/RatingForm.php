<?php

namespace App\Livewire;

use Livewire\Component;

class RatingForm extends Component
{
    public  $itemid;

    public function mount($itemid){
        $this->item_id=$itemid;
    }
    public function render()
    {

        return view('livewire.rating-form');
    }
}
