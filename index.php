<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rent-A-Ride</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .pesquisa {
            position: static;
        }

    </style>

</head>

<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
                <img src="imagens/logo.png" alt="Logo" class="logo-navbar">
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Ínicio</a></li>
                <li><a href="contacto.html">Contactos</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="sobreMim.html">Sobre mim</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social <b class="carret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href='https://www.facebook.com'>Facebook</a></li>
                        <li><a href='https://www.twitter.com'>Twitter</a></li>
                        <li><a href='https://plus.google.com'>Google+</a></li>
                        <li><a href='https://www.linkedin.com'>Linkedin</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>PT</strong><b class="carret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">English</a></li>
                        <li><a href="#">Français</a></li>
                        <li><a href="#">Deutch</a></li>
                        <li><a href="#">Español</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#"><img src="imagens/bandeiraPortugal.png" alt="Imagem" class="linguagem"></a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-default custom-button" href="login.html">
                        <p>Login</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-default custom-button" href="registro.html">
                        <p>Registo</p>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <header>
        <div class="background-image"></div>
        <div class="frase">
            <h1 class="frase-texto">Que carro quer conduzir hoje?</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 pesquisa">
                    <div class="barraCima">
                        <input class="form-control input-lg" id="inputlg" type="text" placeholder="SUV, Audi, Desportivo">
                    </div>
                    <div class="barraBaixo">
                        <div class="col-xs-6">
                            <label for="inputmd">Entrega:</label>
                            <input class="form-control input-md" id="inputmd" type="text" placeholder="Local de entrega">
                        </div>
                        <div class="col-xs-6">
                            <label for="inputmd">Recolha:</label>
                            <input class="form-control input-md" id="inputlmd" type="text" placeholder="Data de entrega">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pesquisar-btn">
                <button class="btn btn-primary">Pesquisar</button>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="grid-item">
                    <h2>Renault Captur </h2>
                    <h6>SUV</h6>
                    <img class="car-image" src="imagens/renaultCaptur.jpg" alt="Carro 1">
                    <div class="car-details">
                        <h3>Detalhes do carro</h3>
                        <ul>
                            <li><strong>Kilometros:</strong> 120000</li>
                            <li><strong>Ano:</strong> 2023</li>
                            <li><strong>Cor:</strong> Preto</li>
                            <li><strong>Apartir de:</strong> 12 euros</li>
                        </ul>
                    </div>
                    <a href="renaultCaptur.html" class="btn btn-primary btn-detalhes">Detalhes > </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="grid-item">
                    <h2>Volkswagen Polo </h2>
                    <h6>Compacto</h6>
                    <img class="car-image" src="imagens/volkswaggenPolo.jpg" alt="Carro 1">
                    <div class="car-details">
                        <h3>Detalhes do carro</h3>
                        <ul>
                            <li><strong>Kilometros:</strong> 50000</li>
                            <li><strong>Ano:</strong> 2020</li>
                            <li><strong>Cor:</strong> Cinza</li>
                            <li><strong>Apartir de:</strong> 12 euros</li>
                        </ul>
                    </div>
                    <a href="volkswagenPolo.html" class="btn btn-primary btn-detalhes">Detalhes > </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="grid-item">
                    <h2>Fiat 500 </h2>
                    <h6>Compacto</h6>
                    <img class="car-image" src="imagens/fiat500.jpg" alt="Carro 1">
                    <div class="car-details">
                        <h3>Detalhes do carro</h3>
                        <ul>
                            <li><strong>Kilometros:</strong> 75000</li>
                            <li><strong>Ano:</strong> 2019</li>
                            <li><strong>Cor:</strong> Branco</li>
                            <li><strong>Apartir de:</strong> 12 euros</li>
                        </ul>
                    </div>
                    <a href="fiat500.html" class="btn btn-primary btn-detalhes">Detalhes > </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="grid-item">
                    <h2>Tesla Model 3</h2>
                    <h6>Premium</h6>
                    <img class="car-image" src="imagens/teslaModel3.jpg" alt="Carro 1">
                    <div class="car-details">
                        <h3>Detalhes do carro</h3>
                        <ul>
                            <li><strong>Kilometros:</strong> 25000</li>
                            <li><strong>Ano:</strong> 2023</li>
                            <li><strong>Cor:</strong> Azul</li>
                            <li><strong>Apartir de:</strong> 12 euros</li>
                        </ul>
                    </div>
                    <a href="teslaModel3.html" class="btn btn-primary btn-detalhes">Detalhes > </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="grid-item">
                    <h2>BMW Serie 3 </h2>
                    <h6>Premium</h6>
                    <img class="car-image" src="imagens/BMWSerie3.jpg" alt="Carro 1">
                    <div class="car-details">
                        <h3>Detalhes do carro</h3>
                        <ul>
                            <li><strong>Kilometros:</strong> 175000</li>
                            <li><strong>Ano:</strong> 2016</li>
                            <li><strong>Cor:</strong> Branco</li>
                            <li><strong>Apartir de:</strong> 12 euros</li>
                        </ul>
                    </div>
                    <a href="serie3.html" class="btn btn-primary btn-detalhes">Detalhes > </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="grid-item">
                    <h2>Citroen C3 AirCross </h2>
                    <h6>SUV</h6>
                    <img class="car-image" src="imagens/citroenC3.jpg" alt="Carro 1">
                    <div class="car-details">
                        <h3>Detalhes do carro</h3>
                        <ul>
                            <li><strong>Kilometros:</strong> 60000</li>
                            <li><strong>Ano:</strong> 2018</li>
                            <li><strong>Cor:</strong> Preto</li>
                            <li><strong>Apartir de:</strong> 12 euros</li>
                        </ul>
                    </div>
                    <a href="c3Aircross.html" class="btn btn-primary btn-detalhes">Detalhes > </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="grid-item">
                    <h2>Peugeot 108 </h2>
                    <h6>Compacto</h6>
                    <img class="car-image" src="imagens/peugeot108.jpg" alt="Carro 1">
                    <div class="car-details">
                        <h3>Detalhes do carro</h3>
                        <ul>
                            <li><strong>Kilometros:</strong> 100000</li>
                            <li><strong>Ano:</strong> 2010</li>
                            <li><strong>Cor:</strong> Amarelo</li>
                            <li><strong>Apartir de:</strong> 12 euros</li>
                        </ul>
                    </div>
                    <a href="peugeot108.html" class="btn btn-primary btn-detalhes">Detalhes > </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="grid-item">
                    <h2>Mercedes A-class </h2>
                    <h6>Premium</h6>
                    <img class="car-image" src="imagens/classA.jpg" alt="Carro 1">
                    <div class="car-details">
                        <h3>Detalhes do carro</h3>
                        <ul>
                            <li><strong>Kilometros:</strong> 150000</li>
                            <li><strong>Ano:</strong> 2016</li>
                            <li><strong>Cor:</strong> Branco</li>
                            <li><strong>Apartir de:</strong> 12 euros</li>
                        </ul>
                    </div>
                    <a href="mercedesClasseA.html" class="btn btn-primary btn-detalhes">Detalhes > </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="grid-item">
                    <h2>Opel Zafira</h2>
                    <h6>Monovolume</h6>
                    <img class="car-image" src="imagens/opelZafira.jpg" alt="Carro 1">
                    <div class="car-details">
                        <h3>Detalhes do carro</h3>
                        <ul>
                            <li><strong>Kilometros:</strong> 100000</li>
                            <li><strong>Ano:</strong> 2020</li>
                            <li><strong>Cor:</strong> Preto</li>
                            <li><strong>Apartir de:</strong> 12 euros</li>
                        </ul>
                    </div>
                    <a href="zafira.html" class="btn btn-primary btn-detalhes">Detalhes > </a>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="container">
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4>Sobre Nós</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum sem vel velit ultricies, id luctus ex varius.</p>
                                </div>
                                <div class="col-md-4">
                                    <h4>Links Úteis</h4>
                                    <ul class="list-unstyled">
                                        <li><a href="index.html">Página Inicial</a></li>
                                        <li><a href="contacto.html">Contacto</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="sobreMim.html">Sobre mim</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h4>Contato</h4>
                                    <p><i class="glyphicon glyphicon-map-marker"></i> Rua lá do outro lado, Castelo Branco, Portugal</p>
                                    <p><i class="glyphicon glyphicon-envelope"></i> rafael.pires@ipcbcampus.pt</p>
                                    <p><i class="glyphicon glyphicon-earphone"></i> +351945942923</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <p class="text-center">Todos os direitos reservados &copy; 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>

</html>
