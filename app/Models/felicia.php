<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class felicia extends Model
{
    use HasFactory;
    protected $table= "felicia";
    protected $fillable= ['Nama', 'NIM', 'Jurusan', 'Kelas'];
}
