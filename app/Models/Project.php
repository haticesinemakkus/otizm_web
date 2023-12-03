<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends BaseModel
{
    use SoftDeletes;
    protected $table = 'project';
    protected $fillable = ['category_id','title','image', 'created_by','updated_by','deleted_by'];

    public function category()
    {
        return $this->hasOne(ProjectCategory::class, 'id', 'category_id');
    }
}
