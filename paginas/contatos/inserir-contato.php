<header>
    <h3>Inserir Contato</h3>
</header>

<?php  
    include_once('../../db/conexao.php');

    $nomeContato = mysqli_real_escape_string($conexao, $_POST["nomeContato"]);
    $emailContato = mysqli_real_escape_string($conexao, $_POST["emailContato"]);
    $telefoneContato = mysqli_real_escape_string($conexao, $_POST["telefoneContato"]);
    $sexoContato = mysqli_real_escape_string($conexao, $_POST["sexoContato"]);
    $dataNascContato = mysqli_real_escape_string($conexao, $_POST["dataNascContato"]);

    $sqlVerifica = "SELECT * FROM tbcontatos WHERE emailContato = '{$emailContato}' OR telefoneContato = '{$telefoneContato}'";
    $resultVerifica = mysqli_query($conexao, $sqlVerifica);

    if(mysqli_num_rows($resultVerifica) > 0){
        echo "<script>
               alert('Erro: Já existe um contato cadastrado com este e-mail ou telefone!');
               window.history.back();
              </script>";
        exit();
    }

    $sql = "INSERT INTO tbcontatos (
        nomeContato, 
        emailContato, 
        telefoneContato, 
        sexoContato, 
        dataNascContato)
        VALUES(
            '{$nomeContato}',
            '{$emailContato}',
            '{$telefoneContato}',
            '{$sexoContato}',
            '{$dataNascContato}'
        )
        ";

    if(mysqli_query($conexao, $sql)) {
        header('Location: ../../index.php?menuop=contatos');
        exit();
    } else {
        echo "Erro ao registrar no banco de dados" . mysqli_error($conexao);
    }
?>