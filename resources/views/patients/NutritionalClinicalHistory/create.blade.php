@extends('layouts.admin')

@section('title')
Historia Clínica Nutricional
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card card-primary mt-4">
			<div class="card-header">
				<h3 class="mb-0">Evaluación Médica Nutricional</h3>
			</div>
			<div class="card-body">
				<form action="#" method="POST">
					@csrf
					<div class="row">
						<div class="col-md-12">
							<h5 class="mb-0"><strong>Estilo de Vida</strong></h5>
						</div>
						<div class="col-md-12">
							<hr>
						</div>
						<div class="form-group col-md-6">
							<label for="physical_activities">Detalle las actividades físicas diarias</label>
							<textarea class="form-control" id="physical_activities" rows="3" style="resize: none;"></textarea>
						</div>
						<div class="form-group col-md-4 px-4">
							<label>Nivel de estrés</label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="exampleRadios" id="high_stress" value="option1" checked>
								<label class="form-check-label" for="high_stress">
									Mucho Estrés
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
								<label class="form-check-label" for="exampleRadios2">
									Estrés Regular
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
								<label class="form-check-label" for="exampleRadios3">
									Poco Estrés
								</label>
							</div>
						</div>
						<div class="col-md-12">
							<hr>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<h5 class="mb-0"><strong>Alimentación</strong></h5>
						</div>
						<div class="col-md-12">
							<hr>
						</div>
						<div class="col-md-12">
							<h6><strong>Seleccione los alimentos de preferencia</strong></h6>
						</div>
						<div class="col-md-12">
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="ensalada" type="checkbox" id="ensalada" value="Ensalada">
								<label class="form-check-label" for="ensalada">Ensalada</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="carne_roja" type="checkbox" id="carne_roja" value="Carne Roja">
								<label class="form-check-label" for="carne_roja">Carne roja</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="pescado" type="checkbox" id="Pescado" value="Pescado">
								<label class="form-check-label" for="Pescado">Pescado</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="sopa" type="checkbox" id="sopa" value="sopa">
								<label class="form-check-label" for="sopa">Sopa</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="pasta" type="checkbox" id="pasta" value="pasta">
								<label class="form-check-label" for="pasta">Pasta</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="verdura" type="checkbox" id="verdura" value="verdura">
								<label class="form-check-label" for="verdura">Verduras</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="fruta" type="checkbox" id="frutas" value="frutas">
								<label class="form-check-label" for="frutas">Frutas</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="vegetariana" type="checkbox" id="vegetariana" value="vegetariana">
								<label class="form-check-label" for="vegetariana">Vegetariana</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="vegana" type="checkbox" id="vegana" value="vegana">
								<label class="form-check-label" for="vegana">Vegana</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="ave" type="checkbox" id="aves" value="aves">
								<label class="form-check-label" for="aves">Aves</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="cerdo" type="checkbox" id="cerdo" value="cerdo">
								<label class="form-check-label" for="cerdo">Cerdo</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="mexicana" type="checkbox" id="mexicana" value="mexicana">
								<label class="form-check-label" for="mexicana">Mexicana</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="marisco" type="checkbox" id="mariscos" value="mariscos">
								<label class="form-check-label" for="mariscos">Mariscos</label>
							</div>
							<div class="col-md-12">
								<hr>
							</div>
						</div>
						<div class="form-group col-md-6 mt-2">
							<label for="food_not_prefer">Alimentos que no son de su preferencia</label>
							<input type="text" class="form-control" id="food_not_prefer" placeholder="Ingrese los alimentos que no le gustan al paciente." value="{{ old('food_not_prefer') }}" name="food_not_prefer">
						</div>
						<div class="form-group col-md-6 mt-2">
							<label for="alimentary_habits">Habitos alimentarios diarios</label>
							<input type="text" class="form-control" id="alimentary_habits" placeholder="Ingrese los habitos alimentarios diarios." value="{{ old('alimentary_habits') }}" name="alimentary_habits">
						</div>
						<div class="form-group col-md-6 mt-2">
							<label for="food_belief">Creencia sobre algunos alimentos</label>
							<input type="text" class="form-control" id="food_belief" placeholder="Ingrese la creencia de algunos alimentos." value="{{ old('food_belief') }}" name="food_belief">
						</div>
						<div class="col-md-12">
							<hr>
						</div>
						<div class="col-md-12">
							<h6><strong>Dieta específica</strong></h6>
						</div>
						<div class="col-md-12">
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="diet_ensalada" type="checkbox" id="diet_ensalada" value="diet_ensalada">
								<label class="form-check-label" for="diet_ensalada">Ensaladas</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="diet_vegana" type="checkbox" id="diet_vegana" value="diet_vegana">
								<label class="form-check-label" for="diet_vegana">Vegana</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="diet_crudiveriana" type="checkbox" id="diet_crudiveriana" value="diet_crudiveriana">
								<label class="form-check-label" for="diet_crudiveriana">Crudiveriana</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="diet_ovogetariana" type="checkbox" id="diet_ovogetariana" value="diet_ovogetariana">
								<label class="form-check-label" for="diet_ovogetariana">Ovogetariana</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="diet_ovolactovegetariana" type="checkbox" id="diet_ovolactovegetariana" value="diet_ovolactovegetariana">
								<label class="form-check-label" for="diet_ovolactovegetariana">Ovolactovegetariana</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="diet_mediterranea" type="checkbox" id="diet_mediterranea" value="diet_mediterranea">
								<label class="form-check-label" for="diet_mediterranea">Meditarránea</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="other" type="checkbox" id="other" value="other">
								<label class="form-check-label" for="other">Otra</label>
							</div>
						</div>
						<div class="form-group col-md-6 mt-4">
							<label for="water">Agua durente el dia</label>
							<input type="number" class="form-control" id="water" placeholder="Ingrese los litros de agua que consume el paciente en un dia." value="{{ old('water') }}" name="water">
						</div>
						<div class="col-md-6 mt-4">
							<div class="row">
								<div class="col-md-12">
									<h6><strong>Uso de suplementos</strong></h6>
								</div>
								<div class="col-md-12">
									<div class="form-check form-check-inline">
										<input class="form-check-input" name="vitamins" type="checkbox" id="vitamins" value="vitamins">
										<label class="form-check-label" for="vitamins">Vitaminas</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" name="protein" type="checkbox" id="protein" value="protein">
										<label class="form-check-label" for="protein">Proteínas</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" name="aminoacids" type="checkbox" id="aminoacids" value="aminoacids">
										<label class="form-check-label" for="aminoacids">Aminoácidos</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" name="none" type="checkbox" id="none" value="none">
										<label class="form-check-label" for="none">Ninguno</label>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<hr>
						</div>

						<div class="col-md-12">
							<h6><strong>Alergias alimentarias</strong></h6>
						</div>

						<div class="col-md-2 d-flex align-items-center justify-content-center">
							<label for="aleaginosas" class="mb-3">Aleaginosas</label>	
						</div>
						<div class="form-group col-md-10">
							<input type="text" class="form-control" id="aleaginosas" placeholder="Detalles de la alergia." value="{{ old('aleaginosas') }}" name="aleaginosas">
						</div>

						<div class="col-md-2 d-flex align-items-center justify-content-center">
							<label for="fruits" class="mb-3">Frutas</label>	
						</div>
						<div class="form-group col-md-10">
							<input type="text" class="form-control" id="fruits" placeholder="Detalles de la alergia." value="{{ old('fruits') }}" name="fruits">
						</div>

						<div class="col-md-2 d-flex align-items-center justify-content-center">
							<label for="vegetables" class="mb-3">Vegetales</label>	
						</div>
						<div class="form-group col-md-10">
							<input type="text" class="form-control" id="vegetables" placeholder="Detalles de la alergia." value="{{ old('vegetables') }}" name="vegetables">
						</div>

						<div class="col-md-2 d-flex align-items-center justify-content-center">
							<label for="aoa" class="mb-3">AOA</label>	
						</div>
						<div class="form-group col-md-10">
							<input type="text" class="form-control" id="aoa" placeholder="Detalles de la alergia." value="{{ old('aoa') }}" name="aoa">
						</div>

						<div class="col-md-12">
							<hr>
						</div>

						<div class="form-group col-md-6">
							<label for="intolerance">Intolerancia</label>
							<input type="text" class="form-control" id="intolerance" placeholder="Ingrese los alimentos que no tolera el paciente." value="{{ old('intolerance') }}" name="intolerance">
						</div>

						<div class="col-md-12">
							<hr>
						</div>
						<div class="col-md-12">
							<h5 class="mb-0"><strong>Cambios de peso</strong></h5>
						</div>
						<div class="col-md-12">
							<hr>
						</div>
						<div class="form-group col-md-6">
							<label for="max_weight">Maximo peso (KG)</label>
							<input type="text" class="form-control" id="max_weight" placeholder="Ingrese el peso maximo del paciente." value="{{ old('max_weight') }}" name="max_weight">
						</div>
						<div class="form-group col-md-6">
							<label for="min_weight">Minimo peso (KG)</label>
							<input type="text" class="form-control" id="min_weight" placeholder="Ingrese el peso mínimo del paciente." value="{{ old('min_weight') }}" name="min_weight">
						</div>
						<div class="form-group col-md-6">
							<label for="usual_weight">Peso habitual (KG)</label>
							<input type="text" class="form-control" id="usual_weight" placeholder="Ingrese el peso habitual del paciente." value="{{ old('usual_weight') }}" name="usual_weight">
						</div>
						<div class="form-group col-md-6">
							<label for="lastMonth">Peso del ultimo mes (KG)</label>
							<input type="text" class="form-control" id="lastMonth" placeholder="Ingrese el peso del ultimo mes del paciente." value="{{ old('lastMonth') }}" name="lastMonth">
						</div>
						<div class="form-group col-md-6">
							<label for="lastThreeMonths">Peso de los ultimos 3 meses (KG)</label>
							<input type="text" class="form-control" id="lastThreeMonths" placeholder="Ingrese el peso de los ultimos 3 meses del paciente." value="{{ old('lastThreeMonths') }}" name="lastThreeMonths">
						</div>
						<div class="form-group col-md-6">
							<label for="lastSixMonths">Peso de los ultimos 6 meses (KG)</label>
							<input type="text" class="form-control" id="lastSixMonths" placeholder="Ingrese el peso de los ultimos seis meses del paciente." value="{{ old('lastSixMonths') }}" name="lastSixMonths">
						</div>
						<div class="col-md-12">
							<hr>
						</div>
					</div>

					{{-- Componente de alimentos --}}

					<div id="foods">
						<foods :foods="{{ $foods }}"></foods>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('extra-js')
<script src="{{ asset('js/app.js') }}"></script>
@endsection