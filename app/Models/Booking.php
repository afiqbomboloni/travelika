<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'tel_number', 'email', 'book_date', 'table_id', 'guest_number'
    ];
}
