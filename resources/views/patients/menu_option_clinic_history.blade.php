@extends('layouts.admin')

@section('title')
Historia Clínica: {{ $patient->name }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 mt-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h5>Historia Clínica del paciente {{ $patient->name }}</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="card col-md-4">
                        <img src="{{ asset('images/clinic_history.png') }}" class="card-img-top" alt="Historia Clínica">
                        <div class="card-body">
                            <h5 class="card-title">Historia Clínica</h5>
                            <p class="card-text">Formulario con detalles del paciente como sus cirugías, registro de medicamentos etc.</p>
                            @if($patient->Brief_clinical_history)
                                <a href="{{ route('BriefClinicalHistory.edit', $patient->slug) }}" class="btn btn-primary text-white ml-1" type="button" class="btn btn-info">Editar Datos</a>
                            @else
                            <a href="{{ route('BriefClinicHistory.create', $patient->slug) }}" class="btn btn-primary text-white ml-1" type="button" class="btn btn-info">Capturar Datos</a>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
