@extends('adminlte::page')

@section('content')
    <div class="py-5">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h3 class="mb-3">Relatório de métodos de pagamento</h3>
                <div class="card p-4">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Método</th>
                                    <th>Total de inscriões</th>
                                    <th>Valor total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paymentMethods as $paymentMethodName => $collection)
                                    <tr>
                                        <td>
                                            <a href="{{ route('admin.registration.index', ['payment_method' => $paymentMethodName]) }}">
                                                {{ App\Enums\PaymentMethod::fromValue($paymentMethodName)->description }}</td>
                                            </a>
                                        <td>{{ $collection->count() }}</td>
                                        <td>
                                            {{ 'R$ ' . number_format(($paymentMethodName != 'free_voucher' ? $collection->count() * 40.66 : 0), 2, ',', '.') }}
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
