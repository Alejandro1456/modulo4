

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Dentista</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('dentistas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $dentista->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $dentista->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Turno:</strong>
                            {{ $dentista->turno }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $dentista->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $dentista->correo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop