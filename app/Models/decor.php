<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Decor extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'name',
        'weight',
    ];

    public function Customer()
    {
        return $this->hasMany(customer::class);
    }
}
