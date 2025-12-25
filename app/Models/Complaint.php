<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = [
        'nama_pic',
        'nama_bpr',
        'email',
        'dpd',
        'whatsapp',
        'jenis_kendala',
        'deskripsi',
        'bukti_file',
        'form_pengaduan',
        'status',
    ];

}
