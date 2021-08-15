@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Adicionar Pacientes</h2>

	@include('admin._caminho')
	
	<div class="row">
		<form action="{{ route('pacientes.store') }}" method="post">

		{{csrf_field()}}
		@include('admin.pacientes._form')

		<button class="btn green">Adicionar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection