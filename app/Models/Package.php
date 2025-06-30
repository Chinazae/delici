<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'price', 'description'];

    public function eventBookings()
    {
        return $this->belongsToMany(EventBooking::class)->withPivot('quantity')->withTimestamps();
    }
}
