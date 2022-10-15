<?php

namespace App\Exports;

use App\Models\Registration;
use Carbon\Carbon;
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

        if ($this->data->has('name') && !is_null($this->data->get('name'))) {
            $registrations->where('name', 'like', '%' . $this->data->get('name') . '%');
        }

        if ($this->data->has('status') && !is_null($this->data->get('status'))) {
            $registrations->whereStatus($this->data->get('status'));
        }

        if ($this->data->has('payment_method') && !is_null($this->data->get('payment_method'))) {
            $registrations->wherePaymentMethod($this->data->get('payment_method'));
        }

        if ($this->data->has('registration_type') && !is_null($this->data->get('registration_type'))) {
            $registrations->whereRegistrationType($this->data->get('registration_type'));
        }

        if ($this->data->has('church') && !is_null($this->data->get('church'))) {
            $registrations->where('church', 'like', '%' . $this->data->get('church') . '%');
        }

        $fromDate = ($this->data->has('from_date') && !is_null($this->data->get('from_date'))) ?
            Carbon::createFromFormat('d/m/Y', $this->data->get('from_date'))->startOfDay() :
            Carbon::createFromFormat('Y', '2020');

        $toDate = ($this->data->has('to_date') && !is_null($this->data->get('to_date'))) ?
            Carbon::createFromFormat('d/m/Y', $this->data->get('to_date'))->endOfDay() :
            Carbon::today()->endOfDay();

        $registrations->whereBetween('created_at', [$fromDate, $toDate]);

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
