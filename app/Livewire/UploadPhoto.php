<?php

namespace App\Livewire;

use App\Models\Item;
use App\Models\ItemPhoto;
use Livewire\Component;
use Livewire\WithFileUploads;


class UploadPhoto extends Component
{
    use WithFileUploads;
    public $photos = [];
 public $item;
 public   $successMessage;


    public function upload($name)
    {
        $this->photo->storeAs('/', $name,  'images');
    }

    public function save()
    {


        foreach ($this->photos as  $key =>$photo) {

            // Store the file in the "photos" directory, with "public" visibility in a configured "s3" disk
           $img= $photo->storePublicly( 'images', 'public');
            if ($key===0){

              $this->item->update(
                    [
                        'photo'=>env('APP_URL').'/'.$img,
                        'thumb'=>env('APP_URL').'/'.$img,

                    ]
                );
            }

            ItemPhoto::create(
                [
                    'photo'=>env('APP_URL').'/'.$img,
                    'thumb'=>env('APP_URL').'/'.$img,
                    'item_id'=>$this->item->id,
                    'title'=>$this->item->name.' photo ',
                ]
            );
            $this->successMessage = 'Product Photo Updated  Successfully.';


        }


    }


    public function render()
    {

        return view('livewire.upload-photo',['item'=>$this->item]);
    }
}
