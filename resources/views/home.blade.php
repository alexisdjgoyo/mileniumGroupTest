@extends('layouts.main')

@section('content')
<div class="container-fluid" id="content-dashboard">
    <div class="row align-items-center">
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
                                <th class="text-center">
                                    NOMBRE
                                </th>
                                <th class="text-center">
                                    EMAIL
                                </th>
                                <th class="text-center">
                                    ACCIÓN
                                </th>
                            </tr>
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
