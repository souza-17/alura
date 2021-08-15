@extends('layouts.app')

@section('content')
	<div class="container">
		<h2 class="center">Lista de Prontuarios</h2>

		@include('admin._caminho')
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Medico</th>
						<th>Paciente</th>
						<th>Titulo Atendimento</th>
						<th>Descrição do Atendimento</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				@foreach($agendas as $registro)
					<tr>
						<td>{{ $registro->id }}</td>
						<td>{{ $registro->usuario }}</td>
						<td>{{ $registro->paciente }}</td>
						<td>{{ $registro->nome }}</td>
						<td>{{ $registro->descricao }}</td>
						
						<td>

							<form action="{{route('agendas.destroy', $registro->id)}}" method="post">
								
								<a title="Editar" class="btn orange" href="{{ route('agendas.edit', $registro->id) }}"><i class="material-icons">mode_edit</i></a>
							
								{{ method_field('DELETE') }}
								{{ csrf_field() }}
								<button title="Deletar" class="btn red"><i class="material-icons">delete</i></button>
								
							</form>


						</td>
					</tr>
				@endforeach
				</tbody>
			</table>

		</div>
		<div class="row">
			
			<a class="btn blue" href="{{route('agendas.create')}}">Adicionar</a>
			
		</div>
	</div>

@endsection
