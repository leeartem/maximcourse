<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'tags',
    ];

    protected $casts = [
        'tags' => 'array',
    ];

    public function prices(): HasMany
    {
        return $this->hasMany(Price::class);
    }

    public function rubPrice(): Price
    {
        return $this->prices()->where('currency', 'RUB')->first();
    }

    public function usdPrice(): Price
    {
        return $this->prices()->where('currency', 'USD')->first();
    }
}
