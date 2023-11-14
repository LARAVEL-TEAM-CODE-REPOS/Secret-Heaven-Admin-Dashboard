<?php

namespace App\Livewire;

use Livewire\Component;

class LocationAddComponent extends Component
{
    public function navigationToDelete()
    {
        return redirect()->route('location-delete');
    }
    public function navigationToForm()
    {
        return redirect()->route('location-add');
    }
    public function render()
    {
        return view('livewire.location-add-component');
    }
}
