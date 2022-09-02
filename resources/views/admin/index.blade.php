@extends('adminlte::page')

@section('content')
    <div class="py-5">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h3 class="mb-3">
                    Dados da inscrição
                </h3>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover mb-0">
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold">Nome</td>
                                    <td>{{ $user->registration->name }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Matrícula</td>
                                    <td>{{ $user->registration->registration_code }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Situação da matrícula</td>
                                    <td>
                                        <div @class([
                                            'badge',
                                            'badge-warning' => $user->registration->status == 'pending_payment' || $user->registration->status == 'under_analysis',
                                            'badge-success' => $user->registration->status == 'approved',
                                            'badge-danger' => $user->registration->status == 'refused',
                                        ])>{{ $user->registration->human_status }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Idade</td>
                                    <td>{{ $user->registration->age }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Whatsapp</td>
                                    <td>{{ $user->registration->phone }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">E-mail</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
