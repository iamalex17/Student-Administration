<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentsGrade extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'grade', 'student_id'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
