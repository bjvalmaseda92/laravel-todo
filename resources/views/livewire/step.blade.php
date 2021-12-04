<div>
    <div class="flex justify-center pb-4 px-4">
        <h2 class="text-lg pb-4">Add steps if required</h2>
        <span class="fas fa-plus px-2 py-2 cursor-pointer" wire:click="increment">
    </div>

    @foreach ($steps as $step)
    <div class='flex justify-center py-2'>
        <input type="text" name="step[]" class="py-1 border rounded" placeholder="{{'Describe step '.($step)}}">
        <span class="fas fa-times text-red-500 p-2 cursor-pointer" wire:click="remove({{$loop->index}})">
    </div>
    @endforeach
</div>