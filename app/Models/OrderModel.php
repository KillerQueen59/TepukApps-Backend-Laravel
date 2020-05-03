<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class OrderModel extends Model{

    protected $table = "orders";

    protected $fillable = [
        'user_id', 'pupuk_id', 'status','order_qty','total','total_order'
    ];

    protected $casts = [
        'pupuk_id' => 'int',
        'order_qty' => 'int',
        'total' => 'int',
        'total_order'=> 'int'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function pupuk(){
        return $this->belongsTo(PupukModel::class);
    }

    public function payment(){
        return $this->belongsTo(PaymentModel::class);
    }

}
