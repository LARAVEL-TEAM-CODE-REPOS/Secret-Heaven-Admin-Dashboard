<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tent;
use Livewire\WithFileUploads;

class LocationcrudComponent extends Component
{
    use WithFileUploads;
    public $tentName;
    public $description;
    public $capacity;
    public $price;
    public $image;
    public $tentData;
    public $t_id;
    public $update=false;
    public function mount()
    {
        $this->tentData = Tent::all();
    }
    public function deleteTent($id)
    {
        $data = Tent::find($id);

        $data->delete();
        $this->mount();
    }
    public function updateTent($id)
    {
        $tent = Tent::find($id);
        $this->t_id = $tent->id;
        $this->tentName = $tent->tentName;
        $this->description = $tent->description;
        $this->capacity = $tent->capacity;
        $this->price = $tent->price;
        $this->image = $tent->image;    
        // $this->t_id=$tent->id;
        $this->update=true;
    }

    public function updateTentData()
    {
        $data = Tent::find($this->t_id);
        $data->tentName= $this->tentName;
        $data->description = $this->description;
        $data->capacity = $this->capacity;
        $data->price = $this->price;
        if($this->image){
        $imagename=$this->image->store('photos','public');
        }
        $data->image = $imagename;
        
        $data->save();
        $this->image='';
        $this->mount();
        $this->update=false;
    }
    public function render()
    {
        return view('livewire.locationcrud-component');
    }
}
