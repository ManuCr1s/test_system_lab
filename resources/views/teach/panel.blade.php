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
				<div class="container-fluid">
						<div class="row">
							<div class="col-md-4">
								<div class="card">
									<div class="header">
										<h4 class="title">Reactivos Utilizados</h4>
										<p class="category">Reporte del ultimo mes</p>
									</div>
									<div class="content">
										<div id="chartEmail" class="ct-chart "></div>
									</div>
									<div class="footer">
										<div class="legend">
											<i class="fa fa-circle text-info"></i> Nicotomico
											<i class="fa fa-circle text-danger"></i> Acido
											<i class="fa fa-circle text-warning"></i> Abiertas
										</div>
										<hr>
										<div class="stats">
											<i class="fa fa-clock-o"></i> Modificado hace un dia
										</div>
									</div>

								</div>
							</div>

							<div class="col-md-8">
								<div class="card">
									<div class="header">
										<h4 class="title">Materiales Utilizados</h4>
										<p class="category">Reporte del Ultimo mes</p>
									</div>
									<div class="content">
										<div id="chartHours" class="ct-chart"></div>
									</div>
									<div class="footer">
										<div class="legend">
											<i class="fa fa-circle text-info"></i> Vidrios
											<i class="fa fa-circle text-danger"></i> Instrumentos
											<i class="fa fa-circle text-warning"></i> Enseres										</div>
										<hr>
										<div class="stats">
											<i class="fa fa-history"></i> Modificado hoy
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="card ">
									<div class="header">
										<h4 class="title">Practicas Realizadas</h4>
										<p class="category">En campo, laboratorio y aula </p>
									</div>
									<div class="content">
										<div id="chartActivity" class="ct-chart"></div>
									</div>
									<div class="footer">
										<div class="legend">
											<i class="fa fa-circle text-info"></i> Aula
											<i class="fa fa-circle text-danger"></i> Laboratorio
										</div>
										<hr>
										<div class="stats">
											<i class="fa fa-check"></i> Modificado hace un dia
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="card ">
									<div class="header">
										<h4 class="title">Pendientes</h4>
										<p class="category">Practicas, devolucion</p>
									</div>
									<div class="content">
										<div class="table-full-width">
											<table class="table">
												<tbody>
													<tr>
														<td>
															<div class="checkbox">
																	<input id="checkbox30" type="checkbox">
																	<label for="checkbox30"></label>
																</div>
														</td>
														<td>Devolucion de Instrumentos de la practica numero Nº 10</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
																<i class="fa fa-edit"></i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="fa fa-times"></i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																	<input id="checkbox32" type="checkbox">
																	<label for="checkbox32"></label>
																</div>
														</td>
														<td>Practica pendiente del 12/10/2022</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
																<i class="fa fa-edit"></i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="fa fa-times"></i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																	<input id="checkbox33" type="checkbox">
																	<label for="checkbox33"></label>
																</div>
														</td>
														<td>Devolucion de Instrumentos de la practica numero Nº 9</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
																<i class="fa fa-edit"></i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="fa fa-times"></i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																	<input id="checkbox35" type="checkbox" checked>
																	<label for="checkbox35"></label>
																</div>
														</td>
														<td>Devolucion de Instrumentos de la practica numero Nº 8</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
																<i class="fa fa-edit"></i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="fa fa-times"></i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																	<input id="checkbox38" type="checkbox">
																	<label for="checkbox38"></label>
																</div>
														</td>
														<<td>Devolucion de Instrumentos de la practica numero Nº 7</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
																<i class="fa fa-edit"></i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="fa fa-times"></i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																	<input id="checkbox40" type="checkbox" checked>
																	<label for="checkbox40"></label>
																</div>
														</td>
														<td>Devolucion de Instrumentos de la practica numero Nº6</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
																<i class="fa fa-edit"></i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="fa fa-times"></i>
															</button>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="footer">
										<hr>
										<div class="stats">
											<i class="fa fa-history"></i> Modificado hace 2 dias
										</div>
									</div>

								</div>
							</div>
						</div>
				</div>
            </div>
        </div>
        
    </div>
@endsection
@section('scripts')
	<script src="{{asset('assets/js/light-bootstrap-dashboard.js?v=1.4.1')}}"></script>
	<script src="{{asset('assets/js/demo.js')}}"></script>
	<script src="{{asset('assets/js/chartist.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/jquery.bootstrap.wizard.min.js')}}"></script>
	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initDashboardPageCharts();
        	demo.initVectorMap();

        	$.notify({
            	icon: 'pe-7s-bell',
            	message: "<b>Light Bootstrap Dashboard PRO</b> - forget about boring dashboards."

            },{
                type: 'warning',
                timer: 4000
            });

    	});
	</script>
@endsection