<?php

namespace App\Models;

use App\Models\Classes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        "classes_id",
        "name",
    ];

    public function Classes()
    {
        return $this->belongsTo(Classes::class);
    }
    public function students()
    {
        return $this->hasMany(Student::class, 'section_id');
    }
}
