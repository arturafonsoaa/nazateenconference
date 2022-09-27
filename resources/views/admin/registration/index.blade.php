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
                        <div class="mb-3">
                            <form action="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <x-adminlte-input value="{{ request()->has('name') ? request()->get('name') : '' }}" name="name"
                                            placeholder="Busque pelo nome" class="mb-0" />
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="float-right">
                                            <button class="btn btn-default mr-1" type="button" data-toggle="collapse"
                                                data-target="#search-collapse" aria-expanded="{{ !empty(request()->toArray()) ? 'true' : 'false' }}"
                                                aria-controls="search-collapse">
                                                <i class="fa fa-filter"></i>
                                                Filtros
                                            </button>
                                            <a href="{{ route('admin.registration.index') }}" class="btn btn-default mr-1">
                                                <i class="fa fa-recycle"></i>
                                                Limpar
                                            </a>
                                            <button class="btn text-white" type="submit" style="background-color: #7831b6;">
                                                <i class="fa fa-search"></i>
                                                Buscar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse @if (!empty(request()->toArray())) show @endif " id="search-collapse">
                                    <x-adminlte-select label="Situação da inscrição" name="status">
                                        <x-adminlte-options empty-option="Todos" :options="$registrationStatuses" :selected="request()->has('status') ? request()->get('status'): null" />
                                    </x-adminlte-select>
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Matrícula</th>
                                        <th>Nome</th>
                                        <th>Idade</th>
                                        <th>Whatsapp</th>
                                        <th>E-mail</th>
                                        <th>Situação da matrícula</th>
                                        <th>Comprovante</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registrations as $registration)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $registration->registration_code }}</td>
                                            <td>{{ $registration->user->name }}</td>
                                            <td>{{ $registration->age }}</td>
                                            <td>{{ $registration->phone }}</td>
                                            <td>{{ $registration->user->email }}</td>
                                            <td>{{ $registration->human_status }}</td>
                                            <td>
                                                @if (!is_null($registration->payment_voucher))
                                                    <a href="{{ route('admin.downloadPaymentVoucher', $registration->id) }}">
                                                        Baixar comprovante
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($registration->status == 'under_analysis' || $registration->status == 'pending_payment')
                                                    <x-adminlte-button aria-id="{{ $registration->id }}" icon="fa fa-check fa-fw" data-toggle="modal"
                                                        data-target="#approve-confirmation-modal" class="text-white btn-xs btn-open-modal-approve-registration"
                                                        style="background-color: #7831b6;" />
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="my-4">
                                {{ $registrations->appends(request()->query())->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="url-approve-registration" class="d-none">
        {{ route('admin.registration.approve', 0) }}
    </div>

    <x-adminlte-modal id="approve-confirmation-modal" title="Tem certeza que deseja aprovar a inscrição?" class="no-footer">
        <form id="form-confirm-approval" action="" method="post">
            @csrf

            <x-adminlte-select label="Método de pagamento" name="payment_method">
                <x-adminlte-options :options="$paymentMethods" />
            </x-adminlte-select>

            <div class="text-right">
                <button type="submit" class="btn text-white" style="background-color: #7831b6;">
                    <i class="fa fa-check fa-fw"></i> Aprovar
                </button>
                <x-adminlte-button theme="default" label="Cancelar" data-dismiss="modal" />
            </div>
        </form>
        <x-slot name="footerSlot">
        </x-slot>
    </x-adminlte-modal>
@endsection

@section('css')
    <style>
        .no-footer .modal-footer {
            display: none!important;
        }
    </style>
@endsection

@section('js')
    @parent
    <script>
        jQuery('.btn-open-modal-approve-registration').click(function() {
            let urlApproveRegistration = jQuery('#url-approve-registration').html().trim().replace('/0', '/' + jQuery(this).attr('aria-id'))
            jQuery('#form-confirm-approval').attr('action', urlApproveRegistration)
        })
    </script>
@endsection
