<?php

namespace App\Livewire;

use App\Models\Location;
use Livewire\Component;
use Livewire\WithFileUploads;

class LocationAddFormComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $image;
    public function render()
    {
        return view('livewire.location-add-form-component');
    }
    public function storeData()
    {
        $locationData = new Location();
        $locationData->name = $this->name;
        $locationData->description = $this->description;
        $imagename=$this->image->store('photos','public');
        $locationData->image = $imagename;

        $locationData->save();

    }
}
