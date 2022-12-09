<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $asignatura->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('creditos') }}
            {{ Form::text('creditos', $asignatura->creditos, ['class' => 'form-control' . ($errors->has('creditos') ? ' is-invalid' : ''), 'placeholder' => 'Creditos']) }}
            {!! $errors->first('creditos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('docente') }}
            {{ Form::text('docente', $asignatura->docente, ['class' => 'form-control' . ($errors->has('docente') ? ' is-invalid' : ''), 'placeholder' => 'Docente']) }}
            {!! $errors->first('docente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prerrequisito') }}
            {{ Form::text('prerrequisito', $asignatura->prerrequisito, ['class' => 'form-control' . ($errors->has('prerrequisito') ? ' is-invalid' : ''), 'placeholder' => 'Prerrequisito']) }}
            {!! $errors->first('prerrequisito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horasTA') }}
            {{ Form::text('horasTA', $asignatura->horasTA, ['class' => 'form-control' . ($errors->has('horasTA') ? ' is-invalid' : ''), 'placeholder' => 'Horasta']) }}
            {!! $errors->first('horasTA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horasTD') }}
            {{ Form::text('horasTD', $asignatura->horasTD, ['class' => 'form-control' . ($errors->has('horasTD') ? ' is-invalid' : ''), 'placeholder' => 'Horastd']) }}
            {!! $errors->first('horasTD', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>