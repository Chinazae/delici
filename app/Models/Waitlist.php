<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waitlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'category_id', 'seating_capacity', 'auto_book', 'status',
    ];

    public function category()
    {
        return $this->belongsTo(TableCategory::class);
    }
}
