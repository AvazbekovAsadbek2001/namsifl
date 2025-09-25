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

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_categories', 'post_id', 'category_id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }

    public function translations(){
        return $this->hasMany(PostTranslation::class, 'post_id');
    }

    public function translation($lang_code){
        $this->hasOne(PostTranslation::class,'lang_code',$lang_code);
    }
}
