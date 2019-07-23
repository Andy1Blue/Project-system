@extends('layout')

@section('content')

    <h1>Edit project</h1>
    <form action="/projects/{{ $project->id }}" method="POST" style="margin-bottom: 5px;">
        @method('PATCH')
        @csrf

        <div class="field">
            <label for="title" class="label">Title</label>

            <div class="control">
                <input type="text" name="title" class="input" placeholder="Title" value="{{ $project->title }}" required>
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>
    
            <div class="control">
            <textarea name="description" class="textarea" required>{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control"> 
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>
    </form>

<form action="/projects/{{ $project->id }}" method="POST">
    @method('DELETE')
    @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button" style="color:white;background-color:red;">Delete Project *</button>
                <p>* you will permanently delete the project!</p>
            </div>
        </div>
    </form>

    <div class="container">
        @include('errors')
    </div>

@endsection