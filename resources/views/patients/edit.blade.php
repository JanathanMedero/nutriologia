@extends('layouts.admin')

@section('title')
Detalles del Paciente: {{ $patient->name }}
@endsection

@section('content')
<div class="row">
	<div class="col-md-12 mt-4">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Detalles del Paciente: {{ $patient->name }}</h3>
			</div>
			<div class="card-body">
				<form action="{{ route('patients.update', $patient->slug) }}" method="POST">
					@method('PUT')
					@csrf
					<div class="row">
						<div class="form-group col-md-4">
							<label for="name">Nombre del paciente</label>
							<input type="text" class="form-control" id="name" placeholder="Ingrese el nombre del paciente" value="{{ $patient->name }}" name="name">
						</div>
						<div class="form-group col-md-4">
							<label for="address">Dirección del paciente</label>
							<input type="text" class="form-control" id="address" placeholder="Ingrese la direción del paciente" value="{{ $patient->address }}" name="address">
						</div>
						<div class="form-group col-md-4">
							<label for="city">Ciudad del paciente</label>
							<input type="text" class="form-control" id="city" placeholder="Ingrese la ciudad del paciente" value="{{ $patient->city }}" name="city">
						</div>

						<div class="form-group col-md-4">
							<label>Fecha de nacimiento del paciente</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-calendar"></i></span>
								</div>
							<input type="text" name="birthdate" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask value="{{ $date }}">
							</div>
						</div>

						<div class="form-group col-md-4">
							<label for="phone_1">Telefono del paciente</label>
							<input type="text" class="form-control" id="phone_1" placeholder="Ingrese el telefono del paciente" value="{{ $patient->phone_1 }}" name="phone_1">
						</div>

						<div class="form-group col-md-4">
							<label for="phone_2">Telefono secundario (opcional)</label>
							<input type="text" class="form-control" id="phone_2" placeholder="Ingrese el telefono secundario (opcional)" value="{{ $patient->phone_2 }}" name="phone_2">
						</div>

						<div class="form-group col-md-4">
							<label for="email">Correo electrónico del paciente</label>
							<input type="text" class="form-control" id="email" placeholder="Ingrese el correo electrónico" value="{{ $patient->email }}" name="email">
						</div>

						<div class="form-group col-md-4">
							<label for="weight">Peso del paciente</label>
							<input type="text" class="form-control" id="weight" placeholder="Ingrese el peso del paciente" value="{{ $patient->weight }}" name="weight">
						</div>

						<div class="form-group col-md-4">
							<label>Género</label>
							@if($patient->gender == 'Masculino')
							<div class="form-check">
								<input class="form-check-input" id="masculino" type="radio" value="Masculino" name="gender" checked>
								<label class="form-check-label" for="masculino">Masculino</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" id="femenino" type="radio" value="Femenino" name="gender">
								<label class="form-check-label" for="femenino">Femenino</label>
							</div>
							@else
							<div class="form-check">
								<input class="form-check-input" id="masculino" type="radio" value="Masculino" name="gender">
								<label class="form-check-label" for="masculino">Masculino</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" id="femenino" type="radio" value="Femenino" name="gender" checked>
								<label class="form-check-label" for="femenino">Femenino</label>
							</div>
							@endif

						</div>

						@if($patient->gender == 'Masculino')

						<div class="form-group col-md-4">
							<label for="trimester">Trimestre (Embarazo)</label>
							<input type="text" class="form-control" id="trimester" placeholder="Ingrese el trimestre del paciente" value="{{ $patient->trimester }}" name="trimester" disabled>
						</div>

						<div class="form-group col-md-4">
							<label for="sdg">SDG (Embarazo)</label>
							<input type="text" class="form-control" id="sdg" placeholder="Ingrese el SDG del paciente" value="{{ $patient->sdg }}" name="sdg" disabled>
						</div>

						<div class="form-group col-md-4">
							<label for="semester">Semestre (Lactancia)</label>
							<input type="text" class="form-control" id="semester" placeholder="Ingrese el semestre del paciente" value="{{ $patient->semester }}" name="semester" disabled>
						</div>

						@else

						<div class="form-group col-md-4">
							<label for="trimester">Trimestre (Embarazo)</label>
							<input type="text" class="form-control" id="trimester" placeholder="Ingrese el trimestre del paciente" value="{{ $patient->trimester }}" name="trimester">
						</div>

						<div class="form-group col-md-4">
							<label for="sdg">SDG (Embarazo)</label>
							<input type="text" class="form-control" id="sdg" placeholder="Ingrese el SDG del paciente" value="{{ $patient->sdg }}" name="sdg">
						</div>

						<div class="form-group col-md-4">
							<label for="semester">Semestre (Lactancia)</label>
							<input type="text" class="form-control" id="semester" placeholder="Ingrese el semestre del paciente" value="{{ $patient->semester }}" name="semester">
						</div>

						@endif


						<div class="form-group col-md-4">
							<label for="size">Talla del paciente</label>
							<input type="text" class="form-control" id="size" placeholder="Ingrese la talla del paciente" value="{{ $patient->size }}" name="size">
						</div>

						<div class="form-group col-md-4">
							<label for="age">Edad del paciente</label>
							<input type="text" class="form-control" id="age" value="{{ $patient->age }}" name="age" disabled>
						</div>

						<div class="form-group col-md-12">
							<label for="notes">Notas del paciente (opcional)</label>
						<textarea class="form-control" id="notes" rows="3" placeholder="Ingrese las notas del paciente (opcional)" name="notes">{{ $patient->notes }}</textarea>
						</div>

						<div class="form-group col-md-12">
							<button type="submit" class="btn btn-info">Actualizar Paciente</button>
						</div>
					</div>
				</form>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
</div>
@endsection

@section('extra-js')
<script src="{{ asset('admin-lte/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('admin-lte/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('admin-lte/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('admin-lte/input-mask/jquery.inputmask.extensions.js') }}"></script>
<script>
	document.getElementById('femenino').onchange = function() {
    document.getElementById('trimester').disabled = !this.checked;
    document.getElementById('semester').disabled = !this.checked;
    document.getElementById('sdg').disabled = !this.checked;
	};

	document.getElementById('masculino').onchange = function() {
    document.getElementById('trimester').disabled = this.checked;
    document.getElementById('semester').disabled = this.checked;
    document.getElementById('sdg').disabled = this.checked;
	};

</script>
<script>
	$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
    	timePicker         : true,
    	timePickerIncrement: 30,
    	format             : 'MM/DD/YYYY h:mm A'
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
    	ranges   : {
    		'Today'       : [moment(), moment()],
    		'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
    		'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
    		'Last 30 Days': [moment().subtract(29, 'days'), moment()],
    		'This Month'  : [moment().startOf('month'), moment().endOf('month')],
    		'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    	},
    	startDate: moment().subtract(29, 'days'),
    	endDate  : moment()
    },
    function (start, end) {
    	$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
    )

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    	checkboxClass: 'icheckbox_minimal-blue',
    	radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
    	checkboxClass: 'icheckbox_minimal-red',
    	radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
    	checkboxClass: 'icheckbox_flat-green',
    	radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
    	showInputs: false
    })
})
</script>
@endsection