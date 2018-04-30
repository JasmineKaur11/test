<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = "projects";

    protected $fillable = ['title', 'company_id'];

    public function company(){
        return $this->belongsTo('App/Company', 'company_id', 'id');
    }
    
    public function tasks(){
        return $this->hasMany('App/Tasks', 'project_id', 'id');
    }
}
