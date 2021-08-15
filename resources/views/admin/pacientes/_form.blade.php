<div class="input-field">
	<input type="text" name="nome" class="validade" value="{{ isset($registro->nome) ? $registro->nome : '' }}">
	<label>Nome do Paciente</label>
</div>

<div class="input-field">
	<input type="text" name="cpf" class="validade" value="{{ isset($registro->cpf) ? $registro->cpf : '' }}">
	<label>CPF</label>
</div>


