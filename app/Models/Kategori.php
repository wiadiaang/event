<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'id_kategori', 'nama_kategori','status'
    ];

    public $timestamps = false;

    protected $primaryKey = 'id_kategori';

    protected $table = 'tbl_kategori';

    public $incrementing = false;

}
