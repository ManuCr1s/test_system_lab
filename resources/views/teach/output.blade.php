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
								<div class="col-md-6">

									<div class="card">
										<div class="header"><b>Devolucion de Existencias</b></div>
										<div class="content">
											<form method="#" action="#">
												<div class="form-group col-md-6">
													<label>Tipo de Existencia</label>
													<input type="text" placeholder="Material o Reactivo" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>Cantidad</label>
													<input type="text" placeholder="Cantidad" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>Unidad de Medida</label>
													<input type="text" placeholder="Unidad de Medida" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>fecha</label>
													<input type="text" placeholder="Fecha" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>Personal</label>
													<input type="text" placeholder="Personal" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>Lugar</label>
													<input type="text" placeholder="Lugar" class="form-control">
												</div>
												<div class=''>
													<button type="submit" class="btn btn-fill btn-info">Agregar</button>
													
												<div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Resumen</h4>
                                <p class="category">Material o Reactivo</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Nombre</th>
                                    	<th>Tipo</th>
                                    	<th>Cantidad</th>
                                    	<th>Unidad de Medida</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Dakota Rice</td>
                                        	<td>$36,738</td>
                                        	<td>Niger</td>
                                        	<td>Oud-Turnhout</td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Minerva Hooper</td>
                                        	<td>$23,789</td>
                                        	<td>Curaçao</td>
                                        	<td>Sinaai-Waas</td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Sage Rodriguez</td>
                                        	<td>$56,142</td>
                                        	<td>Netherlands</td>
                                        	<td>Baileux</td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>Philip Chaney</td>
                                        	<td>$38,735</td>
                                        	<td>Korea, South</td>
                                        	<td>Overland Park</td>
                                        </tr>
                                        <tr>
                                        	<td>5</td>
                                        	<td>Doris Greene</td>
                                        	<td>$63,542</td>
                                        	<td>Malawi</td>
                                        	<td>Feldkirchen in Kärnten</td>
                                        </tr>
                                        <tr>
                                        	<td>6</td>
                                        	<td>Mason Porter</td>
                                        	<td>$78,615</td>
                                        	<td>Chile</td>
                                        	<td>Gloucester</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
						<button type="submit" class="btn btn-fill btn-info">Enviar</button>
												</div>
											</form>

										</div>
									</div> <!-- end card -->

								</div> <!--  end col-md-6  -->

								<div class="col-md-6">

									<div class="card">
										<div class="header"><b>Solicitud de Practicas</b></div>
										<div class="content">
											<form class="form-horizontal">
												<div class="form-group col-md-12">
													<label>Id  del pedido</label>
													<div>
														<input type="text" placeholder="id" class="form-control">
													</div>
												</div>
												<div class="form-group">
													
													<div class="col-md-12">
														<button type="submit" class="btn btn-fill btn-info">Buscar</button>
													</div>
												</div>
											</form>
										</div>
									</div> <!-- end card -->

								</div> <!--  end col-md-6  -->
							</div>
					   </div>
            </div>
        </div>
        
    </div>
@endsection
@section('scripts')
	<script src="{{asset('assets/js/light-bootstrap-dashboard.js?v=1.4.1')}}"></script>
	<script src="{{asset('assets/js/demo.js')}}"></script>
@endsection