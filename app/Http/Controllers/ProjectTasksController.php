<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    // public function update(Task $task) {
    //     $method = request()->has('completed') ? 'complete' : 'incomplete';

    //     $task->$method();

    //     // $task->complete(request()->has('completed'));

    //     // $task->update([
    //     //     'completed' => request()->has('completed')
    //     //     ]);

    //     //return back();
    //     return redirect('/projects/'.$task->project_id);
    // }

    public function store(Project $project) {
        $project->addTask(
            request()->validate(['description' => ['required', 'min:3', 'max:100']])
        );

        return redirect('/projects/'.$project->id);
    }
}
