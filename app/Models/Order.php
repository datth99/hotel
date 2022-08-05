<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\Room;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';

    protected $fillable = [
        'customer_id',
        'room_id',
        'day',
        'service_id',
        'created_at',
        'updated_at'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
