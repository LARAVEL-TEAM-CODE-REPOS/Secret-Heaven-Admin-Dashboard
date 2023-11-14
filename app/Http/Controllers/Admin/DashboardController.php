<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function location(){
        return view('admin.location.index');
    }
    public function tents(){
        return view('admin.tent.index');
    }
    public function create(){
        return view('livewire.location-add-component');
    }
}
