@extends('layouts.main')

@section('content')
<div class="container-fluid" id="content-dashboard">
    <div class="row align-items-center" id="row-100">
        <div class="col-12">
            <h1 class="text-center">DASHBOARD</h1>
        </div>
        <div class="col-md-6">
            <div class="card card-dashboard">
                <div class="card-body">
                    <h2 class="text-center">Aprobar Usuarios</h2>
                    <table class="w-100 table-users">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 33.33%">
                                    NOMBRE
                                </th>
                                <th class="text-center" style="width: 33.33%">
                                    EMAIL
                                </th>
                                <th class="text-center" style="width: 33.33%">
                                    ACCIÓN
                                </th>
                            </tr>
                        </thead>
                        <tbody class="scroller">
                            @foreach ($users as $user)
                            <tr>
                                <td class="text-center">
                                    {{ $user->name }}
                                </td>
                                <td class="text-center">
                                    {{ $user->email }}
                                </td>
                                <td class="text-center">
                                    @if ($user->confirmed == 'p')
                                    <form class="d-inline" action="{{ route('users.approve',$user->id) }}"
                                        method="post">
                                        @method('PUT')
                                        @csrf
                                        <button class="btn btn-sm btn-primary p-1">
                                            Aceptar
                                        </button>
                                    </form>
                                    <form class="d-inline" action="{{ route('users.reject',$user->id) }}" method="post">
                                        @method('PUT')
                                        @csrf
                                        <button class="btn btn-sm btn-danger p-1">
                                            Rechazar
                                        </button>
                                    </form>
                                    @endif
                                    @if ($user->confirmed == 'a')
                                    <p class="text-success mb-0">
                                        <b>
                                            Usuario aprobado
                                        </b>
                                    </p>
                                    @endif
                                    @if ($user->confirmed == 'r')
                                    <p class="text-danger mb-0">
                                        Usuario rechazado
                                    </p>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-dashboard">
                <h2 class="text-center">Noticias</h2>
                <table>
                    <thead>
                        <th>
                            NOMBRE
                        </th>
                        <th>
                            EMAIL
                        </th>
                        <th>
                            ACCIÓN
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-dashboard-xs">
                <h2 class="text-center">Crear Noticia</h2>
            </div>
        </div>
    </div>
</div>
@endsection
