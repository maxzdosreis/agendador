<header>
    <h3><i class="bi bi-person-square"></i> Cadastro de Contato</h3>
</header>
<div>
    <form action="paginas/contatos/inserir-contato.php" method="POST">
        <div class="mb-3">
            <label class="form-label" for="nomeContato">Nome</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input class="form-control" type="text" name="nomeContato" placeholder="Nome completo...">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="emailContato">E-mail</label>
            <div class="input-group">
                <span class="input-group-text">@</span>
                <input class="form-control" type="email" name="emailContato" placeholder="E-mail...">
            </div>         
        </div>
        <div class="mb-3">
            <label class="form-label" for="telefoneContato">Telefone</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input class="form-control" type="text" name="telefoneContato" placeholder="Telefone...">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="enderecoContato">Endereço</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-mailbox2"></i></span>
                <input  class="form-control" type="text" name="enderecoContato" placeholder="Endereço...">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-3">
                <label class="form-label" for="sexoContato">Sexo</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                    <select class="form-select" name="sexoContato" id="sexoContato" required>
                        <option selected value="">Selecione o sexo do contato</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 col-3">
                <label class="form-label" for="dataNascContato">Data de Nascimento</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                    <input class="form-control" type="date" name="dataNascContato" placeholder="Data de Nascimento...">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Adicionar" name="btnAdicionar">
        </div>
    </form>
</div>