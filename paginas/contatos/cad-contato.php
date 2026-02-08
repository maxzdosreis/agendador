<header>
    <h3>Cadastro de Contato</h3>
</header>
<div>
    <form action="paginas/contatos/inserir-contato.php" method="POST">
        <div>
            <label for="nomeContato">Nome</label>
            <input type="text" name="nomeContato" placeholder="Nome completo...">
        </div>
        <div>
            <label for="emailContato">E-mail</label>
            <input type="email" name="emailContato" placeholder="E-mail...">
        </div>
        <div>
            <label for="telefoneContato">Telefone</label>
            <input type="text" name="telefoneContato" placeholder="Telefone...">
        </div>
        <div>
            <label for="sexoContato">Nome</label>
            <select name="sexoContato" required>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select>
        </div>
        <div>
            <label for="dataNascContato">Data de Nascimento</label>
            <input type="date" name="dataNascContato" placeholder="Data de Nascimento...">
        </div>
        <div>
            <input type="submit" value="Adicionar" name="btnAdicionar">
        </div>
    </form>
</div>