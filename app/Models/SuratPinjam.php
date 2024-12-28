<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPinjam extends Model
{
    use HasFactory;
    protected $table = 'tb_suratpinjam';
    protected $guarded = ['id'];
    public $timestamps = false;
}
