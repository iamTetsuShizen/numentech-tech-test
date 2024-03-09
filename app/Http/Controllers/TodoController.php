<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();

        return Response::json($todos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'completed' => 'required'
        ]);

        $todo = new Todo($request->all());
        $todo['user_id'] = Auth::id();
        $todo->save();

        return Response::json(['message' => 'Todo created successfully', 'todo' => $todo]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        // Route TODO: ADD ROUTE HERE /todos/show
        // I like to maintain show() so I can get a peek of what we return from the database without needing to access the Mysql container
        return Response::json($todo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        // TODO: UNUSED?
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'completed' => 'required'
        ]);

        // Ensure the user can only update their own todos
        if ($todo->user_id !== Auth::id()) {
            return Response::json(['error' => 'Unauthorized'], 403);
        }

        $todo->update($request->all());

        return Response::json(['message' => 'Todo updated successfully', 'todo' => $todo]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        // Ensure the user can only delete their own todos
        if ($todo->user_id !== Auth::id()) {
            return Response::json(['error' => 'Unauthorized'], 403);
        }

        $todo->delete();

        return Response::json(['message' => 'Todo deleted successfully']);
    }
}
