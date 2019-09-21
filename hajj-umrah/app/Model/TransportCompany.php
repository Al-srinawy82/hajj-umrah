<?php

namespace App/Model;

use Illuminate\Database\Eloquent\Model;

class TransportCompany extends Model 
{

    protected $table = 'transport_companies';
    public $timestamps = true;
    protected $fillable = array('name', 'phone', 'driver_name', 'driver_id', 'car_plate', 'wakeel_id');

    public function wakeel()
    {
        return $this->belongsTo('App/Model\Wakeel');
    }

}