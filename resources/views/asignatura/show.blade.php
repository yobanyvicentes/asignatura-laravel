@extends('layouts.app')

@section('template_title')
    {{ $asignatura->name ?? 'Show Asignatura' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Asignatura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('asignaturas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $asignatura->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Creditos:</strong>
                            {{ $asignatura->creditos }}
                        </div>
                        <div class="form-group">
                            <strong>Docente:</strong>
                            {{ $asignatura->docente }}
                        </div>
                        <div class="form-group">
                            <strong>Prerrequisito:</strong>
                            {{ $asignatura->prerrequisito }}
                        </div>
                        <div class="form-group">
                            <strong>Horasta:</strong>
                            {{ $asignatura->horasTA }}
                        </div>
                        <div class="form-group">
                            <strong>Horastd:</strong>
                            {{ $asignatura->horasTD }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
