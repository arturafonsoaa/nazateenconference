@extends('adminlte::page')

@section('content')
    <div class="py-5">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h3 class="mb-3">Cadastrar administrador</h3>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.adminUser.store') }}" method="post">
                            @csrf
                            <x-adminlte-input label="Nome" name="name" placeholder="Digite o nome do administrador" enable-old-support />
                            <x-adminlte-input label="E-mail" name="email" placeholder="Digite o e-mail do administrador" enable-old-support />
                            <p class="text-secondary">Por padrão, o usuário vai ser cadastrado com a senha 123456. No primeiro acesso deste usuário, o sistema irá pedir alteração de senha.</p>

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
