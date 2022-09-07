@extends('layouts.main')

@section('content')
<div class="container-fluid" id="content-dashboard">
    <div class="row">
        <br><br>
        <div class="col-md-12 mt-5">
            <div class="card ">
                <div class="card-body">
                    <h2 class="text-center">{{ $news->title }}</h2>

                    <div class="row mb-4 text-center">
                        <div class="col-md-6">
                            <div class="form-group">
                                <p>
                                    <b>Fecha:</b>
                                    {{ $news->date->format('d/m/Y') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <p>
                                    <b>Medio:</b>
                                    <a target="_blank" href="{{ $news->link }}">{{ $news->link }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <img class="img-fluid" src="{{ $news->file }}" alt="" style="max-height: 300px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
