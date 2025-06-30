<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name', 'customer_email', 'customer_phone',
        'event_date', 'event_time', 'duration', 'guests_count',
        'special_requests', 'status', 'total_price', 'payment_status',
    ];

    public function packages()
    {
        return $this->belongsToMany(Package::class)->withPivot('quantity')->withTimestamps();
    }
}
