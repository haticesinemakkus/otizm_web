<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImage extends BaseModel
{
    use SoftDeletes, HasFactory;

    protected $table = 'product_image';

    protected $fillable = ['file','product_id', 'created_by', 'updated_by', 'deleted_by'];

}
