<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'presensi_id', 'event_id','peserta_id','jam_checkin','jam_checkout'
    ];

    public $timestamps = false;

    protected $primaryKey = 'presensi_id';

    protected $table = 'tbl_presensi';

    public $incrementing = false;
}
