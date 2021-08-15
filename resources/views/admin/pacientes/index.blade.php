@extends('layouts.app')

@section('content')
	<div class="container">
		<h2 class="center">Lista de Pacientes</h2>

		@include('admin._caminho')
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Nome</th>
						<th>CPF</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				@foreach($registros as $registro)
					<tr>
						<td>{{ $registro->id }}</td>
						<td>{{ $registro->nome }}</td>
						<td>{{ $registro->cpf }}</td>

						<td>


							<form action="{{route('pacientes.destroy',$registro->id)}}" method="post">
								{{ method_field('DELETE') }}
								{{ csrf_field() }}
								<a title="Editar" class="btn orange" href="{{ route('pacientes.edit',$registro->id) }}"><i class="material-icons">mode_edit</i></a>
							
								<button title="Deletar" class="btn red"><i class="material-icons">delete</i></button>	
							</form>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>

		</div>
		<div class="row">
			
			<a class="btn blue" href="{{route('pacientes.create')}}">Adicionar</a>
			
		</div>
	</div>

@endsection
