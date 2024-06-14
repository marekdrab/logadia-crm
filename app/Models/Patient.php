<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date_of_birth', 'diagnosis_id'];

    public function diagnosis()
    {
        return $this->belongsTo(Diagnosis::class);
    }
    public function visits()
    {
        return $this->hasMany(Visit::class);
    }

    public function getAgeAttribute() {
        return Carbon::parse($this->date_of_birth)->age;
    }
}
