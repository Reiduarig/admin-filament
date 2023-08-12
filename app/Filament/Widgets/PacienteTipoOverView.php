<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Paciente;

class PacienteTipoOverView extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Card::make('Gatos', Paciente::query()->where("tipo","1")->count()),
            Card::make('Perros', Paciente::query()->where("tipo","2")->count()),
            Card::make('Conejos', Paciente::query()->where("tipo","3")->count()),
        ];
    }
}
