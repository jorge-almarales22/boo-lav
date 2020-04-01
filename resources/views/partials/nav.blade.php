<nav  class="navbar navbar-light navbar-expand-sm bg-white shadow-sm">
	<div class="container"> 
		<a class="navbar-brand" href="{{ route('home') }}">
			{{ config('app.name') }}
		</a>
		<button class="navbar-toggler" type="button" 
			data-toggle="collapse" 
			data-target="#navbarSupportedContent" 
			aria-controls="navbarSupportedContent" 
			aria-expanded="false" 
			aria-label="{{ __('Toggle navigation') }}">
		    <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav nav-pills">
				<li class="nav-item">
					<a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ request()->routeIs('projects.index') ? 'active' : '' }}" href="{{ route('projects.index') }}">Portafolios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contáctame</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ request()->routeIs('abaout') ? 'active' : '' }}" href="{{ route('abaout') }}">Quienes Somos</a>
				</li>
				@guest
				<li class="nav-item">
					<a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
				</li>
				@else
				<li class="nav-item">
					<a class="nav-link" 
					href="#" 
					onclick="event.preventDefault();
		         	document.getElementById('logout-form').submit();"
		         	>Cerrar Sesión</a>
		        </li>
				@endguest
			</ul>
	    </div>
	</div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>