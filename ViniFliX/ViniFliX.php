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

    <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
    </ul>

    <div class="row">
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://www.themoviedb.org/t/p/w300/1HdMUghqlgOIvbsU9ZtO40IPRzl.jpg">
                    <a class="btn-floating halfway-fab waves-effect waves-light red">
                        <i class="material-icons">play_arrow</i>
                    </a>
                </div>
                <div class="card-content">
                    <span class="card-title">Harry Potter e o Prisioneiro de Azkaban</span>
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text">star</i>5
                    </p>
                    <p>Um grande perigo ronda a escola de Magia e Bruxaria de Hogwarts: o assassino Sirius Black
                        fugiu da prisão de Azkaban, considerada até
                        então como à prova de fugas..</p>
                </div>
            </div>
        </div>


        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://www.themoviedb.org/t/p/w300/eDTTof4KIh7cQonR66mXRK8YUJb.jpg">
                    <a class="btn-floating halfway-fab waves-effect waves-light red">
                        <i class="material-icons">play_arrow</i>
                    </a>
                </div>
                <div class="card-content">
                    <span class="card-title">Star Wars O Retorno de Jedi</span>
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text">star</i>4.9
                    </p>
                    <p>O Império Galático começou a construção dbe uma segunda Estrela da Morte, visando aniquilar a Aliança Rebelde,
                        mas seu término está comprometido pela Frota Rebelde,
                        que insiste em dar um fim ao Império. Neste meio tempo, Luke Skywalker luta para resgatar Vader</p>
                </div>
            </div>
        </div>




</body>

</html>