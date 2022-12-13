<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TodoService;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CreateTodoRequest;

class TodoController extends Controller
{

    /**
     * @var \App\Services\TodoService
     */
    protected $orderService;

    public function __construct(TodoService $todoService)
    {
        $this->todoService = $todoService;
    }

    public function index()
    {
        $todos  = $this->todoService->fetchTodos();

        return view('todos.index', compact('todos'));
    }

    /**
     * Display form to create todo.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTodoRequest $request)
    {
        $newTodo = $this->todoService->createTodo($request->all());

        Session::flash('info',  $newTodo['message']);
        return redirect()->back();
    }


    /**
     * Display form to view todo for editing.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = $this->todoService->fetchTodo($id);

        return view('todos.edit', compact('todo'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $todo = $this->todoService->updateTodo($id, $request->all());

        Session::flash('info',  $todo['message']);
        return redirect()->route('todo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = $this->todoService->deleteTodo($id);

        Session::flash('info',  $todo['message']);
        return redirect()->back();
    }
}