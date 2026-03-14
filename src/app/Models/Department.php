<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'icon'];

    public function content($lang_code)
    {
        $lang = Lang::where('code', $lang_code)->first();
        return StructureTranslation::where('type', 'faculty')
            ->where('structure_id', $this->id)
            ->where('lang_id', $lang->id)
            ->first()
            ->content;
    }
}
