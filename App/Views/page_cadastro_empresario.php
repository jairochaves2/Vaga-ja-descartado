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

    <link rel="shortcut icon" type="image/x-icon" href="../Assets/_images/favicon.png">
    <!--  bootstrap css -->
    <link rel="stylesheet" href="../Assets/_css/meu-estilo.css">
    <link rel="stylesheet" href="../Assets/_css/wm_style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #346d8d;">
        <div class="container">
            <a href="../../index.php" id="home-style">
                <img id="icon-home" src="../Assets/_images/home.png" width="40" height="40" title="Home" style="background-color: transparent;">
            </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a class="navbar-brand h1 mb-0" id="time" data-toggle="tooltip" title="O projeto foi desenvolvido por Idelfrides Jorge e Eric Vinícius. O projeto foi iniciado em 28 de abril de 2018 e terminado em 04 de maio do mesmo ano. O projeto corresponde à atividade numéro 2 da disciplina de Tecnologias Web e consiste em criar um site utilizando Bootstrap e jQuery."
                href="#">TIME &nbsp;|</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto" id="navbarSite2">
                    <li class="nav-item">
                        <a class="nav-link text-lg-center text-white text-uppercase" href="#">Cadastrar Vaga</a>
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
    <!-- ****************************************************** -->


    <!-- ***************************************************************
                    Form vacancies 
    **************************************************************** -->
    <div class="title-content-page mt-5 pt-3" id="bg-card">
        <div class="container pb-5">
            <div class="row col-12">
                <h3 class="display-4 mx-auto">Cadastre-se antes de divulgar sua vaga!</h3>
            </div>
            <div class="row col-10 mx-auto">
                <form class="col-12">
                    <div class="row">
                        <div class="form-group col-9">
                            <label for="InputName">Nome*:</label>
                            <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Digite seu nome.">
                        </div>
                        <div class="form-group col-3">
                            <label for="InputCPF">CPF*:</label>
                            <input type="text" class="form-control" name="InputCPF" id="InputCPF" placeholder="Digite seu CPF.">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-9">
                            <label for="InputEmail">Email*:</label>
                            <input type="email" class="form-control" name="InputEmail" id="InputEmail" aria-describedby="emailHelp" placeholder="Digite seu E-mail.">

                        </div>
                        <div class="form-group col-3">
                            <label for="InputSenha">Senha*:</label>
                            <input type="password" class="form-control" name="InputSenha" id="InputSenha" placeholder="*********">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-9">

                            <label for="InputEnd">Endereço*:</label>
                            <input type="text" class="form-control" name="InputEnd" id="InputEnd" placeholder="Rua, Numero, Bairro">
                        </div>

                        <div class="form-group col-3">
                            <label for="InputCid">Cidade*:</label>
                            <select name="InputCid" class="form-control" id="InputCid">
                                <option value="1">Sobral</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-9">
                    
                            <label for="InputEnd">Seu Site:</label>
                            <input type="text" class="form-control" name="InputEnd" id="InputEnd" placeholder="www.seusite.com">
                        </div>
                    
                        <div class="form-group col-3">
                            <label for="InputTel">Telefone*:</label>
                            <input type="text" class="form-control" name="InputTel" id="InputTel" placeholder="Digite seu Telefone.">
                        </div>
                    </div>
                    <div class="row col-12 mx-auto  pt-5">
                        <button type="submit" class="btn col-4 mx-auto mb-5">Cadastrar</button>
                    </div>
            </div>
            
            
            </form>
        </div>

    </div>

    </div>
    <!-- ***************************************************************
                             Rodapé = footer
  *************************************************************** -->
    <div class="bg-dark">
        <div class="col-12 pb-2">
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