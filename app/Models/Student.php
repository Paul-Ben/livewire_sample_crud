<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email', 
        'classes_id',
        'section_id',
    ];

    public function sections(){
       return $this->belongsTo(Section::class, 'section_id');
    }

    public function  classes(){
       return $this->belongsTo(Classes::class, 'classes_id');
    }

}
