<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'namaLengkap', 'alamatKTP', 'alamatSkrg', 'provinsi', 'kabupaten', 'kecamatan',
        'noTel', 'noHp', 'email', 'kewarganegaraan', 'asalWNA', 'tgl_lahir', 'tmpt_lahir',
        'jk', 'statusMenikah', 'agama',
    ];
    // protected $guarded = ['id'];
}
