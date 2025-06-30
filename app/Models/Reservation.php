<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'table_id', 'guest_name', 'guest_email', 'guest_phone',
        'check_in_date', 'check_in_time', 'duration', 'special_request', 'payment_type',
    'payment_status',
    ];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }

public function review()
{
    return $this->hasOne(Review::class);
}


}
