<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'id_user',
        'status',
        'pengiriman',
        'catatan',
        'reference',
        'merchant_ref',
        'status_pembayaran',
        'metode_pembayaran'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function partner() {
        return $this->belongsTo(User::class, 'id_partner');
    }
    public function payment() {
        return $this->hasMany(Payment::class);
    }

    public function orders_detail()
    {
        return $this->hasMany(OrderDetail::class, 'id_order');
    }

}
