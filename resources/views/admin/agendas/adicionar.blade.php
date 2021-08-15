@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Adicionar Prontuario</h2>

	@include('admin._caminho')
	
	<div class="row">
		<form action="{{ route('agendas.store') }}" method="post">

		{{csrf_field()}}
		@include('admin.agendas._form')

		<button class="btn green">Adicionar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection