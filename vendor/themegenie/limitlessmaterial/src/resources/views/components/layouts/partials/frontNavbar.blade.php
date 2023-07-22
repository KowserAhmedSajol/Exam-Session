    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><span class="text-danger">Med</span>Web</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto font-weight-bold">
					
					
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link" href="#service">Service</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link" href="#news">News</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link" href="#appointemnt">Appointemnt</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
					</li>


					
		
                    <!-- <li class="nav-item dropdown">
						<a class="nav-link " href="#service" role="button" data-bs-toggle="dropdown"
							aria-expanded="false">
							Services
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">Medical Test</a></li>
							<li><a class="dropdown-item" href="#">Test Report</a></li>
							<li><a class="dropdown-item" href="#">Ambulence</a></li>
						</ul>
					</li> -->								
				</ul>
				<div class="d-flex ms-auto">
				@if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/user') }}" class="btn btn-outline-danger">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-danger">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-danger">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
				
				</div>
			</div>
		</div>
	</nav>

    <!-- navbar end -->