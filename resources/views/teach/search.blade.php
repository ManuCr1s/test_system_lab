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
                                        <legend>Buscar Elementos</legend>
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
                                <div class="col-md-6">
                                    <div class="header">
                                        <legend>Material</legend>
                                    </div>
                                    <fieldset>
                                                                      
                                            <label class="col-sm-4">Tipo de Material</label>
                                            <div class="col-sm-6">
                                                <select name="cities" class="selectpicker" data-title="Single Select" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                    <option value="id">Vidrio</option>
                                                    <option value="ms">Porcelana</option>
                                                    <option value="ca">Madera</option>
                                                </select>
                                            </div>
                                       
                                    </fieldset>
                                    <br>
                                    <fieldset>
                                                                      
                                            <label class="col-sm-4">Codigo de Material</label>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="Codigo de Material" class="form-control">
                                            </div>
                                        
                                    </fieldset>
                                    <br>
                                    <fieldset>
                                                                      
                                        <label class="col-sm-4">Ubicacion</label>
                                        <div class="col-sm-6">
                                            <select name="cities" class="selectpicker" data-title="Single Select" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                <option value="id">Central</option>
                                                <option value="ms">Laboratorio</option>
                                                <option value="ca">Loca</option>
                                            </select>
                                        </div>
                                    
                                    </fieldset>
                                    <br>
                                    <fieldset>
                                            <div class="form-group">
                                            
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-fill btn-info">BUSCAR</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <div class="header">
                                        <legend>Reactivo</legend>
                                    </div>
                                    <fieldset>                           
                                        <label class="col-sm-4">Tipo de Reactivo</label>
                                        <div class="col-sm-6">
                                            <select name="cities" class="selectpicker" data-title="Single Select" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                <option value="id">Vidrio</option>
                                                <option value="ms">Porcelana</option>
                                                <option value="ca">Madera</option>
                                            </select>
                                        </div>
                                    
                                        </fieldset>
                                        <br>
                                        <fieldset>
                                                                        
                                                <label class="col-sm-4">Codigo de Reactivo</label>
                                                <div class="col-sm-6">
                                                    <input type="text" placeholder="Codigo de Material" class="form-control">
                                                </div>
                                            
                                        </fieldset>
                                        <br>
                                        <fieldset>
                                                
                                            <label class="col-sm-4">Ubicacion</label>
                                            <div class="col-sm-6">
                                                <select name="cities" class="selectpicker" data-title="Single Select" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                                                    <option value="id">Central</option>
                                                    <option value="ms">Laboratorio</option>
                                                    <option value="ca">Loca</option>
                                                </select>
                                            </div>
                                            
                                        </fieldset>
                                        <br>
                                        <fieldset>
                                                <div class="form-group">
                                                
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-fill btn-info">BUSCAR</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <br>
                                        <br>
                                </div>
                               
                            </div>

                            <div class="row bg-info">
                                <div class="col-md-12">
                                    <div class="card card-plain">
                                        <div class="header">
                                            <legend>Resumen de Existencias</legend>
                                            <p class="category">Material y Reactivo</p>
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
                                                        <td>Central</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MT00012</td>
                                                        <td>MATERIAL</td>
                                                        <td>30</td>
                                                        <td>UND</td>
                                                        <td>Casco de Seguridad</td>
                                                        <td>Local</td>
                                                    </tr>
                                                    <tr>
                                                        <td>RC0001</td>
                                                        <td>REACTIVO</td>
                                                        <td>-</td>
                                                        <td>Ml</td>
                                                        <td>Plomo</td>
                                                        <td>Central</td>
                                                    </tr>
                                                    <<tr>
                                                        <td>RC0003</td>
                                                        <td>REACTIVO</td>
                                                        <td>-</td>
                                                        <td>Lt</td>
                                                        <td>Alcohol</td>
                                                        <td>Central</td>
                                                    </tr>
                                                    <<tr>
                                                        <td>RC004</td>
                                                        <td>REACTIVO</td>
                                                        <td>-</td>
                                                        <td>Lt</td>
                                                        <td>Oro</td>
                                                        <td>Laboratorio</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MT0011</td>
                                                        <td>MATERIAL</td>
                                                        <td>0</td>
                                                        <td>UND</td>
                                                        <td>Porta Vasos</td>
                                                        <td>Central</td>
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