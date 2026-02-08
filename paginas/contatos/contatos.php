<?php 
include_once('db/conexao.php');
?>
<header>
    <h3>Contatos</h3>
</header>
<div>
    <a href="index.php?menuop=cad-contato">Novo Contato</a>
</div>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Sexo</th>
            <th>Data de Nasc.</th>
            <th>Edição</th>
        </tr>
    </thead>
    <?php 
    $sql = "
            SELECT
                idContato,
                upper(nomeContato) as nomeContato,
                lower(emailContato) as emailContato,
                telefoneContato,
                upper(enderecoContato) as enderecoContato,
                CASE
                    WHEN sexoContato='F' THEN 'FEMININO'
                    WHEN sexoContato='M' THEN 'MASCULINO'
                ELSE
                    'NÃO ESPECIFICADO'
                END AS sexoContato,
                DATE_FORMAT(dataNascContato, '%d/%m/%Y') as dataNascContato
            FROM tbcontatos
           ";
    $result = mysqli_query($conexao,$sql) or die ("Erro ao executar a consulta!" . mysqli_error($conexao));
    // Percorre linha por linha, e guarda os dados
    while($dados = mysqli_fetch_assoc($result)) {
    ?>
    <tbody>
        <tr>
            <td><?=$dados['idContato']?></td>
            <td><?=$dados['nomeContato']?></td>
            <td><?=$dados['emailContato']?></td>
            <td><?=$dados['telefoneContato']?></td>
            <td><?=$dados['enderecoContato']?></td>
            <td><?=$dados['sexoContato']?></td>
            <td><?=$dados['dataNascContato']?></td>
            <td><a href="index.php?menuop=editar-contato&idContato=<?=$dados['idContato']?>">Editar</a></td>
        </tr>
    </tbody>
    <?php  
    }
    ?>
</table>