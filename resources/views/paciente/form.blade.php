<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $paciente->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $paciente->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $paciente->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sesiones') }}
            {{ Form::text('sesiones', $paciente->sesiones, ['class' => 'form-control' . ($errors->has('sesiones') ? ' is-invalid' : ''), 'placeholder' => 'Sesiones']) }}
            {!! $errors->first('sesiones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edad') }}
            {{ Form::text('edad', $paciente->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
            {!! $errors->first('edad', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    
        <div class="form-group">
            {{ Form::label('cita') }}
            {{ Form::date('cita', $paciente->cita, ['class' => 'form-control' . ($errors->has('cita') ? ' is-invalid' : ''), 'placeholder' => 'Cita']) }}
            {!! $errors->first('cita', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>