<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    protected $table = 'aspirasi';

    protected $fillable = ['angkatan', 'kelas', 'subjek', 'pesan'];
}
