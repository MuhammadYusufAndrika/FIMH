<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentangkami extends Model
{
    use HasFactory;

    protected $table = 'tentangkami'; // Nama tabel harus sesuai di database
    protected $fillable = ['content']; // Sesuaikan dengan kolom tabel
}
