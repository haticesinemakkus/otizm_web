<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectCategory extends BaseModel
{
    use SoftDeletes;
    protected $table = 'project_category';
    protected $fillable = ['title', 'created_by','updated_by','deleted_by'];
}
