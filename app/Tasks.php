<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $table = "tasks";

    protected $fillable = ['title', 'description', 'project_id'];

    public function project(){
        return $this->belongsTo('App/Projects', 'project_id', 'id');
    }
}
