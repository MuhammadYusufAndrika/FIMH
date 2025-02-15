<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\kegiatan;
use App\Models\events;

class Kepengurusan extends Model
{
    protected $table = 'kepengurusan';
    protected $primaryKey = 'id';
    protected $fillable = ['title' , 'image' , 'content']; // Sesuaikan dengan kolom tabel
}
