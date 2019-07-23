@extends('layout')

@section('content')

    <h1>Projects list</h1>
    <form action="/projects/create/">
        <button type="submit" style="font-size:10px;margin-bottom:20px;" class="button is-link">Add new project</button>
    </form>

    <div class="container">
        <div class="card-columns">
        @foreach ($projects as $project)
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">
                            <a href="/projects/{{ $project->id }}"><b>{{ $project->title }}</b></a>
                    </h3>
                    <span class="badge badge-primary text-wrap h6">added by {{ $project->owner->user }}</span>
                    <span class="badge badge-primary text-wrap h6">(tasks: {{ $project->tasks->count() }})</span>
                    <span class="badge badge-primary text-wrap h6">edit</span>
                    <span class="badge badge-primary text-wrap h6">delete</span>
                    <p class="card-text">
                        <span class="text-justify font-italic">{{ $project->description }} <a href="/projects/{{ $project->id }}" class="badge badge-primary text-wrap h6">show more...</a></span>
                    </p>
                  </div>
                </div>
        @endforeach
    </div>
    </div>

@endsection