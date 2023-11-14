<div>
@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Locations
                    <a href="{{ url('admin/locations') }}" class="btn btn-primary btn-sm float-end">BACK</a>
                </h3>
            </div>
            <div class="card-body">
                <form>
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" wire:model="name" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Description</label>
                            <input type="text" wire:model="description" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Choose a image</label>
                            <input type="file" wire:model="image" >
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" wire:click="storeData" class="btn btn-primary float-end">Save</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
   
@endsection
</div>
