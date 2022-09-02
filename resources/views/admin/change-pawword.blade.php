@extends('adminlte::page')

@section('content')
    <div class="py-5">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h3 class="mb-3">
                    @if (auth()->user()->default_password)
                        Por favor, altere sua senha padrão
                    @else
                        Altere sua senha
                    @endif
                </h3>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.updatePassword') }}" method="post">
                            @csrf

                            <x-adminlte-input label="Nova senha" name="password" type="password" placeholder="Digite a nova senha" />
                            <x-adminlte-input label="Confirme a nova senha" name="password_confirmation" type="password" placeholder="Digite a nova senha novamente" />

                            <button type="submit" class="btn text-white" style="background-color: #7831b6;">
                                <i class="fa fa-fw fa-save mr-1"></i> Salvar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
