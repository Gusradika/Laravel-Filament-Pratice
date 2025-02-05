<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        "classes_id",
        "section_id",
        "name",
        "email",
    ];

    public function Classes()
    {
        return $this->belongsTo(Classes::class, 'classes_id');
    }

    public function Section()
    {
        return $this->belongsTo(Section::class);
    }
}
