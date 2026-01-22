<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TodoController extends Controller
{
    public function index(): View
    {
        return view('todos.index', [
            'todos' => Todo::query()->latest()->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:120'],
            'due_at' => ['nullable', 'date'],
        ]);

        Todo::create([
            'title' => $validated['title'],
            'due_at' => $validated['due_at'] ?? null,
        ]);

        return redirect()->route('todos.index');
    }

    public function update(Request $request, Todo $todo): RedirectResponse
    {
        $validated = $request->validate([
            'is_completed' => ['nullable', 'boolean'],
        ]);

        $todo->update([
            'is_completed' => (bool) ($validated['is_completed'] ?? !$todo->is_completed),
        ]);

        return redirect()->route('todos.index');
    }

    public function destroy(Todo $todo): RedirectResponse
    {
        $todo->delete();

        return redirect()->route('todos.index');
    }
}
