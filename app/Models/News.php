<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends BaseModel
{
    use HasFactory,SoftDeletes;
    protected $table = 'news';
    protected $fillable = ['category_id','title','description','content','image','slug','created_by','updated_by','deleted_by'];

    public function category()
    {
        return $this->belongsTo(NewsCategory::class,'category_id','id');
    }
}
