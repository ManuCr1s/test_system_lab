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
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="header">
                                        <legend>Solicitar Elementos</legend>
                                    </div>
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Custom Checkboxes &amp; radios</label>
                                            <div class="col-sm-4 col-sm-offset-1">
												<div class="checkbox">
					  							  	<input id="checkbox1" type="checkbox">
					  							  	<label for="checkbox1">
					  								  	Material
					  							  	</label>
					  						  	</div>
						  						<div class="checkbox">
						  							<input id="checkbox2" type="checkbox" checked="">
						  							<label for="checkbox2">
						  								Reactivo
						  							</label>
						  					    </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="header">
                                        <legend>Material</legend>
                                    </div>
                                </div>                               
                            </div>
							<div class="row">
								<div class="col-md-12">
									<fieldset>
										<div class="form-group col-md-4">
												<label class="control-label">Tipo de Material</label>
												<input type="text" placeholder="Tipo" class="form-control">
										</div>     
										<div class="form-group col-md-4">
												<label class="control-label">Cantidad</label>
												<input type="text" placeholder="Cantidad" class="form-control">
										</div> 
										<div class="form-group col-md-4">
												<label class="control-label">Unidad de Medida</label>
												<input type="text" placeholder="Unidad" class="form-control">
										</div>                     
										<div class="form-group col-md-4">
												<label class="control-label">Lugar</label>
												<input type="text" placeholder="lugar" class="form-control">
										</div> 
										<div class="form-group col-md-4">
												<label class="control-label">Fecha</label>
												<input type="text" placeholder="fecha" class="form-control">
										</div> 
										<div class="form-group col-md-4">
												<label class="control-label">Tipo</label>
												<input type="text" placeholder="Tipo" class="form-control">
										</div> 
									</fieldset>
								</div>
							</div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-plain">
                                        <div class="header">
                                            <legend>Resumen de Solicitud</legend>
                                        </div>
                                        <div class="content table-responsive table-full-width">
                                            <table class="table table-hover">
                                                <thead>
                                                    <th>ID</th>
                                                    <th>Tipo</th>
                                                    <th>Cantidad</th>
                                                    <th>Und</th>
                                                    <th>Nombre</th>
                                                    <th>Lugar</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>MT0001</td>
                                                        <td>MATERIAL</td>
                                                        <td>3</td>
                                                        <td>UND</td>
                                                        <td>Vaso Comunicante</td>
                                                        <td>Sede la Merced</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MT00012</td>
                                                        <td>MATERIAL</td>
                                                        <td>30</td>
                                                        <td>UND</td>
                                                        <td>Casco de Seguridad</td>
														<td>Sede la Merced</td>
                                                    </tr>
                                                    <tr>
                                                        <td>RC0001</td>
                                                        <td>REACTIVO</td>
                                                        <td>200</td>
                                                        <td>Ml</td>
                                                        <td>Plomo</td>
                                                        <td>Sede la Merced</td>
                                                    </tr>
                                                    <<tr>
                                                        <td>RC0003</td>
                                                        <td>REACTIVO</td>
                                                        <td>200</td>
                                                        <td>Lt</td>
                                                        <td>Alcohol</td>
                                                        <td>Sede la Merced</td>
                                                    </tr>
                                                    <<tr>
                                                        <td>RC004</td>
                                                        <td>REACTIVO</td>
                                                        <td>100</td>
                                                        <td>Lt</td>
                                                        <td>Oro</td>
														<td>Sede la Merced</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MT0011</td>
                                                        <td>MATERIAL</td>
                                                        <td>10</td>
                                                        <td>UND</td>
                                                        <td>Porta Vasos</td>
                                                        <td>Sede la Merced</td>
                                                    </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <!-- end card -->
                </div>
            </div>
        </div>
        
    </div>
@endsection
@section('scripts')
	<script src="{{asset('assets/js/light-bootstrap-dashboard.js?v=1.4.1')}}"></script>
	<script src="{{asset('assets/js/demo.js')}}"></script>
@endsection