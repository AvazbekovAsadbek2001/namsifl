<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'icon'];

    public function translate($lang_code):Model|StructureTranslation   
    {
        return StructureTranslation::where('type', 'faculty')
            ->where('structure_id', $this->id)
            ->where('lang_id', $lang_code)
            ->first();
    }
}
