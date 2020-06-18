<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public $timestamps = false;
    protected $fillable = ['nim','quiz_id','question_id','answer_id'];
}
