@extends('layouts.admin')

@section('title')
Configuración
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="card mt-4">
            <div class="card-header">
              <h3 class="card-title">Configuración de la cuenta</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="row d-flex justify-content-center">
                    <div class="col-md-3">
                      <img src="{{ asset($user->picture) }}" alt="User Image" class="img-fluid">
                    </div>
                  </div>
                </div>

                <div class="col-md-12 mt-4">
                  <div class="row d-flex justify-content-center">
                    <div class="col-md-3">
                      <div class="input-group mb-3">
                        <div class="custom-file">
                          <form action="{{ route('change_picture', $user->slug) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                          <input type="file" class="custom-file-input" id="picture" name="picture">
                          <label class="custom-file-label" for="picture" aria-describedby="inputGroupFileAddon02">Seleccionar Fotografía</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row d-flex justify-content-center">
                    <div class="col-md-3">
                      <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                          
                            <button type="submit" class="btn btn-success">Cambiar Imágen</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
	</div>
</div>

<script>
    function desactiveNutriologist(e) {
      if (!confirm("Restringir acceso al nutriologo?")){
        e.preventDefault();
      }
    }
</script>

<script>
    function activeNutriologist(e) {
      if (!confirm("Activar cuenta del nutriologo?")){
        e.preventDefault();
      }
    }
</script>

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