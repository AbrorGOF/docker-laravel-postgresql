<?php

namespace App\Models;

use App\Enums\IsActiveEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property  string $name
 * @property  string $grade
 * @property  int $year
 * @property  int $lang_id
 * @property  IsActiveEnum $is_active
 */
class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';

    protected $fillable = [
        'name',
        'grade',
        'year',
        'lang_id',
        'is_active'
    ];

    protected $casts = [
        'is_active' => IsActiveEnum::class
    ];
}
