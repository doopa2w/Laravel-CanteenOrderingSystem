<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Table Name
    protected $table = 'orders';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    
    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function food(){
        return $this->belongsTo('App\Food');
    }

    public function staff(){
        return $this->belongsTo('App\Staff');
    }
}
