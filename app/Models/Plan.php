<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends BaseModel
{
    use SoftDeletes;
    protected $table = 'plan';
    protected $fillable = ['title', 'icon', 'description', 'created_by', 'updated_by', 'deleted_by'];
}
