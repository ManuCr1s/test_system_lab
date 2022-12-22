@extends('layouts.plantilla')
@section('content')
    <div class="wrapper">
        <x-slidebar>
            @section('rol')
                Docente
            @endsection
            @section('list')
            <ul class="nav">
				<li class="active">
					<a href="{{route('panel')}}">
						<i class="pe-7s-graph"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li>
					<a data-toggle="collapse" href="#componentsExamples">
                        <i class="pe-7s-plugin"></i>
                        <p>Recepcion
                           <b class="caret"></b>
                        </p>
                    </a>
					<div class="collapse" id="componentsExamples">
						<ul class="nav">
							<li>
								<a href="{{route('buscar')}}">
									<span class="sidebar-mini">B</span>
									<span class="sidebar-normal">Buscar</span>
								</a>
							</li>
							<li>
								<a href="{{route('input')}}">
									<span class="sidebar-mini">S</span>
									<span class="sidebar-normal">Solicitar</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<a data-toggle="collapse" href="#formsExamples">
                        <i class="pe-7s-note2"></i>
                        <p>Devolucion
                           <b class="caret"></b>
                        </p>
                    </a>
					<div class="collapse" id="formsExamples">
						<ul class="nav">
							<li>
								<a href="{{route('output')}}">
									<span class="sidebar-mini">P</span>
									<span class="sidebar-normal">Practica</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<a data-toggle="collapse" href="#tablesExamples">
                        <i class="pe-7s-news-paper"></i>
                        <p>Reportes
                           <b class="caret"></b>
                        </p>
                    </a>
					<div class="collapse" id="tablesExamples">
						<ul class="nav">
							<li>
								<a href="{{route('requerimient')}}">
									<span class="sidebar-mini">RR</span>
									<span class="sidebar-normal">Reporte Requerimiento</span>
								</a>
							</li>
							<li>
								<a href="{{route('test')}}">
									<span class="sidebar-mini">RP</span>
									<span class="sidebar-normal">Reporte Practicas</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
            </ul>
					
            @endsection
        </x-slidebar>
        <div class="main-panel">
            <x-nav>
            </x-nav>
            <div class="main-content">
                       
            </div>
        </div>
        
    </div>
@endsection
@section('scripts')
	<script src="{{asset('assets/js/light-bootstrap-dashboard.js?v=1.4.1')}}"></script>
	<script src="{{asset('assets/js/demo.js')}}"></script>
@endsection