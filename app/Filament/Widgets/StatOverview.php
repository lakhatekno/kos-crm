<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use App\Models\Indekos;
use App\Models\Transaction;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Indekos Dikelola', Indekos::count()),
            Stat::make('Penghuni Aktif', Customer::where('check_out', null)->count()),
            Stat::make('Pendapatan', Transaction::sum('transaction_value'))
        ];
    }
}
