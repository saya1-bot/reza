<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemograman extends Model
{
    use HasFactory;
    protected $table ='pemograman';
    //protected $fillable = ['mata_kuliah','jumlah_sks'];
    protected $guarded = [];
}
