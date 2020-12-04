<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    public $timestamps=false;

    public function contentCount(){
        return $this->hasMany('App\Models\ContentModel','category_id','id')->count(); //bu kod bir kategoriye birden fazla içerik eklememi sağlıyor ve kategori sayfasında bu
        //fonksiyonu çağıracam      //Bağlacağımız Model        //Bağlanacağımız Sütun //bağlanacak id
    }
}
