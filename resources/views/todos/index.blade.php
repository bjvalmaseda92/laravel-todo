@extends('todos.layout')

@section('content')
<div class="flex justify-center border-b pb-4">
    <h1 class="text-2xl">All your To-DO</h1>
    <a href="/todos/create" class="mx-5 py-1 px-1 bg-blue-400 cursor-pointer text-white rounded">Create new</a>

</div>
    <ul class="my-5">
        <x-alert/>
        @foreach ($todos as $todo)
            <li class="flex justify-between p-2">
                <p>{{$todo->title}}</p>
                <a href="{{'/todos/'.$todo->id.'/edit'}}" class="mx-5 py-1 px-1 bg-yellow-400 cursor-pointer text-white rounded">Edit</a>
            </li>    
        @endforeach
    </ul>
@endsection

