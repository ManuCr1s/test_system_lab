<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Metadato para aceptar caracteristicas como ñ-->
    <meta charset='utf-8'/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sistema de Laboratorio</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <!--Bootstrap nucleo-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!--Css del tema -->
    <link rel="stylesheet" href="{{asset('assets/css/light-bootstrap-dashboard.css?v=1.4.1')}}">
    <!--Css para agregar estilos nuevo -->
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">
    <!-- Fonts and Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('assets/css/pe-icon-7-stroke.css')}}">
</head>
<body>

        @yield('content')


    <!--   Nucleo de archivos JS -->
    <script src="{{asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>

        @yield('scripts')
</body>