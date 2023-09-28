<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'id_peserta', 'nama_peserta','email_peserta','nik','no_hp','alamat','photo','status','no_peserta','event_id'
    ];

    public $timestamps = false;

    protected $primaryKey = 'id_peserta';

    protected $table = 'tbl_peserta';

    public $incrementing = false;
}
