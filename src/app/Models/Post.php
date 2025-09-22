<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = ['id', 'image','images','editor_id'];

    public function user(){
        return $this->belongsTo(User::class, 'editor_id');
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function translations(){
        $this->hasMany(PostTranslation::class);
    }

    public function translation($lang_code){
        $this->hasOne(PostTranslation::class,'lang_code',$lang_code);
    }
}
