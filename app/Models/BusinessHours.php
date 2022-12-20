<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessHours extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'day',
        'starts_at',
        'ends_at',
    ];

    public function customer()
    {
        return $this->belongsTo(customer::class);
    }
}
