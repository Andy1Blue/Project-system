<?php

namespace App;

use App\Mail\ProjectCreated;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // protected $fillable = [
    //     'title',
    //     'description'
    // ];

    protected $guarded = [];

    protected static function boot() {
        parent::boot();

        // Event hook
        static::created(function ($project) {
            // when project was created
            // Send e-mail
            // \Mail::to($project->owner->email)->send(
            //     new ProjectCreated($project)
            // );
        });

        // static::deleted(function ($project) {
        //     // when project was deleted
        //     // Send e-mail
        //     \Mail::to($project->owner->email)->send(
        //         new ProjectDeleted($project)
        //     );
        // });
    }

    public function owner() {
            return $this->belongsTo(User::class);
    }

    public function tasks() {
        {
            return $this->hasMany(Task::class);
        }
    }

    public function addTask($task) {
        $this->tasks()->create($task);

        // return Task::create([
        //     'project_id' => $this->id,
        //     'description' => $description
        // ]);
    }
}
