<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'student';
    protected $fillable = [
        'namadepan',
        'namabelakang',
        'email',
        'nohp',
        'alamat',

    ];
}
