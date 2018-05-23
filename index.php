<!-- **********************************************************************************
	Project: This is THE FINAL  ONE on Web Tecnologies subject.
	     In this project we build my a web sistem using bootstrap 4.0 and others tecnologies

	Tecnologies used: HTML5, CSS3, BOOTSTRAP 4.0, PHP 7,  JAVASCRIPT, jQUERY and MYSQL
	@uthors: IDELFRIDES JORGE | ÉRIC VINÍCIUS | GLHAZYANNO BRAGA | JOSÉ MARIA JAIRO
	Starded Date: 17th May, 2018.
	First parte Finished Date: 5th may, 2018.
	Bootstrap v4.0.0-beta.2 (https://getbootstrap.com)
*********************************************************************************** -->
<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Vagas Já</title>
    <meta charset="UTF-8">
    <meta name="author" content="Idelfrides Jorge and Eric Vinícius">
    <meta name="description" content="Atividade 02 da disciplina Tecnologias Web - Criar um site usando Bootstrap 4.0">
    <meta name="keywords" content="HTML,CSS,Bootstrap 4, jQuery">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="App/Assets/_images/favicon.png">
    <!--  bootstrap css -->
    <link rel="stylesheet" href="App/Assets/_css/meu-estilo.css">
    

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #346d8d;">
        <div class="container">
            <a href="#" id="home-style">
                <img id="icon-home" src="App/Assets/_images/home.png" width="40" height="40" title="Home" style="background-color: transparent;">
            </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a class="navbar-brand h1 mb-0" id="time" data-toggle="tooltip" title=""
                href="#">TIME &nbsp;|</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto" id="navbarSite2">
                    <li class="nav-item">
                        <a class="nav-link text-lg-center text-white text-uppercase" href="App/Views/page_cadastro_empresario.php">Cadastrar Vaga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lg-center text-white text-uppercase" href="#lorem">Ver Vagas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lg-center text-white text-uppercase" href="#lorem">Candidatar a Vagas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lg-center text-white text-uppercase" href="#lorem">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CAROUSEL-->
    <div id="carouselSite" class="carousel slide pt-5" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="1"></li>
            <li data-target="#carouselSite" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="App/Assets/_images/slide-01.jpg" class="img-fluid d-block" alt="Alternative text for slide 1">
                <div class="carousel-caption d-none d-md-block mb-5">
                    <h5 class="text-dark text-uppercase">Encontre sua vaga de uma forma fácil.</h5>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img src="App/Assets/_images/slide-02.jpg" class="img-fluid d-block" alt="Alternative text for slide 2">
                <div class="carousel-caption d-none d-md-block mb-5">
                    <h1 class="text-dark text-uppercase">Vaga já!</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="App/Assets/_images/slide-02.jpg" class="img-fluid d-block" alt="Alternative text for slide 3">
                <div class="carousel-caption d-none d-md-block mb-5">
                    <h1 class="text-dark text-uppercase">Vaga já!</h1>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Avançar</span>
        </a>
    </div>
    <!-- ****************************************************** -->

    <!-- Title page -->
    <div class="container" id="lorem">
        <div class="row">
            <div class="col-8 mx-auto  col-sm-12 text-center my-5 col-sm-6 col-md-8">
                <h1 class="display-3">Vagas Já!</h1>
                <p> O site criado para lhe colcocar em uma vaga de emprego o máis rápido possível.
                <strong> Lhe tirar dessa crise é o nosso objetivo!</strong> Aqui Você divulga seu currículo, e todos os Patrões de Sobral que estiverem cadastrado no site podem ter acesso a ele, E lhe contratar facinho \o/.
                    <br><br><strong>Cadastre-se e seja contratado!</strong>
                </p>
            </div>
        </div>
    </div>


    <div class="myborder"></div>

    <!-- ***************************************************************
                    card section goes here
    **************************************************************** -->
    <div class="title-content-page" id="bg-card">
        <div class="container-fluid pb-5">
            <div class="row">
                <h3 class="display-4 mx-auto">Vagas</h3>
            </div>
            <div class="row">

                <ul class="list-group col-10  mx-auto">
                    <li class="list-group-item list-group-item-white d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">1 Vaga</small>
                            <br>
                            <span style="color:#19C1C3;">
                                ESTÁGIO: Desenvolvedor Web Junior
                            </span>
                        </div>
                        <div class="badge">
                            <a href="#">
                                <button class="btn btn-info">Inscrever-se</button>
                            </a>
                        </div>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">1 Vaga</small>
                            <br>
                            <span style="color:#19C1C3;">
                                ESTÁGIO: Desenvolvedor Web Junior
                            </span>
                        </div>
                        <div class="badge">
                            <a href="#">
                                <button class="btn btn-info">Inscrever-se</button>
                            </a>
                        </div>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-muted">1 Vaga</small>
                            <br>
                            <span style="color:#19C1C3;">
                                ESTÁGIO: Desenvolvedor Web Junior
                            </span>
                        </div>
                        <div class="badge">
                            <a href="#">
                                <button class="btn btn-info">Inscrever-se</button>
                            </a>
                        </div>

                    </li>

                </ul>
            </div>

        </div>

    </div>


    <!-- ***************************************************************
                              Modo de inscrição
     *************************************************************** -->

    <!-- ***************************************************************
                             Formuláriob de contato ---- Removido por enquanto
     *************************************************************** -->
    <!--
     <div id="contato">
        
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h3 class="display-4">CONTATO</h3>
                <p class="text-sm-center text-muted">Entre em contato conosco. Mande sua opinião, sugestão, crítica ou elogio que serã bem-vindo/a.</p>
            </div>
        </div>

        <div class="row align-items-center justify-content-center mb-5 bg-transparent">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <form name="myform-name" action="App/Views/_pages/page_destino.html" id="myform-id" method="post" target="_blank">
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="inputName">Nome</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Your Name">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="sobreNome">Sobrenome</label>
                            <input type="text" class="form-control" id="sobreNome" placeholder="Your Surename">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" id="endereco" placeholder="Your Adress">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-5">
                            <label for="cidade">Cidade</label>
                            <input type="text" class="form-control" id="cidade" placeholder="Your City">
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="estado">Estado</label>
                            <select id="estado" class="form-control">
                                <option selected>Escolha...</option>
                                <option>CE</option>
                                <option>PA</option>
                                <option>GO</option>
                                <option>SP</option>
                                <option>RS</option>
                            </select>
                        </div>

                        <div class="fom-group col-sm-4">
                            <label for="cep">CEP</label>
                            <input type="text" class="form-control" id="cep" placeholder="Your Zip Code">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label for="email-id">E-mail</label>
                            <input type="text" class="form-control" name="email" id="email-id" placeholder="Your Email">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label for="message-id">Mensagem</label>
                            <textarea class="form-control" rows="5" name="message" id="message-id" placeholder="Your messsage">
                                </textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-sm-8">
                            <button type="button" id="btn-envio" class="btn btn-success btn-lg col-10">Submit</button>
                        </div>
                        <div class="form-group col-sm-2">
                            <button type="reset" id="btn-reset" class="btn btn-primary btn-lg col-10">Limpar</button>
                        </div>
                        <div class="form-group col-sm-2">
                            <a tabindex="0" class="btn btn-secundary  col-10 btn-lg" role="button" data-toggle="popover" data-placement="right" data-trigger="focus"
                                title="Título de ajuda" data-content="Donec euismod lacus eu tellus semper, nec tincidunt velit vulputate.
                                    Suspendisse in justo sollicitudin">Help
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    -->

    <!-- ***************************************************************
                             Rodapé = footer
  *************************************************************** -->
    <div class="bg-dark">
        <div class="col-12  py-1">
            <div class="mybordercopy"></div>
            <blockquote class="blockquote text-center text-white">
                <footer>Copyright &copy;&nbsp;2018 &nbsp;|&nbsp; Todos os direitos reservados.</footer>
            </blockquote>
        </div>
    </div>

    <!-- Optional JavaScript   -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/dist/js/bootstrap.js"></script>

    <script>
        $(document).ready(function () {
            // alert("Welcome to our time. This is War Machine!");

            $("#btn-envio").click(function () {
                $("form").submit(function () { return true });
                var aux = 0;

                // avalia todos os campus input
                $("input").each(function () {
                    if ($(this).val() === "") {
                        $(this).css({ "border": "1px solid #f00", "padding": "2px" });
                        aux = aux + 1;
                    }
                });

                // avalia o campo e-mail
                var d_email = $("#email-id").val();
                var emailFilter = /^.+@.+\..{2,}$/; // expressão regular  de caracteres aceites
                var illegalChars = /[\(\)\<\>\,\;\:\\\/\"\[\]]/; //  de caracteres não aceites
                if (!(emailFilter.test(d_email)) || d_email.match(illegalChars)) {
                    $("#email-id").css({ "border": "1px solid #f00", "padding": "2px" });
                    alert("E-mail inválido. Por favor, informe outro e-mail!");
                    aux++;
                }

                // validar o campo mensagem
                var data_message = $("textarea").val();

                if (data_message.trim().length === 0) {
                    $("textarea#message-id").css({ "border": "1px solid #f00", "padding": "2px" });
                    alert("Campo mensagem vazio. Por favor,  Preenche este campo!");
                    aux = aux + 1;
                }

                // teste a condição de envio
                if (aux === 0) {
                    $("#myform-id").submit(); // envia o formulário
                }
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <script>
        $(function () {
            $('[data-toggle="popover"]').popover();
        })
    </script>
</body>

</html>