<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'event_id', 'kategory_id','nama_event','tanggal_event','jam_event','id_ruang','kuota_event','sisa_kuota','status','banner_event'
    ];

    public $timestamps = false;

    protected $primaryKey = 'event_id';

    protected $table = 'tbl_event';

    public $incrementing = false;

}
