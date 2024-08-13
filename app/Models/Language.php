<?php

namespace App\Models;

use App\Enums\IsActiveEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property  string $name
 * @property  string $code
 * @property  int $country_id
 * @property  IsActiveEnum $is_active
 */

class Language extends Model
{
    use HasFactory;

    protected $table = 'languages';

    protected $fillable = [
        'name',
        'code',
        'country_id',
        'is_active'
    ];

    protected $casts = [
        'is_active' => IsActiveEnum::class
    ];
}
