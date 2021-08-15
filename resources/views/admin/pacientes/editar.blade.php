@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Editar Pacientes</h2>
	@include('admin._caminho')
	<div class="row">
		<form action="{{ route('pacientes.update', $registro->id) }}" method="post">

		{{csrf_field()}}
		{{ method_field('PUT') }}
		@include('admin.pacientes._form')

		<button class="btn blue">Atualizar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection