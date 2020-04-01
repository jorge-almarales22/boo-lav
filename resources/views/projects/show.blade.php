@extends('layout')
@section('title',$project->title)
@section('content')
<div class="container">
	<div class="bg-white px-5 py-5 shadow rounded">
		<h1 class="display-5">{{ $project->title }}</h1>
		<p class="text-secondary">
			{{ $project->description }}
		</p>
		<p class="text-black-50">
			{{ $project->created_at->diffForHumans() }}
		</p>
		<div class="d-flex justify-content-between align-items-center">
			<a href="{{ route('projects.index') }}">
			Regresar
			</a>
			@auth
				<div class="btn-group btn-group-sm">
					<a class="btn btn-primary" 
					href="{{ route('project.edit', $project->id) }}"
					>Editar proyecto
					</a>
					<a class="btn btn-danger" 
					href="#" 
					onclick="event.preventDefault();
		         	document.getElementById('delete-project').submit();"
		         	>Eliminar</a>
				</div>
				<form class="d-none" 
					id="delete-project" 
					method="GET" 
					action="{{ route('project.destroy', $project) }}">
					@csrf @method('GET')
				</form>
			@endauth
		</div>
    </div>	
</div>
@endsection