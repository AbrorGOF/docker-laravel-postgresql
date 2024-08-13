<?php

namespace App\Enums;

enum IsActiveEnum: int
{
    case ACTIVE = 1;
    case BLOCK = 0;

    public function label(): string
    {
        return match ($this) {
            self::ACTIVE => __('setting.active'),
            self::BLOCK => __('setting.blocked'),
        };
    }
}
