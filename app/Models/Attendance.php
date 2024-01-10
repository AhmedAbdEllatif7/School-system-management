<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendances';

    public $timestamps = true;

    protected $fillable = [
        'student_id',
        'grade_id',
        'classroom_id',
        'section_id',
        'teacher_id',
        'attendance_date',
        'attendance_status',
    ];

    public function students()
    {
        return $this->belongsTo('App\Models\Student' , 'student_id');
    }


    public function grade()
    {
        return $this->belongsTo('App\Models\Grade' , 'grade_id');
    }


    public function section()
        {
            return $this->belongsTo('App\Models\Section' , 'section_id');
        }

}
