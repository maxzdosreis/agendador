<?php 
$idContato = $_GET["idContato"];

$sql = "SELECT * FROM tbcontatos WHERE idContato = {$idContato}";

$result = mysqli_query($conexao, $sql) or die("Erro ao recuperar os dados do registro. " . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($result);

?>

<header>
    <h3>Editar Contato</h3>
</header>

<div>
    <form action="paginas/contatos/atualizar-contato.php" method="POST">
        <div>
            <label for="idContato">Nome</label>
            <input type="text" name="idContato" placeholder="ID..." value="<?=$dados['idContato']?>">
        </div>
        <div>
            <label for="nomeContato">Nome</label>
            <input type="text" name="nomeContato" placeholder="Nome completo..." value="<?=$dados['nomeContato']?>">
        </div>
        <div>
            <label for="emailContato">E-mail</label>
            <input type="email" name="emailContato" placeholder="E-mail..." value="<?=$dados['emailContato']?>">
        </div>
        <div>
            <label for="telefoneContato">Telefone</label>
            <input type="text" name="telefoneContato" placeholder="Telefone..." value="<?=$dados['telefoneContato']?>">
        </div>
        <div>
            <label for="enderecoContato">Endereço</label>
            <input type="text" name="enderecoContato" placeholder="Endereço..." value="<?=$dados['enderecoContato']?>">
        </div>
        <div>
            <label for="sexoContato">Nome</label>
            <select name="sexoContato" required>
                <option value="M" <?=$dados['sexoContato'] == 'M' ? 'selected' : ''?>>Masculino</option>
                <option value="F" <?=$dados['sexoContato'] == 'F' ? 'selected' : ''?>>Feminino</option>
            </select>
        </div>
        <div>
            <label for="dataNascContato">Data de Nascimento</label>
            <input type="date" name="dataNascContato" placeholder="Data de Nascimento..."value="<?=$dados['dataNascContato']?>">
        </div>
        <div>
            <input type="submit" value="Atualizar" name="btnAtualizar">
        </div>
    </form>
</div>