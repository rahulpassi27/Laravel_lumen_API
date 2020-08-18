<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'orders';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 'user_id','shiping_address','shiping_status',
    ];
    public function orders(){
        return $this->hasMany('App\OrdersProduct','order_id');
    }

}