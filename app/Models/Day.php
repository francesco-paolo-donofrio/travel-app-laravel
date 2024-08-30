<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    protected $fillable = [
        'place',
        'description',
        'image',
        'food',
        'curiosity',
        'totalSpent',
    ];

    public function travel()
    {
        return $this->hasOne(Travel::class);
    }
}
