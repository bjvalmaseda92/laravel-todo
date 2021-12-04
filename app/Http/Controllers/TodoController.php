<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Models\Todo;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index()
    {
        $todos = auth()
            ->user()
            ->todos->sortBy("completed");

        return view("todos.index", compact("todos"));
    }

    public function create()
    {
        return view("todos.create");
    }

    public function store(TodoCreateRequest $request)
    {
        $todo = auth()
            ->user()
            ->todos()
            ->create($request->all());

        if ($request->step) {
            foreach ($request->step as $step) {
                $todo->steps()->create(["name" => $step]);
            } # code...
        }

        return redirect(route("todo.index"))->with(
            "message",
            "Todo Created Successfully"
        );
    }

    public function edit(Todo $todo)
    {
        return view("todos.edit", compact("todo"));
    }

    public function update(TodoCreateRequest $request, Todo $todo)
    {
        $todo->update(["title" => $request->title]);
        return redirect(route("todo.index"))->with("message", "Updated!");
    }

    public function complete(Todo $todo)
    {
        $todo->update(["completed" => true]);

        return redirect()
            ->back()
            ->with("message", "Task Marked as completed");
    }

    public function incomplete(Todo $todo)
    {
        $todo->update(["completed" => false]);

        return redirect()
            ->back()
            ->with("message", "Task Marked as incompleted");
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()
            ->back()
            ->with("message", "Task deleted!");
    }

    public function show(Todo $todo)
    {
        return view("todos.show", compact("todo"));
    }
}
