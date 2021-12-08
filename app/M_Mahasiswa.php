<?php

namespace App;

use Illuminate\Database\Eloquent\Factory\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class M_Mahasiswa extends Model
{
    use SoftDeletes;

    protected $table = 'mahasiswa';
    protected $fillable = [
        'nama',
        'nim',
        'alamat'
    ];
    protected $hidden;
}
