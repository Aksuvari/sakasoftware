<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    protected $table='project';
    protected $primaryKey = 'id';
    protected $fillable=['title','project_url','description','slug'];
    function getProject(){
        return $this->hasOne('App\Models\ProjectTypeModel','id','project_type_id');
    }
}
