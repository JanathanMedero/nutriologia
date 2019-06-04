<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- OpenPay Styles --}}
    <link rel="stylesheet" href="{{ asset('css/OpenPayStyles.css') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
    
    {{-- SweetAlert 2 --}}
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>

    {{-- Scripts de OpenPay --}}
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://openpay.s3.amazonaws.com/openpay.v1.min.js"></script>
    <script type='text/javascript' src="https://openpay.s3.amazonaws.com/openpay-data.v1.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            OpenPay.setId('mc1s6nodmz0mftoodeav');
            OpenPay.setApiKey('pk_40d8e3782ec748ca9a21f2c5b17eeaea');
            OpenPay.setSandboxMode(true);
            //Se genera el id de dispositivo
            var deviceSessionId = OpenPay.deviceData.setup("payment-form", "deviceIdHiddenFieldName");

            $('#pay-button').on('click', function(event) {
                event.preventDefault();
                $("#pay-button").prop( "disabled", true);
                $('#loadPayment').css('display', 'block');
                $("#pay-button" ).append( `<span id="spinner" class="text-white"><span class="spinner-border spinner-border-sm text-light" role="status" aria-hidden="true"></span> Procesando Pago...</span>` );
                $("#text-payment").remove();
                OpenPay.token.extractFormAndCreate('payment-form', sucess_callbak, error_callbak);
            });

            var sucess_callbak = function(response) {
              var token_id = response.data.id;
              $('#token_id').val(token_id);
              $('#payment-form').submit();
		
            };

             var error_callbak = function(response) {
                 var message = response.data.description != undefined ? response.data.description : response.message;
                 if(message == 'holder_name is required'){
                    message = 'Ingrese el nombre del titular de la tarjeta'
                 }
                 if(message == 'card_number is required, card_number is required'){
                     message = 'Ingrese un número de tarjeta valido'
                 }
                 if(message == 'The expiration date has already passed'){
                     message = 'El año de su tarjeta ha expirado'
                 }
                 if(message == 'The CVV2 security code is required'){
                     message = 'El código de seguridad es requerido'
                 }
                 if(message == 'holder_name is required, card_number is required, expiration_year expiration_month is required'){
                    message = 'Ingrese el nombre del titular de la tarjeta, Ingrese un número de tarjeta valido, El año o mes de su tarjeta ha expirado'
                 }

                 console.log(message.card_number);
                 alert(message);
                $("#pay-button").prop("disabled", false);
                $('#loadPayment').css('display', 'none');
                $("#pay-button").append(`<span id="text-payment" class="text-white">Pagar</span>`);
                $("#spinner" ).remove();
             };

        });
    </script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
</div>
@yield('extra-js')
@include('sweet::alert')
</body>
</html>
