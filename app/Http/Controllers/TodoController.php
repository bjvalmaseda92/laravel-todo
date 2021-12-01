<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index(){
        return view('todos.index');
    }

    public function create(){
        return view('todos.create');
    }

    public function store(Request $request){

        // $request->validate([
        //     'title' => 'required|max:255'
        // ]);
        // Todo::create($request->all());

        $rules=[
                 'title' => 'required|max:255'
        ];

        $messages=[
            'title.max' => 'Todo title should not be greater than 255 chars'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        return redirect()->back()->with('message', 'Todo Created Successfully');
    }

    public function edit(){
        return view('todos.edit');
    }
}
