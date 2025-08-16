<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class berkasperlombaan extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function akunpengguna()
    {
        return $this->belongsTo(User::class, 'akunpengguna_id');
    }


public function daftartims()
{
    return $this->hasManyThrough(
        daftartim::class,  // model tujuan
        User::class,       // model perantara
        'id',              // foreign key User (akun_id di Daftartim)
        'akun_id',         // foreign key Daftartim
        'akunpengguna_id', // local key Berkasperlombaan
        'id'               // local key User
    );
}


    public function kategoriperlombaan()
    {
        return $this->belongsTo(kategoriperlombaan::class, 'kategoriperlombaan_id');
    }

    public function kota()
    {
        return $this->belongsTo(kota::class, 'kota_id');
    }

    public function provinsi()
    {
        return $this->belongsTo(provinsi::class, 'provinsi_id');
    }

    public function perlombaan()
    {
        return $this->belongsTo(perlombaan::class, 'perlombaan_id');
    }



    // public function pos1()
    // {
    //     return $this->belongsTo(pos1::class, 'pos1_id');
    // }

    // public function pos2()
    // {
    //     return $this->belongsTo(pos2::class, 'pos2_id');
    // }

    // public function pos3()
    // {
    //     return $this->belongsTo(pos3::class, 'pos3_id');
    // }

    // public function pos4()
    // {
    //     return $this->belongsTo(pos4::class, 'pos4_id');
    // }

    // public function pos5()
    // {
    //     return $this->belongsTo(pos5::class, 'pos5_id');
    // }

    // public function pos6()
    // {
    //     return $this->belongsTo(pos6::class, 'pos6_id');
    // }

    // public function pos7()
    // {
    //     return $this->belongsTo(pos7::class, 'pos7_id');
    // }

}
