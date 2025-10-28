<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birth_date',
        'schedule_days',
        'schedule_time',
        'nation_id',
        'position_id',
        'position_description',
        'photo',
        'faculty_id',
        'department_id',
        'cafedra_id',
        'social_medias',
        'employee_contents',
    ];

    public function contents()
    {
        return $this->hasMany(EmployeeContent::class);
    }
}
