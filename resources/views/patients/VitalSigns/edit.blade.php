@extends('layouts.admin')

@section('title')
Editar Signos vitales
@endsection

@section('content')
<div class="row" id="signVitals">
    <div class="col-md-12 mt-4">
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-title">
                    Signos Vitales
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('VitalSigns.update', $patient->slug) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="PAS">Presión arterial sistólica PAS</label>
                            <input type="number" class="form-control" id="PAS" placeholder="Presión arterial sistólica" value="{{ $patient->VitalSign->PAS }}" v-model="PAS" name="PAS">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="PAD">Presión arterial diastólica PAD</label>
                            <input type="number" class="form-control" id="PAD" placeholder="Presión arterial diastólica PAD" value="{{ $patient->VitalSign->PAD }}" v-model="PAD" name="PAD">
                        </div>
                        <div v-if="PAS >= 129 && PAS <= 139 && PAD >= 80 && PAD <= 89" class="col-md-4 alert alert-info d-flex justify-content-center align-items-center" style="height: 40px; margin-top: 32px;">
                            Prehipertensión
                        </div>
                        <div v-if="PAS >= 140 && PAS <= 159 && PAD >= 90 && PAD <= 99" class="col-md-4 alert alert-warning d-flex justify-content-center align-items-center" style="height: 40px; margin-top: 32px;">
                            Hipertensión Grado 1
                        </div>
                        <div v-if="PAS >= 160 && PAD >= 100" class="col-md-4 alert alert-danger d-flex justify-content-center align-items-center" style="height: 40px; margin-top: 32px;">
                            Hipertensión Grado 2
                        </div>
                        <div class="form-group col-md-4">
                            <label for="breathing_frequency">Frecuencia Respiratoria</label>
                            <input type="number" class="form-control" id="breathing_frequency" placeholder="Frecuencia Respiratoria" value="{{ $patient->VitalSign->breathing_frequency }}" name="breathing_frequency">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="body_temperature">Temperatura Corporal</label>
                            <input type="number" class="form-control" id="body_temperature" placeholder="Temperatura Corporal" value="{{ $patient->VitalSign->body_temperature }}" name="body_temperature">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="beats_per_minute">Latidos por Minuto</label>
                            <input type="number" class="form-control" id="beats_per_minute" placeholder="Latidos por Minuto" value="{{ $patient->VitalSign->beats_per_minute }}" name="beats_per_minute">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-success btn-block" name="button">Actualizar Datos</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script src="{{ asset('js/notice.js') }}"></script>
@endsection
