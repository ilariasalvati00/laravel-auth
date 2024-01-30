@vite(['resources/js/app.js'])
 </head>

 <body>
 	<div id="app">

 		<div class="container-fluid vh-100">
 			<div class="row h-100">
 				<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark navbar-dark sidebar collapse">
 					<div class="position-sticky pt-3">
 						<ul class="nav flex-column">

 							<li class="nav-item">
 								<a class="nav-link text-white" href="/">
 									<i class="fa-solid fa-home-alt fa-lg fa-fw"></i> Home
 								</a>
 							</li>

 							<li class="nav-item">
 								<a class="nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-secondary' : '' }}" href="{{route('admin.dashboard')}}">
 									<i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Dashboard
 								</a>
 							</li>

 							<li class="nav-item">
 								<a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
 									<i class="fa-solid fa-sign-out-alt fa-lg fa-fw"></i> {{ __('Logout') }}
 								</a>
 								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
 									@csrf
 								</form>
 							</li>

 						</ul>

 					</div>
 				</nav>

 				<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
 					@yield('content')
 				</main>
 			</div>
 		</div>

 	</div>
 </body>

 </html>