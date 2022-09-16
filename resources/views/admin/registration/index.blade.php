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
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Matrícula</th>
                                        <th>Situação da matrícula</th>
                                        <th>Idade</th>
                                        <th>Whatsapp</th>
                                        <th>Comprovante</th>
                                        <th></th>
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
                                                    <a href="{{ route('admin.downloadPaymentVoucher', $registration->id) }}">
                                                        Baixar comprovante
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if (!is_null($registration->payment_voucher) && $registration->status == 'under_analysis')
                                                    <x-adminlte-button aria-id="{{ $registration->id }}" icon="fa fa-check fa-fw" data-toggle="modal"
                                                        data-target="#approve-confirmation-modal" class="text-white btn-xs btn-open-modal-approve-registration"
                                                        style="background-color: #7831b6;" />
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{ $registrations->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="url-approve-registration" class="d-none">
        {{ route('admin.registration.approve', 0) }}
    </div>

    <x-adminlte-modal id="approve-confirmation-modal" title="Tem certeza que deseja aprovar a inscrição?">
        <x-slot name="footerSlot">
            <a id="btn-confirm-approval" href="" class="btn text-white" style="background-color: #7831b6;">
                <i class="fa fa-check fa-fw"></i> Aprovar
            </a>
            <x-adminlte-button theme="default" label="Cancelar" data-dismiss="modal" />
        </x-slot>
    </x-adminlte-modal>
@endsection

@section('js')
    @parent
    <script>
        jQuery('.btn-open-modal-approve-registration').click(function() {
            let urlApproveRegistration = jQuery('#url-approve-registration').html().trim().replace('/0', '/' + jQuery(this).attr('aria-id'))
            jQuery('#btn-confirm-approval').attr('href', urlApproveRegistration)
        })
    </script>
@endsection
