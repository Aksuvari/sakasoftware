<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTypeModel extends Model
{
    protected $table = 'project_type';
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $fillable = ['name','slug'];
    public function projectCount(){
        return $this->hasMany('App\Models\ProjectModel','project_type_id','id')->count();
    }
}
