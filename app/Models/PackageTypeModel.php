<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTypeModel extends Model
{
    protected $table = 'package_type';
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $fillable = ['name','slug'];
    public function packageCount(){
        return $this->hasMany('App\Models\PackageModel','package_id','id')->count();
    }
}
