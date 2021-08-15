
<input type="hidden" name="user_id" class="validade" value="{{$usuario->id}}">


<div class="input-field">
	
	<label>Paciente</label>	
</div>
<br>

	<select name="paciente_id">
		<option value="">Selecione Paciente</option>
		@foreach($pacientes as $paciente)
		<option value="{{$paciente->id}}" 
		@if (isset($registro->paciente_id))
			@if ($paciente->id == $registro->paciente_id)
				selected="selected"
			@endif
		@endif
		>{{$paciente->nome}}</option>
		@endforeach
	</select>

<div class="input-field">
	<input type="text" name="nome" class="validade" value="{{ isset($registro->nome) ? $registro->nome : '' }}">
	<label>Titulo do Atendimento</label>
</div>

<div class="input-field">
	<input type="text" name="descricao" class="validade" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}">
	<label>Descrição do atendimento</label>	
</div>


