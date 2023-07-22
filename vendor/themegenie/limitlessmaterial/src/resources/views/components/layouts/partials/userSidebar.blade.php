		<!-- Main sidebar -->
		<div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				<span class="font-weight-semibold">Navigation</span>
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user-material">
					<div class="sidebar-user-material-body">
						<div style="background-image: url('{{asset('vendor/limitlessmaterial/global_assets/images/backgrounds/user_bg4.jpg')}}'); background-size: 100% 100%;" class="card-body text-center">
							<a href="{{route('profile.show')}}">
							@if(auth()->user()->profile_picture=='https://cdn-icons-png.flaticon.com/512/3135/3135715.png')
								<img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
							@else
							<img src="{{asset('uploads/images/profiles')}}/{{auth()->user()->profile_picture}}" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
							@endif
							</a>
							<h6 class="mb-0 text-white text-shadow-dark">{{auth()->user()->name}}</h6>
							<span class="font-size-sm text-white text-shadow-dark">User</span>
						</div>
													
						<div class="sidebar-user-material-footer">
							<a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle bg-dark" data-toggle="collapse"><span>My account</span></a>
						</div>
					</div>

					<div class="collapse" id="user-nav">
						<ul class="nav nav-sidebar">
							<li class="nav-item">
								<a href="{{route('profile.show')}}" class="nav-link">
									<i class="icon-user-plus"></i>
									<span>My profile</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('profile.edit')}}" class="nav-link">
									<i class="icon-cog5"></i>
									<span>Account settings</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('logout2')}}" class="nav-link">
									<i class="icon-switch2"></i>
									<span>Logout</span>
								</a>
							</li>
							
						</ul>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs text-center">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="/user" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						

						 <li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-lab"></i> <span>Medical Test</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="{{route('medicalTest_list_user')}}" class="nav-link">All Medical Test</a></li>
								<li class="nav-item"><a href="{{route('medical_appointment_show')}}" class="nav-link">My Appointment</a></li>
							</ul>
						</li>
						
				

						<li class="nav-item">
                        <a href="{{route('report_list_user')}}" class="nav-link">
                         <i class="icon-files-empty"></i>
                                <span>
								Test Report
                                </span>
                             </a>
                         </li>
						
						
						<li class="nav-item">
                        <a href="{{route('doctor_list_user')}}" class="nav-link">
                         <i class="icon-user-tie"></i>
                                <span>
                                    Doctor
                                </span>
                             </a>
                         </li>
						 <li class="nav-item">
                        <a href="{{route('appointment_show')}}" class="nav-link">
                         <i class="icon-calendar3"></i>
                                <span>
								   Appointemnt
                                </span>
                             </a>
                         </li>
						 {{-- ----------------------------------- --}}
						 {{-- This chunk of code is for test now --}}
						 {{-- ----------------------------------- --}}
						 <li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-truck"></i> <span>Pharmacy</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="{{route('user_pharmacy_list')}}" class="nav-link">All Medicines</a></li>
								<li class="nav-item"><a href="{{route('user_pharmacy_buy_list')}}" class="nav-link">history</a></li>
							</ul>
						</li>
						
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-truck"></i> <span>Ambulance</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="{{route('ambulance_add_user')}}" class="nav-link">Request for Ambulance</a></li>
								<li class="nav-item"><a href="{{route('ambulance_show_user')}}" class="nav-link">My Ambulance</a></li>
							</ul>
						</li>
						
						<li class="nav-item">
                        <a href="{{route('faq_list_show')}}" class="nav-link">
                         <i class="icon-question4"></i>
                                <span>
                                    FAQ's
                                </span>
                             </a>
                         </li>

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->