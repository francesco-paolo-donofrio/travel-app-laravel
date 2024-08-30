<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'rating',
    ];

    public function days()
    {
        return $this->belongsToMany(Day::class);
    }
}
