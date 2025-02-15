<?php

namespace App\Livewire;

use App\Models\Item;
use App\Models\ItemCategory;
use Cviebrock\EloquentSluggable\Sluggable;
use Livewire\Component;
use function Symfony\Component\String\Slugger\slug;


class Wizard extends Component
{

    public $currentStep = 1;
    public $name,
        $item,
        $price, $detail,
        $status = 1,
        $condition,
        $photo,
        $video_url,
        $thumb,
        $color,
        $weight,
        $item_category_id,
        $init_qnt=1,
        $badge='new',
        $tags,
        $visit=0;
    public $successMessage = '';



    /**
     * Write code on Method
     *
     * @return response()
     */
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'name' => 'required|unique:items',
            'detail' => 'required',
            'price' => 'required|numeric',
            'init_qnt'=>'required|numeric',
            'item_category_id' => 'required|numeric',
        ]);
$this->item=Item::create(
    [
        'name'=>$this->name,
        'price'=>$this->price,
        'init_qnt'=>$this->init_qnt,
        'item_category_id'=>$this->item_category_id,
        'detail'=>$this->detail,
        'item_condition'=>$this->condition,
        'user_id'=>1,
    ]
);

        $this->currentStep = 2;
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function secondStepSubmit()
    {



        $this->currentStep = 3;
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
       $this->item->update([
            'status' => $this->status,
            'color' => $this->status,
            'weight' => $this->status,
            'tags' => $this->status,
            'video_url' => $this->video_url,
        ]);

        $this->successMessage = 'Product Created Successfully.';

        $this->clearForm();

        $this->currentStep =4 ;
    }
public function showProduct ($slug){


    $this->successMessage = 'Product Created Successfully.';
    $this->clearForm();

}

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
        $this->name = '';
        $this->amount = '';
        $this->description = '';
        $this->stock = '';
        $this->status = 1;
    }




}
