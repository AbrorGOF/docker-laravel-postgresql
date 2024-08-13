<?php

namespace App\Filament\Resources\OauthClientResource\Pages;

use App\Filament\Resources\OauthClientResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageOauthClients extends ManageRecords
{
    protected static string $resource = OauthClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
