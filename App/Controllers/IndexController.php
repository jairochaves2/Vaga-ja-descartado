<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 03/10/17
 * Time: 22:41
 */

namespace App\Controllers;


use App\Models\usuario;
use SON\Controller\Action;
//use SON\DI\Container;

class IndexController extends Action {
    //Funcao para renderizar o layout do index
    public function index(){
        $this->render("index",false);
    }

    //Funcao para validar o login e criar as variaveis da sessao
    public function login($request){

        session_start();

        $usuario = new usuario(null, null,$request['emailUsuario'], md5($request['senhaUsuario']));
        $usuario->validarLogin();
    }

    //funcao para rendenrizar o layout de home
    public function home(){
        $this->render("home");
    }

    //funcao para cadastro de usuario
    public function cadastroUsuario($request){

        //Criando hash da senha, md5
        $request['senhaCadastro'] = md5($request['senhaCadastro']);
      
        $usuario = new usuario(0,$request['nomeCadastro'], $request['emeilRecovery'], $request['senhaCadastro'], $request['endCadastro'], $request['cpfCadastro'], $request['empresaCadastro'], $request['nivelAcesso']);
        $usuario->cadastro();

    }

    /*-----------------------------------------------------
                Recuperação de senha de usuário
    -------------------------------------------------------*/
    public function recuperaSenha($request){
        //$this->render('index', true);

        $emailRecovery = $request['emailRecovery'];

        echo $emailRecovery;

        $emailRecovery = preg_replace('/[^[:alnum:]_.-@]/','', $emailRecovery);

        $conUer = new usuario();

        /* chama o método para gerar uma chave de acesso criptografada para redefinição da senha
        por meio do email fornecido */
        $key = $conUer->geraChavaAcesso($emailRecovery);

        if ($key != null){
            /* assunto da correspondência */
            $assunto = "Recuperação da conta de usuário";

            /* nome do remetente */
            $nome = "Sistema Gerencia Obras";

            /* mensagem que será apresentada ao usuario */
            $mensagem = "O Sr/a. solicitou a recuperação de seus dados de login.";

            /* email_remetente - é email do servidor remoto garantido pelo plano de hospedagem */
            $email_remetente = "idelfridesjorgepapai@gmail.com";

            /* configurações necessárias para o correto interpreração da message */
            $cabecalho = "MIME-Version: 1.0";
            $cabecalho .= 'Content-type: text/html; charset = iso-8859-1\n';
            $cabecalho .= 'From: $email_remetente';

            /* mensagem q será apresentada ao usuario */
            $message = "<strong>Nome:</strong>$nome<br><br><strong>Assunto:</strong>$assunto<br><br><strong>Mensagem:</strong>$mensagem<br><br><br>Clique no botão abaixo para Recuperar sua senha <br><br><br><a target='_blank' title='Redefinição de senha' href='http://localhost/Gerencia-Obras/App/Views/index/newPassword.php?chave='.$key.''><button>Redefinir senha</button></a>";

            /* invoca a função que envia_email para o usuário */
            $conUer->sendEmail2User($emailRecovery, $assunto, $message, $cabecalho);
        } else {
            // email invalido
            $conUer->voltarTelaLogin(1);
        }
    }

    /* método que mostra a chave de recuperação na tela para o usuaário em forma de teste */
    public function recuperaSenhaExper($request){
        //$this->render('index', true);

        $emailRecovery = $request['emailRecovery'];

        echo $emailRecovery;

        $emailRecovery = preg_replace('/[^[:alnum:]_.-@]/','', $emailRecovery);

        $conUer = new usuario();

        /* chama o método para gerar uma chave de acesso criptografada para redefinição da senha
        por meio do email fornecido */
        $key = $conUer->geraChavaAcesso($emailRecovery);

        if ($key != null){
            echo '<a href="http://localhost:63342/Gerencia-Obras/Models/tela_senha.php?chave='.$key.'">http://localhost:63342/Gerencia-Obras/Models/tela_senha.php?chave='.$key.'</a>';

            // echo "E-mail valido<br><br> Mensagem será enviada. <br><br> Acesse seu email!<br><br>";

        } else {
            //echo "<h1>Erro: email invalido</h1>";
            // email invalido
            $conUer->voltarTelaLogin(1);
        }
    }

    /* Método que controla o cadastrro de uma nova senha */
    public function redefinirSenha($request){

        $email_usr = $request["email"];
        $nova_senha = $request["novaSenha"];
        $confimarSenha = $request["confimarSenha"];
        $chave = $request["chave"];

        $email_usr = preg_replace('/[^[:alnum:]_.-@]/', '', $email_usr);
        $chave = preg_replace('/[^[:alnum:]]/', '', $chave);

        $nova_senha = addslashes($nova_senha);
        $confimarSenha = addslashes($confimarSenha);

        $conUser = new usuario();

        if ($nova_senha == $confimarSenha) {

            $result = $conUser->checkChave($email_usr, $chave);

            if ($result) {
                $conUser->SetNovaSenha($nova_senha, $result);

                // senha alterada com sucesso
                $conUser->voltarTelanewPw(0);

            } else {

                // Erro: Usuário não encontrado
                $conUser->voltarTelaLogin(1);
            }
        }else{
            $conUser->voltarTelanewPw(2);
        }
    }

    /* Não utilizado */
    public function newPwPage(){
        $this->render("newPassword");
    }

    /* ---------------  Fim Recuperação senha ---------------------------- */

    //Funcao para logout
    public function logout(){
        session_start();

        $usuario = new usuario();
        $usuario->logout();
    }

}


