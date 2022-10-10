@extends('adminlte::page')

@section('content')
    <div class="py-5">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h3 class="mb-3">Alterar dados de {{ $registration->name }}</h3>

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.registration.update', $registration->id) }}" method="post">
                            @csrf
                            @method('patch')

                            <div class="row">
                                <x-adminlte-input label="Nome completo:" name="name" value="{{ $registration->name }}"
                                    fgroup-class="col-md-6" enable-old-support />
                            </div>

                            <div class="row">
                                <x-adminlte-input label="Telefone:" name="phone" value="{{ $registration->phone }}"
                                    class="phone" fgroup-class="col-md-6" enable-old-support />
                            </div>

                            <div class="row">
                                <x-adminlte-input label="Igreja:" name="church" value="{{ $registration->church }}"
                                    fgroup-class="col-md-6" enable-old-support />
                            </div>

                            <div class="row">
                                <x-adminlte-input label="E-mail:" name="email" value="{{ $registration->user->email }}"
                                    fgroup-class="col-md-6" enable-old-support />
                            </div>

                            <div>
                                <a href="{{ route('admin.registration.index') }}" class="btn btn-default mr-2">
                                    <i class="fa fa-rotate-left"></i> Cancelar
                                </a>
                                <button type="submit" class="btn text-white" style="background-color: #7831b6;">
                                    <i class="fa fa-save"></i> Salvar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @parent
    <script>
        jQuery(document).ready(function() {
            jQuery('.phone').inputmask('(99) 99999-9999');
        })
    </script>
@endsection
