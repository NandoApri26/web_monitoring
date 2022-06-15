<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerbang extends Model
{
    use HasFactory;
    protected $table = 'gerbangs';
    protected $fillable = ['id_gerbang','nama_gerbang','created_at','updated_at'];
}
