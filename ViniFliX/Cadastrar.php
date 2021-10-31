<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>ViniFliX</title>
</head>

<body>
    <nav class="nav-extended #00e5ff cyan accent-3">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo center">ViniFliX</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="ViniFlix.php">Filmes</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent #00bcd4 cyan">
                <li class="tab"><a class="active">Filmes</a></li>
                <li class="tab"><a href="#test1" href="#test2">Livros</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Cadastrar Filmes</span>

                    <!-- imput titulo -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate">
                            <label for="titulo">Titulo do Filme</label>
                        </div>
                    </div>

                    <!-- imput sinopse -->
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="Sinopse" class="materialize-textarea"></textarea>
                                    <label for="Sinopse">Sinopse</label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- imput nota -->
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nota" type="number" step="0.1" min=0 max=5 class="validate" require>
                            <label for="nota">Nota</label>
                        </div>
                    </div>

                    <!-- imput nota -->
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Capa</span>
                            <input type="file" multiple>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Capa do Filme">
                        </div>
                    </div>

                    <div class="card-action">
                        <a class="btn grey" href="ViniFliX.php">cancelar</a>
                        <a href="#" class="waves-effect waves-light btn cyan">Confirmar</a>
                    </div>
                </div>
            </div>
        </div>