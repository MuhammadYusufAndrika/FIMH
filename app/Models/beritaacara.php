<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class beritaacara extends Model
{
    protected $table = 'beritaacaras';
    protected $primaryKey = 'id';
    protected $fillable = ['title' , 'image' , 'content' , 'created_at' , 'updated_at']; // Sesuaikan dengan kolom tabel
}
