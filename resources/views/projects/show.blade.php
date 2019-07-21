@extends('layout')

@section('content')
    
    <h1 style="margin-top:2px;color:black;">
        {{ $project->title }}
        <form action="/projects/{{ $project->id }}/edit/">
            <button type="submit" style="font-size:10px;margin-bottom:20px;" class="button is-link">Edit</button>
        </form>
    </h1>

    <p class="box" style="background-color:gray;color:white;padding:10px;">
        <i>
        {{ $project->description }}    
        </i>
    </p>

    {{-- @if ($project->tasks->count()) --}}
    <div class="box" style="margin-top:20px;margin-bottom:20px;">
        <h1 style="margin-top:2px;color:black;">
            Tasks
            <div class="field" style="margin-bottom:20px;">
                <div class="control">
                    <form method="POST" action="/projects/{{ $project->id }}/tasks">
                        @csrf

                        <input type="text" style="margin-bottom: 5px;" name="description" class="input {{ $errors->has('description') ? 'is-danger' : '' }}" placeholder="New Task" value="{{ old('description') }}">
                        <button type="submit" class="button is-link">Add new task</button>
                    </form>
                </div>
            </div>
        </h1>

        @include('errors')

        <p>
            @foreach ($project->tasks as $task)
                <div style="margin-left:10px;color:black;list-style-type:square;">
                    <form method="POST" action="/completed-tasks/{{ $task->id }}">
                        @if($task->completed)
                            @method('DELETE')
                        @endif
                        @csrf

                        <label for="completed" class="checkbox">
                            <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                            <span style="margin-left:5px;{{ $task->completed ? 'text-decoration:line-through' : '' }};">
                                {{ $task->description }}
                            </span>
                        </label>
                    </form>
                </div>
            @endforeach
            </p>
        </div>
    {{-- @endif --}}

@endsection