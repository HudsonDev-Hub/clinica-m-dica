<form action="?page=salvar-fila" method="POST">
    <!-- Corrigido: Ação agora é 'cadastrar-fila' -->
    <input type="hidden" name="acao" value="cadastrar-fila">  <!-- Ação correta -->

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_fila" class="form-control">
    </div>
    <div class="mb-3">
        <label>Fone</label>
        <input type="text" name="fone_fila" class="form-control">
    </div>
    <div class="mb-1">
        <label>Especialidade</label>
        <input type="text" name="especialidade_fila" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data</label>
        <input type="date" name="data_fila" class="form-control">
    </div>
    <div class="mb-3">
        <label>Horário</label>
        <input type="time" name="horario_fila" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>
