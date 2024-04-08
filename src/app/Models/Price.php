<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
      'currency',
      'amount',
      'course_id',
    ];

    public function course(): HasOne
    {
        return $this->hasOne(Course::class);
    }
}
