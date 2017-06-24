<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Rio Store</title>
        <meta charset="utf-8">
        <meta name="keywords" value="" />
        <meta name="http-equiv" value="" />

        <!-- stylesheets -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />

        <!-- stylesheets -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container-fluid">
                <div class="nav navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navigation-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-th-list fa-lg" aria-hidden="true"></i>
                    </button>
                    <a class ="navbar-brand header-logo" href="#">Rio Store</a>
                </div>
                <div class="collapse navbar-collapse navigation-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" class="header-item">Eletrônicos</a></li>
                        <li><a href="#" class="header-item">Eletrodomésticos</a></li>
                        <li><a href="#" class="header-item">Roupas</a></li>
                        <li><a href="#" class="header-item">Calçados</a></li>
                        <li><a href="#" class="header-item">Brinquedos</a></li>
                        <li><a href="#" class="header-item">Olá username, seja bem-vindo!</a></li> <!-- redirecionar para token administrativo -->
                    </ul>
                </div>
            </div>
        </nav>
        <div class="well media-well-gradient">
            <div class="media-well">
                <h2 class="media-well-text">Experimente nosso novo website!</h2>
                <h4 class="media-well-text">preparamos um cenário de incríveis experiências totalmente dedicado a você!</h4>
            </div>
        </div>
        <div class="jumbotron jumbotron-landing">
            <a href="#">Confira nossas ofertas!</a>
        </div>

        <div class="jumbotron jumbotron-hot">
            <div class="container-fluid">
                <h2>Ofertas Imperdíveis!</h2>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-header panel-heading">
                                    <h2>Produto</h2>
                                </div>
                                <div class="panel-body panel-content">
                                    <img src="https://dummyimage.com/335x335/d9d2d9/757575.jpg" alt="">
                                </div>
                                <div class="panel-footer panel-purchase-menu">
                                    <h5>footer</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
