<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
	protected $fillable = [
        'id', 'nama', 'alamat', 'tarif', 'daya', 'fakm', 'fakmvarh',
        'slalwbp', 'sahlwbp', 'slawbp', 'sahwbp', 'slakvarh', 'sahkvarh',
        'pemkwh', 'unitup', 'kdgardu', 'dlpd', 'dlpd_fkm', 'dlpd_jnsmutasi',
    ];
    public $timestamps = false;

    public function jam_nyala()
    {
    	return $this->hasMany('App\jam_nyala', 'idpel', 'id');
    }

    public function area()
    {
    	return $this->belongsTo('App\area', 'unitup', 'unitup');
    }
}
