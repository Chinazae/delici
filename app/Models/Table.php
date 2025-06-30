<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = ['table_number', 'table_category_id', 'seating_capacity', 'status', 'image', 'price', 'default_date', 'default_time', 'default_duration', 'released',];

    public function category()
    {
        return $this->belongsTo(TableCategory::class, 'table_category_id');
    }

    public function reservations()
{
    return $this->hasMany(Reservation::class);
}

public function favourites()
{
    return $this->hasMany(Favourite::class);
}


}
