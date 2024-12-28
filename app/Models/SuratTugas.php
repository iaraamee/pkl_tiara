<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratTugas extends Model
{
    use HasFactory;
    protected $table = 'tb_surattugas';
    protected $guarded = ['id'];
    public $timestamps = false;
}
