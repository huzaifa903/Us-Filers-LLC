<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Policies extends Model
{
    protected $table = 'policies';
    protected $guarded = [];
    public $timestamps = true;

    public function projectName()
    {
        return $this->belongsTo('App\Models\Project', 'project_id');
    }
}
