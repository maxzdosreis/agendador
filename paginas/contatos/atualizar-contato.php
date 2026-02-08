<header>
    <h3>Atualizar Contato</h3>
</header>

<?php  
    include_once('../../db/conexao.php');

    $idContato = mysqli_real_escape_string($conexao, $_POST['idContato']);
    $nomeContato = mysqli_real_escape_string($conexao, $_POST["nomeContato"]);
    $emailContato = mysqli_real_escape_string($conexao, $_POST["emailContato"]);
    $telefoneContato = mysqli_real_escape_string($conexao, $_POST["telefoneContato"]);
    $enderecoContato = mysqli_real_escape_string($conexao, $_POST["enderecoContato"]);
    $sexoContato = mysqli_real_escape_string($conexao, $_POST["sexoContato"]);
    $dataNascContato = mysqli_real_escape_string($conexao, $_POST["dataNascContato"]);

    $sql = "
           UPDATE tbcontatos SET
           nomeContato = '{$nomeContato}',
           emailContato = '{$emailContato}',
           telefoneContato = '{$telefoneContato}',
           enderecoContato = '{$enderecoContato}',
           sexoContato = '{$sexoContato}',
           dataNascContato = '{$dataNascContato}'
           WHERE idContato = '{$idContato}'
        ";

    if(mysqli_query($conexao, $sql)) {
        header('Location: ../../index.php?menuop=contatos');
        exit();
    } else {
        echo "Erro ao registrar no banco de dados" . mysqli_error($conexao);
    }
?>