@extends('layouts.app')

@section('content')
    <h1>Todo List</h1>
    <p class="subtitle">Plan, track, and complete your tasks with a clean Laravel starter.</p>

    <section class="todo-form">
        <form action="{{ route('todos.store') }}" method="post">
            @csrf
            <label>
                Task title
                <input type="text" name="title" placeholder="What needs to be done?" required>
            </label>
            <label>
                Due date (optional)
                <input type="date" name="due_at">
            </label>
            <button type="submit">Add todo</button>
        </form>
    </section>

    <section>
        <h2>Current tasks</h2>
        @if($todos->isEmpty())
            <div class="empty-state">Nothing here yet. Add your first todo to get started.</div>
        @else
            @foreach($todos as $todo)
                <div class="todo-item">
                    <div class="todo-details">
                        <form action="{{ route('todos.update', $todo) }}" method="post">
                            @csrf
                            @method('put')
                            <input type="hidden" name="is_completed" value="{{ $todo->is_completed ? 0 : 1 }}">
                            <button type="submit" class="secondary">
                                {{ $todo->is_completed ? 'Undo' : 'Complete' }}
                            </button>
                        </form>
                        <div>
                            <div class="todo-title {{ $todo->is_completed ? 'completed' : '' }}">
                                {{ $todo->title }}
                            </div>
                            @if($todo->due_at)
                                <div class="badge">Due {{ $todo->due_at->format('M j, Y') }}</div>
                            @endif
                        </div>
                    </div>
                    <form action="{{ route('todos.destroy', $todo) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="secondary">Delete</button>
                    </form>
                </div>
            @endforeach
        @endif
    </section>
@endsection
