<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Auth;

class ProjectsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $projects = Project::where('owner_id', auth()->id())->get(); // SELECT * FROM PROJECTS WHERE OWNER_ID = ? 

        return view('projects.index', compact('projects'));
    }

    public function create() {
        return view('projects.create');
    }

    public function store() {
        $attributes = request()->validate([
            'title' => ['required', 'min:3', 'max:30'],
            'description' => ['required', 'min:3', 'max:255']
        ]);

        // Adding owner_id
        $attributes['owner_id'] = auth()->id();

        Project::create($attributes);

        return redirect('/projects');
    }

    public function show(Project $project) {
        // Authorization
        $this->authorize('view', $project);
        // if($project->owner_id !== auth()->id()){
        //     abort(403);
        // }

        return view('projects.show', compact('project'));
    }

    public function edit(Project $project) {
        // Authorization
        $this->authorize('view', $project);

        return view('projects.edit', compact('project'));
    }

    public function update(Project $project) {
        // Authorization
        $this->authorize('view', $project);

        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function destroy(Project $project) {
        // Authorization
        $this->authorize('view', $project);

        $project->delete();

        return redirect('/projects');
    }
}
