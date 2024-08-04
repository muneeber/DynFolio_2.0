<?php

namespace App\Filament\Resources\SideLinkResource\Pages;

use App\Filament\Resources\SideLinkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSideLinks extends ListRecords
{
    protected static string $resource = SideLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
