<h1>Cadastrar Médico</h1>
<form action="?page=salvar-medico" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome_medico" class="form-control">
	</div>
	<div class="mb-3">
		<label>CRM</label>
		<input type="text" name="crm_medico" class="form-control">
	</div>
	<div class="mb-3">
		<label>Especialidade</label>
		<input type="text" name="especialidade_medico" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>