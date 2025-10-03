<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['url','is_active'];

    public function translations(){
        return $this->hasMany(PageTranslation::class, 'page_id');
    }

    public function checklang($lang_code){
        if (PageTranslation::where('page_id', $this->id)->where('lang_code', $lang_code)->first()){
            return true;
        }
        return false;
    }
}
