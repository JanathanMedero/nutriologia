@extends('layouts.payment')

@section('title')
Registro
@endsection

@section('content')
<div class="container">
    <div class="row">
      
      <div class="col-md-12">
        @include('partials.errors')
      </div>

        {{-- Inicia formulario de usuario --}}
        <form action="{{ route('openPay.store') }}" method="POST" id="payment-form">
            @csrf
            
            <div class="col-md-12">
                <div class="card my-4">
                    <div class="card-header bg-danger">
                        <h3 class="text-white mb-0">
                            Datos del nutriologo
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="name_nutriologist">Nombre del nutriologo</label>
                                <input id="name_nutriologist" class="form-control" type="text" placeholder="Nombre del nutriologo" name="name_nutriologist" value="{{ old('name_nutriologist') }}" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="email">Correo Electrónico</label>
                                <input id="email" class="form-control" type="email" placeholder="Correo Electrónico" name="email" value="{{ old('email') }}">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="no_registry">Número de registro</label>
                                <input id="no_registry" class="form-control" type="text" placeholder="Número de registro" name="no_registry" value="{{ old('no_registry') }}">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="cedula">Cédula Profesional</label>
                                <input id="cedula" class="form-control" type="text" placeholder="Cédula Profesional" name="identification_card" value="{{ old('identification_card') }}">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="password">Contraseña</label>
                                <input id="password" class="form-control" type="password" placeholder="Contraseña" name="password">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="password_confirmation">Repite la Contraseña</label>
                                <input id="password_confirmation" class="form-control" type="password" placeholder="Repite la contraseña" name="password_confirmation">
                          </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card my-4">
                  <div class="card-header bg-danger">
                    <h3 class="text-white mb-0">
                        Tarjeta de crédito o débito
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Tarjetas de crédito</h4>
                                </div>
                                <div class="col-md-12">
                                    <img src="{{ asset('images/openPay/cards1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Tarjetas de débito</h4>
                                </div>
                                <div class="col-md-12">
                                    <img src="{{ asset('images/openPay/cards2.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-12">
                            {{-- Inicia formulario de Pago --}}
                            <input type="hidden" name="token_id" id="token_id">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="headline">Nombre del titular</label>
                                  <input class="form-control" id="headline" type="text" placeholder="Como aparece en la tarjeta" autocomplete="off" name="name" data-openpay-card="holder_name" name="holder_name">
                              </div>

                              <div class="form-group col-md-6">
                                  <label for="card_number">Número de tarjeta</label>
                                  <input id="card_number" class="form-control" type="text" autocomplete="off" data-openpay-card="card_number" name="card_number" maxlength="16">
                              </div>

                              <div class="col-md-6">
                                  <p>Fecha de Expiración</p>
                              </div>
                              <div class="col-md-6">
                                  <label for="cvv2">Código de seguridad</label>
                              </div>

                              <div class="form-group col-md-3">
                                  <input class="form-control" type="text" placeholder="Mes" data-openpay-card="expiration_month" name="expiration_month" maxlength="2">
                              </div>

                              <div class="form-group col-md-3">
                                  <input class="form-control" type="text" placeholder="Año" data-openpay-card="expiration_year" name="expiration_year" maxlength="2">
                              </div>

                              <div class="form-group col-md-6">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <input id="cvv2" class="form-control" type="text" placeholder="3 dígitos" autocomplete="off" data-openpay-card="cvv2" name="cvv2" maxlength="3">
                                      </div>
                                      <div class="col-md-6">
                                          <img src="{{ asset('images/openPay/cvv.png') }}" alt="">
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-6">
                                  <div class="row">
                                      <div class="col-md-5">
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <p class="mb-0 text-center">Transacciones realizadas vía:</p>
                                              </div>
                                              <div class="col-md-12 text-center">
                                                  <img src="{{ asset('images/Openpay/openpay.png') }}">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-7">
                                          <div class="row">
                                              <div class="col-md-2">
                                                  <img src="{{ asset('images/openpay/security.png') }}" class="mt-3">
                                              </div>
                                              <div class="col-md-10">
                                                  <p>
                                                      Tus pagos se realizan de forma segura con encriptación de 256 bits
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-6 d-flex align-items-center">
                                  <a class="text-white btn btn-danger btn-block" id="pay-button">Pagar</a>
                              </div>
                          </div>
                      </div>
                      {{-- Termina formulario de pago --}}
                  </div>
              </div>
          </div>
      </div>
  </form>
</div>
@endsection
