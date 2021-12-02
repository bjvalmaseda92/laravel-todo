@extends('todos.layout')

@section('content')
    <div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl pb-4">What next to you need To-DO</h1>
        <a href="{{ route('todo.index') }}" class="mx-5  py-2 text-gray-400 cursor-pointer">
            <span class="fas fa-arrow-left"/>
        </a>

    </div>
    
    <x-alert/>
    <form method="post" action="{{ route('todo.store') }}" class="py-5">
        @csrf
        <input type="text" name="title" id="title" class="py-2 px-2 border">
        <input type="submit" value="Create" class="p-2 border rounded">
    </form>
@endsection