<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $fillable = ['nama', 'tanggal', 'jam_masuk', 'jam_keluar'];
}
