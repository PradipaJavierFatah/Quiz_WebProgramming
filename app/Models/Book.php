<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $dates = ['publish_date'];

    protected $fillable = ['genre_id','name','description','photo','publish_date'];


}
