<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafedra extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'icon', 'faculty_id'];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function content($lang)
    {
        $content = StructureTranslation::where('type', 'cafedra')
            ->where('structure_id', $this->id)
            ->first()?->content;
        return $content;
    }
}
