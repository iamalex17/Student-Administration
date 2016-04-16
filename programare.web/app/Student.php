<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'class_id'
    ];

    public function class()
    {
        return $this->belongsTo(StudentsClass::class);
    }
}
