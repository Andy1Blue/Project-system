@extends('layout')

@section('content')
    
    <h1>Create a New Project</h1>

    <form method="POST" action="/projects">
        @csrf
        
        <div class="field">
            <div class="control"> 
                <input type="text" name="title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" placeholder="Project title" value="{{ old('title') }}">
            </div>
        </div>

        <div class="field">
            <div class="control"> 
                <textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" placeholder="Project description">{{ old('description') }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control"> 
                <button type="submit" class="button is-link">Create project</button>
            </div>
        </div>

        @include('errors')
        
    </form>

@endsection