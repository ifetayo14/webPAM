<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'question_id';
    protected $fillable = ['question_id','question','type', 'difficulties', 'grade', 'case_type','quiz_id'];
    protected $table = 'questions';
}
