<?php

namespace App\Exports;

use App\Models\Registration;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;

class RegistrationsToRaffleExport implements FromQuery, WithMapping, ShouldAutoSize
{
    use Exportable;

    protected Collection $data;

    public function __construct(Collection $data)
    {
        $this->data = $data;
    }

    public function query()
    {
        $registrations = Registration::query();

        $registrations->where('status', 'approved');

        $registrations->orderBy('name', 'ASC');

        return $registrations;
    }

    public function map($registration): array
    {
        return [
            $registration->name,
        ];
    }
}
