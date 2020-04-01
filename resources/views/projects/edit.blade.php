@extends('layout')
@section('title', $project->title)

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			<form class="bg-white shadow rounded py-3 px-4"
				method="POST" 
				action="{{ route('project.update', $project) }}">

				<div class="form-group">
					<h1 class="display-4">
						Editar proyectos
					</h1>
					<hr>
					<label for="title">Titulo</label>
					<input class="form-control bg-light shadow-sm @error('title') is-invalid @else border-0 @enderror"
					id="title" 
					name="title" 
					value="{{ old('title', $project->title) }}"
					>
					@error('title')
						<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="description">Descripcion</label>
					<input class="form-control bg-light shadow-sm @error('description') is-invalid @else border-0 @enderror"
					id="description"  
					name="description" 
					value="{{ old('description', $project->description) }}"
					>
					@error('description')
						<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>	
				<button class="btn btn-primary btn-lg btn-block">Actualizar</button>
				<a class="btn btn-link btn-block" 
					href="{{ route('projects.index') }}">
					Cancelar
				</a>
				@csrf
			</form>
		</div>
	</div>
</div>
@endsection
