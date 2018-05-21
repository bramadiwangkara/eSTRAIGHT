<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    //
    public function pelanggan()
    {
    	return $this->hasMany('App\pelanggan', 'unitup', 'unitup');
    }
}
