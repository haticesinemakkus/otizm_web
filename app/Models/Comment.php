<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends BaseModel
{
    use SoftDeletes;
    protected $table = 'comment';
    protected $fillable = ['name','comment', 'created_by','updated_by','deleted_by'];
}
