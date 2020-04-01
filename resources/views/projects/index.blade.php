@extends('layout')
@section('title','Portafolios')
@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4 mb-0">Proyectos</h1>
		@auth
		<a class="btn btn-primary" 
		href="{{ route('projects.create') }}">crear proyecto</a>
		@endauth
	</div>
	
	<p class="lead text-secondary">Proyectos realizados</p>
	
	<ul class="list-group">
		@forelse($projects as $projectsItems)
		<li class="list-group-item border-0 mb-3 shadow-sm">
			<a class="text-secondary d-flex justify-content-between align-items-center" 
			href="{{ route('projects.show', $projectsItems) }}"
			>
			<span class="font-weight-bold">
				{{ $projectsItems->title }}
			</span>
			<span class="text-balck-50">
				{{ $projectsItems->created_at->format('d/m/y') }}
			</span>
			</a>
		</li>
		@empty
		<li class="list-group-item border-0 mb-3 shadow-sm">no hay proyectos para mostrar</li>
		@endforelse	
        <div class="mx-auto">
            {{ $projects->links() }}
        </div>		  		
	</ul>
</div>
@endsection