<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = "company";

    protected $fillable = ['title'];

    public function projects(){
        return $this->hasMany('App/Projects', 'company_id', 'id');
    }
}
