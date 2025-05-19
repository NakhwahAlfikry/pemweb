<?php

namespace App\Filament\Admin\Resources\DataPendaftaranResource\Pages;

use App\Filament\Admin\Resources\DataPendaftaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataPendaftarans extends ListRecords
{
    protected static string $resource = DataPendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
