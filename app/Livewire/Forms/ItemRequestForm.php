<?php

namespace App\Livewire\Forms;

use App\Models\UnlistedItem;
use Livewire\Component;
use Livewire\WithFileUploads;

class ItemRequestForm extends Component
{
    use WithFileUploads;



    public function upload($name)
    {
        $this->image->storeAs('/', $name,  'images');
    }

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

        $validatedData = $this->validate([
            'name' => 'required',
            'description' => 'required',
            'item_category_id' =>'required'
        ]);

        $img= $this->image->storePublicly( 'images', 'public');

        UnlistedItem::create([
            'name' => $this->name,
            'description' => $this->description,
            'item_category_id' =>$this->item_category_id,
            'price_range' =>$this->price_range,
            'video_url' =>$this->video_url,
            'shop_url' =>$this->shop_url,
            'order_urgency' =>$this->order_urgency,
        ]);

        $this->successMessage = 'Product Created Successfully.';

    }



    public function render()
    {
        return view('livewire.forms.item-request-form');
    }
}
