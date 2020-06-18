<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $fillable = ['nim', 'nama', 'prodi'];

    public $timestamps = false;
    protected $table = 'peserta';
}
