<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ItemPhoto;

class MultipleImageUpload extends Component
{
    use WithFileUploads;

    public $images = [];

    public function save()
    {
        $this->validate([
            'images.*' => 'image|max:1024', // 1MB Max
        ]);

        foreach ($this->images as $key => $image) {
            $this->images[$key] = $image->store('images');
        }

        $this->images = json_encode($this->images);

        ItemPhoto::create([
            'photo' => $this->images,


        ]);

        session()->flash('success', 'Images has been successfully Uploaded.');

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.multiple-image-upload');
    }
}
