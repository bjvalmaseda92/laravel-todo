@extends('todos.layout')

@section('content')
<h1 class="text-2xl border-b pb-4">Update this To-DO</h1>
<x-alert/>
<form method="post" action="{{ route('todo.update', $todo->id) }}" class="py-5">
    @csrf
    @method('patch')
    <input type="text" name="title" id="title" class="py-2 px-2 border" value="{{$todo->title}}">
    <input type="submit" value="Update" class="p-2 border rounded">
</form>

<a href="/todos" class="m-5 py-1 px-1 bg-white-400 cursor-pointer text-black rounded border">Back</a>
@endsection