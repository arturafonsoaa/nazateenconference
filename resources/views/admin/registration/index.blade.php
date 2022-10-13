@extends('adminlte::page')

@section('content')
    <div class="py-5">
        <h3 class="mb-3">
            Inscrições
        </h3>
        <div class="row">
            <div class="col-md-9 order-2 order-md-1">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <p class="lead mb-0">
                                Inscrições
                            </p>
                        </div>
                        <div>
                            <p class="lead mb-0">
                                Total: {{ $registrations->total() }}
                            </p>
                        </div>
                    </div>
                    <div class="card-body">
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
                                        <th>Igreja</th>
                                        <th>Situação da matrícula</th>
                                        <th>Comprovante</th>
                                        <th>Data do cadastro</th>
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
                                            <td>{{ $registration->church }}</td>
                                            <td>{{ $registration->human_status }}</td>
                                            <td>
                                                @if (!is_null($registration->payment_voucher))
                                                    <a
                                                        href="{{ route('admin.downloadPaymentVoucher', $registration->id) }}">
                                                        Baixar comprovante
                                                    </a>
                                                @endif
                                            </td>
                                            <td>{{ $registration->created_at->format('d/m/Y') }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    @if (auth()->user()->hasPermissionTo('admin.registration.checkin') &&
                                                        (!$registration->present_on_the_first_day || !$registration->present_on_the_second_day))
                                                        <x-adminlte-button aria-id="{{ $registration->id }}"
                                                            icon="fa fa-calendar-check fa-fw" data-toggle="modal"
                                                            data-target="#checkin-modal" theme="success"
                                                            class="text-white btn-sm btn-open-modal-checkin mr-2" />
                                                    @endif

                                                    @can('admin.registration.edit')
                                                        <a href="{{ route('admin.registration.edit', $registration->id) }}"
                                                            class="btn btn-sm btn-info mr-2">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                    @endcan
                                                    @can('admin.registration.approve')
                                                        @if ($registration->status == 'under_analysis' || $registration->status == 'pending_payment')
                                                            <x-adminlte-button aria-id="{{ $registration->id }}"
                                                                icon="fa fa-check fa-fw" data-toggle="modal"
                                                                data-target="#approve-confirmation-modal"
                                                                class="text-white btn-sm btn-open-modal-approve-registration mr-2"
                                                                style="background-color: #7831b6;" />
                                                        @endif
                                                    @endcan
                                                    @can('admin.registration.destroy')
                                                        <x-adminlte-button aria-id="{{ $registration->id }}"
                                                            aria-name="{{ $registration->name }}"
                                                            aria-code="{{ $registration->registration_code }}" theme="danger"
                                                            icon="fa fa-trash fa-fw" data-toggle="modal"
                                                            data-target="#destroy-registration-modal"
                                                            class="text-white btn-sm btn-open-modal-destroy-registration" />
                                                    @endcan
                                                </div>

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
            <div class="col-md-3 order-1 order-md-2">
                <form action="">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <p class="lead mb-0">
                                    Filtros
                                </p>
                            </div>
                            <div class="card-tools">
                                <a href="{{ route('admin.registration.index') }}" class="btn btn-default btn-sm">
                                    <i class="fa fa-recycle"></i>
                                    Limpar filtros
                                </a>
                                <button class="btn btn-sm text-white" type="submit" style="background-color: #7831b6;">
                                    <i class="fa fa-filter"></i>
                                    Filtrar
                                </button>
                                <button type="button" class="btn btn-default btn-sm" data-card-widget="collapse"
                                    title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <x-adminlte-input label="Buscar pelo nome"
                                    value="{{ request()->has('name') ? request()->get('name') : '' }}" name="name"
                                    placeholder="Busque pelo nome" class="mb-0" />

                                <div class="row">
                                    <x-adminlte-input label="Data inicial:"
                                        value="{{ request()->has('from_date') ? request()->get('from_date') : '' }}"
                                        class="date" name="from_date" placeholder="Data inicial"
                                        fgroup-class="col-md-6" />

                                    <x-adminlte-input label="Data final:"
                                        value="{{ request()->has('to_date') ? request()->get('to_date') : '' }}"
                                        class="date" name="to_date" placeholder="Data final" fgroup-class="col-md-6" />
                                </div>

                                <x-adminlte-select label="Tipo de inscrição" name="registration_type">
                                    <x-adminlte-options empty-option="Todos" :options="$registrationTypes" :selected="request()->has('registration_type')
                                        ? request()->get('registration_type')
                                        : null" />
                                </x-adminlte-select>

                                <x-adminlte-input label="Igreja"
                                    value="{{ request()->has('church') ? request()->get('church') : '' }}" name="church"
                                    placeholder="Busque pela igreja" />

                                <x-adminlte-select label="Situação da inscrição" name="status">
                                    <x-adminlte-options empty-option="Todos" :options="$registrationStatuses" :selected="request()->has('status') ? request()->get('status') : null" />
                                </x-adminlte-select>

                                <x-adminlte-select label="Método de pagamento" name="payment_method">
                                    <x-adminlte-options empty-option="Todos" :options="$paymentMethods" :selected="request()->has('payment_method')
                                        ? request()->get('payment_method')
                                        : null" />
                                </x-adminlte-select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="url-show-registration" class="d-none">
        {{ route('admin.api.registration.show', 0) }}
    </div>

    <div id="url-checkin" class="d-none">
        {{ route('admin.registration.checkin', 0) }}
    </div>

    <div id="url-approve-registration" class="d-none">
        {{ route('admin.registration.approve', 0) }}
    </div>

    <div id="url-destroy-registration" class="d-none">
        {{ route('admin.registration.destroy', 0) }}
    </div>

    <x-adminlte-modal id="checkin-modal" title="Selecione o dia para fazer checkin" class="no-footer">
        <form id="form-checkin" action="" method="post">
            @csrf

            <x-adminlte-select name="day" label="Dia do checkin">
                <x-adminlte-options :options="[]" />
            </x-adminlte-select>

            <p class="lead">Verifique os dados abaixo, e corrija-os se for preciso</p>

            <x-adminlte-input label="Nome completo:" name="name" enable-old-support />

            <x-adminlte-input label="Telefone:" name="phone" class="phone" enable-old-support />

            <x-adminlte-input label="Igreja:" name="church" enable-old-support />

            <x-adminlte-input label="E-mail:" name="email" enable-old-support />

            <div class="text-right">
                <button type="submit" class="btn text-white" style="background-color: #7831b6;">
                    <i class="fa fa-calendar-check fa-fw"></i> Fazer checkin
                </button>
                <x-adminlte-button theme="default" label="Cancelar" data-dismiss="modal" />
            </div>
        </form>
        <x-slot name="footerSlot">
        </x-slot>
    </x-adminlte-modal>

    <x-adminlte-modal id="approve-confirmation-modal" title="Tem certeza que deseja aprovar a inscrição?"
        class="no-footer">
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

    <x-adminlte-modal id="destroy-registration-modal" title="Tem certeza que deseja apagar a inscrição?"
        class="no-footer" theme="danger">
        <form id="form-destroy-registration" action="" method="post">
            @csrf
            @method('delete')

            <p>Você está prestes a excluir a inscrição de <span class="registration-name"></span>, matrícula: <span
                    class="registration-code"></span></p>

            <div class="text-right">
                <button type="submit" class="btn btn-danger text-white">
                    <i class="fa fa-trash fa-fw"></i> Apagar
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
            display: none !important;
        }

        .card-header {
            display: flex;
            justify-content: space-between !important;
            align-items: center !important;
        }

        .card-header>.card-tools {
            margin-right: 0 !important;
        }

        .card-header::after {
            display: none;
        }
    </style>
@endsection

@section('js')
    @parent
    <script>
        function fillCheckinForm(registration) {
            if (!registration.present_on_the_first_day) {
                jQuery('#form-checkin [name="day"]').append(jQuery('<option>', {
                    value: '1',
                    text: 'Dia 1'
                }));
            }

            if (!registration.present_on_the_second_day) {
                jQuery('#form-checkin [name="day"]').append(jQuery('<option>', {
                    value: '2',
                    text: 'Dia 2'
                }));
            }

            jQuery('#form-checkin [name="name"]').val(registration.name)
            jQuery('#form-checkin [name="phone"]').val(registration.phone)
            jQuery('#form-checkin [name="church"]').val(registration.church)
            jQuery('#form-checkin [name="email"]').val(registration.user.email)
        }

        jQuery(document).ready(function() {

            jQuery('.date').inputmask('99/99/9999')

            jQuery('.btn-open-modal-checkin').click(function() {
                let id = jQuery(this).attr('aria-id');

                let urlCheckin = jQuery('#url-checkin')
                    .html()
                    .trim()
                    .replace('/0', '/' + id)

                let urlShowRegistration = jQuery('#url-show-registration')
                    .html()
                    .trim()
                    .replace('/0', '/' + id)

                jQuery('[name="day"]').find("option").remove().end()

                fetch(urlShowRegistration)
                    .then(response => {
                        return response.json()
                    })
                    .then(json => {
                        let registration = json.data.registration
                        fillCheckinForm(registration)
                    })
                    .catch(function(error) {
                        console.log(error)
                    })
                    .finally(function() {
                        jQuery('#form-checkin').attr('action', urlCheckin)
                    })
            })

            jQuery('.btn-open-modal-approve-registration').click(function() {
                let urlApproveRegistration = jQuery('#url-approve-registration')
                    .html()
                    .trim()
                    .replace('/0', '/' + jQuery(this).attr('aria-id'))

                jQuery('#form-confirm-approval').attr('action', urlApproveRegistration)
            })

            jQuery('.btn-open-modal-destroy-registration').click(function() {
                let urlDestroyRegistration = jQuery('#url-destroy-registration')
                    .html()
                    .trim()
                    .replace('/0', '/' + jQuery(this).attr('aria-id'))

                jQuery('#form-destroy-registration').attr('action', urlDestroyRegistration)
                jQuery('.registration-name').html(jQuery(this).attr('aria-name'))
                jQuery('.registration-code').html(jQuery(this).attr('aria-code'))
            })

        })
    </script>
@endsection
