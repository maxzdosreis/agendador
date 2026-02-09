<?php 
$idContato = $_GET["idContato"];

$sql = "SELECT * FROM tbcontatos WHERE idContato = {$idContato}";

$result = mysqli_query($conexao, $sql) or die("Erro ao recuperar os dados do registro. " . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($result);

?>

<header>
    <h3><i class="bi bi-pencil"></i> Editar Contato</h3>
</header>

<div>
    <form action="paginas/contatos/atualizar-contato.php" method="POST">
        <div class="mb-3 col-3">
            <label class="form-label" for="idContato">ID</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-key-fill"></i>
                </span>
                <input class="form-control" type="text" name="idContato" placeholder="ID..." value="<?=$dados['idContato']?>" readonly>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nomeContato">Nome</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-person-fill"></i>
                </span>
                <input class="form-control" type="text" name="nomeContato" placeholder="Nome completo..." value="<?=$dados['nomeContato']?>">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="emailContato">E-mail</label>
            <div class="input-group">
                <span class="input-group-text">@</span>
                <input class="form-control" type="email" name="emailContato" placeholder="E-mail..." value="<?=$dados['emailContato']?>">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="telefoneContato">Telefone</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-telephone-fill"></i>
                </span>
                <input class="form-control" type="text" name="telefoneContato" placeholder="Telefone..." value="<?=$dados['telefoneContato']?>">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="enderecoContato">Endereço</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-mailbox2"></i>
                </span>
                <input  class="form-control" type="text" name="enderecoContato" placeholder="Endereço..." value="<?=$dados['enderecoContato']?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="mb-3 col-3">
                <label class="form-label" for="sexoContato">Sexo</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-gender-ambiguous"></i>
                    </span>
                    <select class="form-select" name="sexoContato" id="sexoContato">
                        <option <?php echo ($dados['sexoContato']=='')? 'selected':'' ?> value="">Selecione o sexo do contato</option>
                        <option <?php echo ($dados['sexoContato']=='M')? 'selected':'' ?> value="M">Masculino</option>
                        <option <?php echo ($dados['sexoContato']=='F')? 'selected':'' ?> value="F">Feminino</option>
                        <option <?php echo ($dados['sexoContato']=='O')? 'selected':'' ?> value="O">Outros</option>
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
            <input class="btn btn-warning" type="submit" value="Atualizar" name="btnAtualizar">
        </div>
    </form>
</div>