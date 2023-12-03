<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Demand extends BaseModel
{
    use SoftDeletes;
    protected $table = 'demand';
    protected $fillable = ['name', 'email', 'subject', 'message', 'created_by', 'updated_by', 'deleted_by'];
}
