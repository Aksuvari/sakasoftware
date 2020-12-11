<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageModel extends Model
{
    protected $table='package';
    protected $primaryKey = 'id';
    protected $fillable=['title','description','label','slug'];
    function getPackage(){
        return $this->hasOne('App\Models\PackageTypeModel','id','package_id');
    }
}
