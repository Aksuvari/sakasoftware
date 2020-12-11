<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentModel extends Model
{
    protected $table = 'content';
    protected $primaryKey = 'id';
    protected $fillable=[
        'title',
        'short_des',
        'description',
        'slug'];
    function getCategory(){
        return $this->hasOne('App\Models\CategoryModel','id','category_id');
    }
}
