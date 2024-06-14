<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date_of_birth', 'diagnosis_id'];

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }
}
