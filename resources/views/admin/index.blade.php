@extends('adminlte::page')

@role('registration')
    @section('content')
        <div class="py-5">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h3 class="mb-0">
                                Dados da inscrição
                            </h3>
                        </div>
                        <div>
                            @if ($user->registration->status == 'pending_payment')
                                <button type="button" class="btn btn-sm text-white" style="background-color: #7831b6;"
                                    data-toggle="modal" data-target="#pix-modal">
                                    <i class="fa fa-fw fa-qrcode mr-1"></i> Pagar com PIX
                                </button>
                            @endif
                        </div>
                    </div>
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
                                                'badge-warning' =>
                                                    $user->registration->status == 'pending_payment' ||
                                                    $user->registration->status == 'under_analysis',
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
                                    @if (!is_null($user->registration->payment_voucher))
                                        <tr>
                                            <td class="font-weight-bold">Comprovante</td>
                                            <td><a href="{{ route('admin.downloadPaymentVoucher', $user->registration->id) }}">Baixar
                                                    comprovante</a></td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-adminlte-modal id="pix-modal" title="Enviar comprovante PIX" theme="maroon" icon="fas fa-qrcode">
            <div class="text-center lead">
                Transfira o valor exato de <b>R$ 40,66</b> para o QRCode abaixo ou pela chave PIX <b>nazamossoro@gmail.com</b> e
                envie o comprovante abaixo.
            </div>
            <div class="px-5 mx-5 mb-2">
                <img src="{{ Vite::asset('resources/img/pixqrcode.jpeg') }}" class="w-100">
            </div>
            <div>
                <form action="{{ route('admin.sendPaymentVoucher') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <x-adminlte-input-file name="payment_voucher" label="Comprovante" placeholder="Selecione o arquivo">
                        <x-slot name="prependSlot">
                            <div class="input-group-text bg-info">
                                <i class="fas fa-upload"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input-file>

                    <button class="btn text-white" style="background-color: #7831b6">
                        <i class="fa fa-fw fa-save mr-1"></i> Salvar
                    </button>
                    <button class="btn btn-default" data-dismiss="modal">
                        Cancelar
                    </button>
                </form>
            </div>
            <x-slot name="footerSlot">
            </x-slot>
        </x-adminlte-modal>
    @endsection

    @section('css')
        @parent
        <style>
            .custom-file-label::after {
                content: "Procurar" !important;
            }
        </style>
    @endsection
@endrole
