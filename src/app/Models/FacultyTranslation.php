<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        "content",
        "faculty_id",
        "lang_id",
    ];
}
