<div>
    <h1>Tent Details</h1>
    <form wire:submit.prevent="saveTentData">
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
            <label for="">Choose an image:</label>
            <input type="file" wire:model="image">
        </div>
        <div>
            <input type="submit" value="save">
        </div>
        
    </form>
</div>
