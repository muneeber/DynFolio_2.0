<?php

namespace App\Filament\Resources\SideLinkResource\Pages;

use App\Filament\Resources\SideLinkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSideLink extends EditRecord
{
    protected static string $resource = SideLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
