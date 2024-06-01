<?php

namespace App\Livewire;

use App\Models\Item;
use App\Models\ItemCategory;
use Livewire\Component;


class Wizard extends Component
{

    public $currentStep = 1;
    public $name,
        $price, $detail,
        $status = 1,
        $photo,$thumb,
        $color,$weight,
        $item_category_id,
        $init_qnt=1,
        $badge='new',
        $tags,
        $visit=0;
    public $successMessage = '';

    public $item_categories;


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
            'price' => 'required',
            'item_category_id' => 'required|numeric',
        ]);

        $this->currentStep = 2;
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'init_qnt' => 'required',
            'status' => 'required',
            'photo' =>'required',
        ]);

        $this->currentStep = 3;
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
        Item::create([
            'name' => $this->name,
            'price' => $this->amount,
            'detail' => $this->description,
            'init_qnt' => $this->stock,
            'status' => $this->status,
            'color' => $this->status,
            'weight' => $this->status,
            'item_category_id' => $this->status,
            'tags' => $this->status,
        ]);

        $this->successMessage = 'Product Created Successfully.';

        $this->clearForm();

        $this->currentStep = 1;
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
