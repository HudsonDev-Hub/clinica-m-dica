<h1>Cadastrar Paciente</h1>
<form action="?page=salvar-paciente" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>NomEe</label>
		<input type="text" name="nome_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF</label>
		<input type="text" name="cpf_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>E-mail</label>
		<input type="mail" name="email_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Fone</label>
		<input type="text" name="fone_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<input type="text" name="endereco_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="date" name="dt_nasc_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Sexo</label>
		<label><input type="radio" name="sexo_paciente" value="m"> Masculino</label>
		<label><input type="radio" name="sexo_paciente" value="f"> Feminino</label>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>