<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class berkaslomba extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function perlombaan()
    {
        return $this->belongsTo(perlombaan::class, 'perlombaan_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pos1()
    {
        return $this->hasMany(pos1::class);
    }

    public function pos2()
    {
        return $this->hasMany(pos2::class);
    }

    public function pos3()
    {
        return $this->hasMany(pos3::class);
    }

    public function pos4()
    {
        return $this->hasMany(pos4::class);
    }

    public function pos5()
    {
        return $this->hasMany(pos5::class);
    }

    public function pos6()
    {
        return $this->hasMany(pos6::class);
    }

    public function pos7()
    {
        return $this->hasMany(pos7::class);
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
