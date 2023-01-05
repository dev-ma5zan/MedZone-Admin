<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Area extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'name',
        'weight',
    ];

    public function Sector()
    {
        return $this->hasMany(Sector::class);
    }

    public function Customer()
    {
        return $this->hasMany(Customer::class);
    }
}
