<?php

namespace App\Livewire\Forms;

use App\Models\UnlistedItem;
use Livewire\Component;
use Livewire\WithFileUploads;
use function MongoDB\BSON\toJSON;
use function Pest\Laravel\put;
use function Ramsey\Collection\add;

class ItemRequestForm extends Component
{
    use WithFileUploads;



    public function upload($photo)
    {
        $img= $photo->storePublicly( 'images', 'public');
return $img;
    }

    public $name,
        $price_range,
        $images,
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

        $imagesarray =array();

        foreach ($this->images as  $key =>$image) {

            // Store the file in the "photos" directory, with "public" visibility in a configured "s3" disk
            $img= $image->storePublicly( 'images', 'public');
            $imagesarray[]=$img;

            }


        UnlistedItem::create([
            'name' => $this->name,
            'description' => $this->description,
            'item_category_id' =>$this->item_category_id,
            'price_range' =>$this->price_range,
            'video_url' =>$this->video_url,
            'shop_url' =>$this->shop_url,
            'order_urgency' =>$this->order_urgency,
            'images'=>json_encode($imagesarray),
        ]);

        $this->successMessage = 'Order is  Created Successfully. We will notify you ASAP';

    }



    public function render()
    {
        return view('livewire.forms.item-request-form');
    }
}
