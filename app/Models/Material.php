<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ['title', 'file_path', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
