<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    public function jam_nyala()
    {
    	return $this->hasMany('App\jam_nyala', 'idpel', 'id');
    }
}
