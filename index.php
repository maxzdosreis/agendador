<?php
session_start();
include_once('db/conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo-padrao.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Sistema Agendador</title>
</head>
<body>
    <header class="bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <img src="img/logo_agendador.png" alt="Sis-Agendador" width=170>
                </a>
                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item active"><a class="nav-link" href="index.php?menuop=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menuop=contatos">Contatos</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menuop=tarefas">Tarefas</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menuop=eventos">Eventos</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <?php  
                $menuop = (isset($_GET['menuop']))? $_GET['menuop']: 'home';
                switch($menuop) {
                    case 'home':
                        include('paginas/home/home.php');
                        break;
                    case 'contatos':
                        include('paginas/contatos/contatos.php');
                        break;
                    case 'cad-contato':
                        include('paginas/contatos/cad-contato.php');
                        break;
                    case 'inserir-contato':
                        include('paginas/contatos/inserir-contato.php');
                        break;
                    case 'editar-contato':
                        include('paginas/contatos/editar-contato.php');
                        break;
                    case 'excluir-contato':
                        include('paginas/contatos/excluir-contato.php');
                        break;
                    case 'atualizar-contato':
                        include('paginas/contatos/atualizar-contato.php');
                        break;
                    case 'tarefas':
                        include('paginas/tarefas/tarefas.php');
                        break;
                    case 'eventos':
                        include('paginas/eventos/eventos.php');
                        break;
                    default:
                        include('paginas/home/home.php');
                        break;
                }
            ?>
        </div>
    </main>
    <footer class="container-fluid fixed-bottom bg-dark">
        <div class="text-center">SIS Agendador</div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>