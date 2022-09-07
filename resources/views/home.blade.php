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
                <div class="card-body">
                    <h2 class="text-center">Noticias</h2>
                    <table class="w-100 table-users">
                        <thead>
                            <tr>
                                <th class="">
                                    TÍTULO
                                </th>
                                <th class="text-center">
                                    ACCIÓN
                                </th>
                            </tr>
                        </thead>
                        <tbody class="scroller">
                            @foreach ($news as $new)
                            <tr>
                                <td class="">
                                    {{ $new->title }}
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('news.show',$new) }}" class="btn btn-sm btn-primary p-1">
                                        VER NOTICIA
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-dashboard-xs">
                <div class="card-body">
                    <h2 class="text-center">Crear Noticia</h2>
                    <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="TÍTULO" type="text" name="title" id="" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="MEDIO" type="text" name="link" id="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="FECHA" type="date" name="date" id="" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="file" name="file" id="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">GUARDAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
