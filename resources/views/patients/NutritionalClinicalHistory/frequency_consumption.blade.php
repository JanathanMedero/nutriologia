@extends('layouts.admin')

@section('title')
	Frecuencia de Consumo
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card card-primary mt-4">
				<div class="card-header">
					<h4>Frecuencia de consumo</h4>
				</div>
				<div class="card-body">
					{{-- Componente Draggable --}}
					
					<div id="foods">
						<foods :foods="{{ $foods }}" :patient="{{ $patient }}"></foods>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('extra-js')
<script src="{{ asset('js/app.js') }}"></script>
@endsection