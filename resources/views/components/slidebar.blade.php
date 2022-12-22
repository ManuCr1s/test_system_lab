<div class="sidebar" data-color="orange" data-image="../assets/img/full-screen-image-3.jpg">
        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                SL
            </a>

			<a href="http://www.creative-tim.com" class="simple-text logo-normal">
				@yield('rol')
			</a>
        </div>

    	<div class="sidebar-wrapper">
            <div class="user">
				<div class="info">
					<div class="photo">
	                    <img src="../assets/img/default-avatar.png" />
	                </div>

					<a data-toggle="collapse" href="#collapseExample" class="collapsed">
						<span>
							Pit Alania 
	                        <b class="caret"></b>
						</span>
                    </a>

					<div class="collapse" id="collapseExample">
						<ul class="nav">
							<li>
								<a href="#pablo">
									<span class="sidebar-mini">MP</span>
									<span class="sidebar-normal">Mi Perfil</span>
								</a>
							</li>

							<li>
								<a href="#pablo">
									<span class="sidebar-mini">EP</span>
									<span class="sidebar-normal">Editar Perfil</span>
								</a>
							</li>

							<li>
								<a href="#pablo">
									<span class="sidebar-mini">A</span>
									<span class="sidebar-normal">Ajustes</span>
								</a>
							</li>
						</ul>
                    </div>
				</div>
            </div>
			@yield('list')
    	</div>
    </div>