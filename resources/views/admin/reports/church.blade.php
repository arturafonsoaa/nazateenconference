@extends('adminlte::page')

@section('content')
    <div class="py-5">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h3 class="mb-3">Quantidade de membros por igreja</h3>
                <div class="card p-4">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Igreja</th>
                                    <th>Total de inscriões</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($churches as $church => $collection)
                                    <tr>
                                        <td>
                                            <a href="{{ route('admin.registration.index', ['church' => $church]) }}">
                                                {{ $church }}
                                            </a>
                                        </td>
                                        <td>{{ $collection->count() }}</td>
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
