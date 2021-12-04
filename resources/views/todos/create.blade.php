@extends('todos.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
    <h1 class="text-2xl pb-4">What next to you need To-DO</h1>
    <a href="{{ route('todo.index') }}" class="mx-5  py-2 text-gray-400 cursor-pointer">
        <span class="fas fa-arrow-left" />
    </a>

</div>

<x-alert />
<form method="post" action="{{ route('todo.store') }}" class="py-5">
    @csrf
    <div class="py-1">
        <input type="text" name="title" id="title" class="py-2 border rounded">
    </div>
    <div class="py-1">
        <textarea name="description" class="p-2 rounded border"></textarea>
    </div>

    <div class="py-2">
        <div class="flex justify-center pb-4 px-4">
            <h2 class="text-lg pb-4">Add steps if required</h2>
            <span class="fas fa-plus px-2 py-2 cursor pointer">
        </div>
        <div class="py-1">
            <input type="text" name="step" id="step" class="py-2 border rounded">
        </div>
    </div>
</form>
@endsection