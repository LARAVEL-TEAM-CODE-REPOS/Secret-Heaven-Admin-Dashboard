<div>
    @if($update==false)
    <h1>Display Tent Details</h1>
    

    <table>
    <tr>
            <th>Tent No</th>
            <th>Tent Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Capacity</th>
            <th>Image</th>
            <th>Delete</th>
            <th>Update</th>

    </tr>
    @foreach($tentData as $Data)
        <tr>
            <td>{{$Data->id}}</td>
            <td>{{$Data->tentName}}</td>
            <td>{{$Data->description}}</td>
            <td>{{$Data->price}}</td>
            <td>{{$Data->capacity}}</td>
            <td><img height="200" width="200" src="{{Storage::url($Data['image'])}}" ></td>
            <td><button style="cursor:pointer;" wire:click="deleteTent({{$Data->id}})">Delete</button></td>
            <td><button style="cursor:pointer;" wire:click="updateTent({{$Data->id}})">Update</button></td>

        </tr>
    @endforeach
    </table>
    @else
    <h1>Update Tent Data</h1>
        <form wire:submit.prevent="updateTentData">
        <div>
            <label for="">Name:</label>
            <input type="text" wire:model="tentName">
        </div>
        <div>
            <label for="">Price:</label>
            <input type="decimal" wire:model="price">
        </div>
        <div>
            <label for="">Description:</label>
            <input type="text" wire:model="description">
        </div>
        <div>
            <label for="">Capacity:</label>
            <input type="integer" wire:model="capacity">
        </div>
        <div>
            <label for="">Choose New image:</label>
            <input type="file" wire:model="image">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
        
        </form>
    @endif
</div>
