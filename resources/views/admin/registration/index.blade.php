@extends('adminlte::page')

@section('content')
    <div class="py-5">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h3 class="mb-3">
                    Inscrições
                </h3>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Matrícula</th>
                                    <th>Situação da matrícula</th>
                                    <th>Idade</th>
                                    <th>Whatsapp</th>
                                    <th>Comprovante</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($registrations as $registration)
                                    <tr>
                                        <td>{{ $registration->user->name }}</td>
                                        <td>{{ $registration->registration_code }}</td>
                                        <td>{{ $registration->human_status }}</td>
                                        <td>{{ $registration->age }}</td>
                                        <td>{{ $registration->phone }}</td>
                                        <td>
                                            @if (!is_null($registration->payment_voucher))
                                                <a
                                                    href="{{ route('admin.downloadPaymentVoucher', $registration->id) }}">
                                                    Baixar comprovante
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
