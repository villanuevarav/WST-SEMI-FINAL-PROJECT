@extends('layouts.app')

@section('title', 'My Tasks')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">My Tasks</h3>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">+ Add Task</a>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Task Name</th>
                        <th>Description</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>
                            <td>{{ $task->task_name }}</td>
                            <td>{{ Str::limit($task->description, 50) }}</td>
                            <td>{{ $task->due_date ? $task->due_date->format('M d, Y') : '—' }}</td>
                            <td>
                                <span class="badge {{ $task->status === 'Completed' ? 'badge-completed' : 'badge-pending' }}">
                                    {{ $task->status }}
                                </span>
                            </td>
                            <td class="text-end">
                                <form action="{{ route('tasks.updateStatus', $task) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-sm btn-outline-secondary">
                                        Mark as {{ $task->status === 'Pending' ? 'Completed' : 'Pending' }}
                                    </button>
                                </form>
                                <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Delete this task?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-4">No tasks yet. Add your first task!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
