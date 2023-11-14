<?php

namespace App\Livewire;
use App\Models\Tent;
use Livewire\WithFileUploads;

use Livewire\Component;

class TentDisplayComponent extends Component
{
    use WithFileUploads;
    public $tentName;
    public $description;
    public $capacity;
    public $price;
    public $image;

    public function rules()
    {
        return [ 
            "tentName" => "required|string|max:255",
            "description" => "required|string",
            "capacity" => "requied|integer|min:1",
            "price" => "required|numeric|min:0",
            "image" => "requied|image|mimes:jpeg,png,jpg,gif|max:2048",
        ];
    }
    public function saveTentData()
    {
        // $this->validate();
        $tentData = new Tent;

        $tentData->tentName = $this->tentName;
        $tentData->description = $this->description;
        $tentData->capacity = $this->capacity;
        $tentData->price = $this->price;
        $imagename=$this->image->store('photos','public');
        $tentData->image = $imagename;

        $tentData->save();

    }
    public function render()
    {
        return view('livewire.tent-display-component');
    }
}
