<div class="box box-info padding-1">
    <div class="box-body">

        <!--  <div class="form-group">
            {{ Form::label('paciente_id') }}
            {{ Form::text('paciente_id', $cita->paciente_id, ['class' => 'form-control' . ($errors->has('paciente_id') ? ' is-invalid' : ''), 'placeholder' => 'Paciente Id']) }}
            {!! $errors->first('paciente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
        <div class="form-group">

            {{ Form::label('paciente_id') }}

            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search..." name="paciente_id">

<datalist id="datalistOptions">

    @foreach ($pacientes as $paciente)

    <option value="{{$paciente->id}}" {{ ($paciente->id==$paciente->id) ? 'selected':'' }}>{{$paciente->apellidos.' '.$paciente->nombres}}</option>

    @endforeach

</datalist>

        </div>
        <!--<div class="form-group">
            {{ Form::label('dentista_id') }}
            {{ Form::text('dentista_id', $cita->dentista_id, ['class' => 'form-control' . ($errors->has('dentista_id') ? ' is-invalid' : ''), 'placeholder' => 'Dentista Id']) }}
            {!! $errors->first('dentista_id', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
        <div class="form-group">

            {{ Form::label('dentista_id') }}

            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search..." name="dentista_id">

            <datalist id="datalistOptions">

                @foreach ($dentistas as $dentista)

                <option value="{{$dentista->id}}" {{ ($dentista->id==$dentista->id) ? 'selected':'' }}>{{$dentista->apellidos.' '.$dentista->nombres.''.$dentista->turno}}</option>

                @endforeach

                
            </datalist>
          

        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>