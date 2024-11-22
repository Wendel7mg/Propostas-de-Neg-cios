<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--Manual css-->
    <link href="css/style.css" rel="stylesheet">
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!--Aba
    <link rel="shortcut icon" href="img/ico.png">
    -->
    <!--Datatables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    
     <title>Contador</title>
</head>

<body>
    <header>
        <?php if (isset($_SESSION['login'])) {
            echo '
            <div class="collapse" id="navbarToggleExternalContent">
                
                <div class="bg-dark p-4">
                    <h5 class="text-white h4">InovaPropostas <span class="text-muted">SaaS</span></h5>
                    <div>
                        <a href="?pagina=cadastros" class="linkMenu">
                            Cadastrar Proposta
                        </a>
                    </div>
                    <div>
                        <a href="logout.php" class="linkMenu">
                            Sair
                        </a>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

            ';
        }
        ?>
    </header>

    <main class="container mt-5">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <!-- Example of a card component to display some content -->
                <div class="card shadow-lg mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="m-0">Bem-vindo ao Sistema de Propostas</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Aqui você pode cadastrar novas propostas, visualizar registros e muito mais!</p>
                    </div>
                </div>
            </div>
        </div>
    </main>