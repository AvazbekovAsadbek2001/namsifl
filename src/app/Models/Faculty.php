<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
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

    public function cafedras()
    {
        return $this->hasMany(Cafedra::class);
    }

    public function dean(){
        $dean = Employee::where('faculty_id' , $this->id)
            ->where('position_id', 3)
            ->first();
        return $dean;
    }

    public function employees() {
        $employees = Employee::where('faculty_id', $this->id)
            ->where('position_id', '!=', 3)
            ->get();
        return $employees;
    }
}
