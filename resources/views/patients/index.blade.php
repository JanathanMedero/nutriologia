@extends('layouts.admin')

@section('title')
Pacientes
@endsection

@section('content')

<div class="row">
	<div class="col-md-10 px-4">
		<h1>Pacientes</h1>
	</div>
	<div class="col-md-2 mt-2 text-center">
		<a href="{{ route('patients.create') }}" class="btn btn-primary"><i class="fa fa-user"></i> Nuevo Paciente</a>
	</div>
	{{-- Inicia tabla de pacientes --}}
	<div class="col-md-12">
		<div class="card">
            <div class="card-header">
              <h3 class="card-title">Detalles de los pacientes</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Ciudad</th>
                  <th>Edad</th>
                  <th>Correo Electrónico</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($patients as $patient)
                <tr class="text-center">
                  <td>{{ $patient->name }}</td>
                  <td>{{ $patient->city }}</td>
                  <td>{{ $patient->age }}</td>
                  <td>{{ $patient->email }}</td>
                  <td>
                    <button type="button" class="btn btn-primary">Editar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
	</div>
</div>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

@endsection