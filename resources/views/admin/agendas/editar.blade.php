@extends('layouts.app')
{{$registro}}
<?php //die(); ?> 
@section('content')
<div class="container">
	<h2 class="center">Editar Prontuario</h2>
	@include('admin._caminho')
	<div class="row">
		<form action="{{ route('agendas.update', $registro->id) }}" method="post">

		{{csrf_field()}}
		{{ method_field('PUT') }}
		@include('admin.agendas._form')

		<button class="btn blue">Atualizar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection