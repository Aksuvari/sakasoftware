<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessModel extends Model
{
    protected $table = "business";
    protected $primaryKey = 'id';
    protected $fillable = ['title','costumer_name','costumer_contact','aut_name','aut_maker_name','contentt'];
}
