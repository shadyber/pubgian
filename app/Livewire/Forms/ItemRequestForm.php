<?php

namespace App\Livewire\Forms;

use Livewire\Component;

class ItemRequestForm extends Component
{


    public $name,
        $price_range,
        $image,
        $description,
        $video_url,
        $shop_url,
        $item_category_id,
        $order_urgency;

    public $successMessage = '';



    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
        $this->successMessage = 'Product Created Successfully.';

    }



    public function render()
    {
        return view('livewire.forms.item-request-form');
    }
}
