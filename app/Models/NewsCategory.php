<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsCategory extends BaseModel
{
    use HasFactory,SoftDeletes;
    protected $table = 'news_category';
    protected $fillable = ['name','slug','created_by','updated_by','deleted_by'];
}
