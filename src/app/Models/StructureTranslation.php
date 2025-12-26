<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StructureTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['type','structure_id','lang_id','content'];
}
