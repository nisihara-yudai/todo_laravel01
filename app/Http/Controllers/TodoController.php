<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    function index(){ //これで一覧を表示する
        $todo = Todo::all();
        return view('index',['todo' => $todo]);
    }

    function addTodo(Request $request){
        $todo = new Todo();
        $todo->name = $request->name;
        $todo->text = $request->text;
        $todo->save();
        return redirect('/todo');
    }

    function deleteTodo($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/todo')->route('todo.index');
    }

}
