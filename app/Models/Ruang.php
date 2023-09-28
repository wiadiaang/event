<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_ruang', 'nama_ruang', 'alamat','status'
    ];

    public $timestamps = false;

    protected $primaryKey = 'id_ruang';

    protected $table = 'tbl_ruang';

    public $incrementing = false;

}
