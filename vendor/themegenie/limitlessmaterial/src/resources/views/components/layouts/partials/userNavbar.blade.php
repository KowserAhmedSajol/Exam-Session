<div class="navbar navbar-expand-md navbar-dark bg-green-900 navbar-static">
	<div class="navbar-brand">
		<a href="back-index.html" class="d-inline-block">
			<h6 class="text-light"> <span style="color:red;">Med</span>Web</h6>
		</a>
	</div>

	<div class="d-md-none">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
			<i class="icon-tree5"></i>
		</button>
		<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
			<i class="icon-paragraph-justify3"></i>
		</button>
	</div>

	<div class="collapse navbar-collapse" id="navbar-mobile">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
					<i class="icon-paragraph-justify3"></i>
				</a>
			</li>
		</ul>

		<span class="navbar-text ml-md-3">
			<i class="far fa-grin-wink mr-3 fa-2x"></i>
			Hello, {{auth()->user()->name}}..!
		</span>

		<ul class="navbar-nav ml-md-auto">

			<li class="nav-item">
			
					
				@if (Route::has('login'))
				
					@auth
						<form method="POST" action="{{ route('logout') }}">
                            @csrf

							<button type="submit" href="{{ route('logout') }}"  style="color:white; background:none; border:none"><i class="icon-switch2"></i> Log Out</button>
                            
                        </form>
						
					@endauth
				
			@endif
				
			</li>
		</ul>
	</div>
</div>