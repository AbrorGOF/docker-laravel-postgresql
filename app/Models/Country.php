<?php

namespace App\Models;

use App\Enums\IsActiveEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property  string $name
 * @property  string $code
 * @property  IsActiveEnum $is_active
*/

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';

    protected $fillable = [
        'name',
        'code',
        'is_active'
    ];

    protected $casts = [
        'is_active' => IsActiveEnum::class
    ];
}
