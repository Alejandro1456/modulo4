


@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Dentista') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('dentistas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo Dentista') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                <tr>
                                    <a href="{{ route('dentista.export') }}" class="btn btn-success float-right" data-placement="left">EXPORTAR</a>
                                </tr>
                                <br>
                                    <tr>
                                        <th>No</th>
                                        
										<th>Apellidos</th>
										<th>Nombres</th>
										<th>Turno</th>
										<th>Telefono</th>
										<th>Correo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dentistas as $dentista)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $dentista->apellidos }}</td>
											<td>{{ $dentista->nombres }}</td>
											<td>{{ $dentista->turno }}</td>
											<td>{{ $dentista->telefono }}</td>
											<td>{{ $dentista->correo }}</td>

                                            <td>
                                                <form action="{{ route('dentistas.destroy',$dentista->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('dentistas.show',$dentista->id) }}"><i class="fa fa-fw fa-eye"></i> VER</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('dentistas.edit',$dentista->id) }}"><i class="fa fa-fw fa-edit"></i> EDITAR</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> ELIMINAR</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $dentistas->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop