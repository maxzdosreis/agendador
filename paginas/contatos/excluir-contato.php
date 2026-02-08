<header>
    <h3>Excluir Contato</h3>
</header>

<?php 
$idContato = mysqli_real_escape_string($conexao, $_GET["idContato"]);
$sql = "DELETE FROM tbcontatos WHERE idContato = {$idContato}";
if(mysqli_query($conexao, $sql)) {
        header('Location: ../../index.php?menuop=contatos');
        exit();
    } else {
        echo "Erro ao registrar no banco de dados" . mysqli_error($conexao);
    }
?>