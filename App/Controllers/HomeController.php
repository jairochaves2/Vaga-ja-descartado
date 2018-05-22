<?php
/**
 * Created by PhpStorm.
 * User: Idelfides Jorge, WM
 * Date: 19/05/2018
 * Time: 21:00
 *
 * ----------------------------------------------------------------
 * Este arquivo detém a class HomeController que mantem e
 * descreve os métodos para tratar dados vindos de formulários.
 *
 */

namespace App\Controllers;

use App\Models\Empresario;
use App\Models\Obras;
use App\Models\ValidaCPF_CNPJ;
use SON\Controller\Action;



class HomeController extends Action{

    /*-----------------------------------------------------
              Tratamento de empresário
    -------------------------------------------------------*/

    function trataCPF_CNPJ($request){
        $cpf_cnpj_form = $request['cpf_cnpjEnpresa'];
        $cpf_cnpj = new ValidaCPF_CNPJ($cpf_cnpj_form);

        // Opção de CPF ou CNPJ formatado no padrão
        $formataded = $cpf_cnpj->formata();

        // Verifica se o CPF ou CNPJ é válido
        if ( $formataded ) {
            echo $formataded; // 71.569.042/0001-96
        } else {
            echo '\'<script> alert("CPF/CNPJ INVALIDO") </script>\'';
        }

        // Opção sem formatação, apenas validação

        // Cria um objeto sobre a classe
        $cpf_cnpj = new ValidaCPF_CNPJ($cpf_cnpj_form);

        // Verifica se o CPF ou CNPJ é válido
        if ( $cpf_cnpj->valida() ) {
            echo '<script>alert("CPF/CNPJ VALIDO")</script>'; // Retornará este valor
        } else {
            echo '\'<script> alert("CPF/CNPJ INVALIDO") </script>\'';
        }
    }



    public function cadastroEnpresario(){
        $this->render("cadastroCliente");
    }

    public function formCliente($request){
        $nomeCliente = $request['nomeCliente'];
        $endCliente = $request['endCliente'];
        $empresaCliente = $request['empresaCliente'];
        $cpfCliente = $request['cpfCliente'];
        $emailCliente = $request['emailCliente'];
        $telefoneCliente = $request['telefoneCliente'];

        $cliente  = new Empresario($nomeCliente, $endCliente, $empresaCliente, $cpfCliente, $emailCliente, $telefoneCliente);
        $cliente->cadastroCliente();
    }


    /* ------------------------------------------------------------
                      Tratamento de Vagas
    --------------------------------------------------------------*/

    public function cadastroVaga(){
        $this->render('cadastroObra');
    }

    public function formObra($request){
        $descricao = $request['nomeObra'];
        $cliente = $request['clienteObra'];
        $endObra = $request['endObra'];
        $classificacao = $request['tipoObra'];
        $responsavel = $request['respObra'];

        $cadObra = new Obras($cliente, $endObra, $descricao, $classificacao, $responsavel);
        $cadObra->cadastroObra();
    }

    public function showVaga($request){
        $valor = $request['q'];
        $callShowObra = new Obras();
        $callShowObra->mostraObra($valor);
    }

    public function updateVaga($request){
        $id = base64_decode($request['codigo']);
        $update = new Obras();
        $this->views->row = $update->dadosObra($id);
        $this->render('cadastroObra');
    }

    public function formAtualizarObra($request){
        $id = base64_decode($request['codigoObraAtuali']);

        $descricao = $request['newNomeObra'];
        $cliente = $request['newClienteObra'];
        $endObra = $request['newEndObra'];
        $tipoObra = $request['newTipoObra'];
        $respObra = $request['newRespObra'];

        $update = new Obras($cliente, $endObra, $descricao, $tipoObra, $respObra);
        $update->atualizarObra($id);
    }

    public function removeVaga($request){
        $id = base64_decode($request['codigo']);
        $delObra = new Obras();
        $delObra->excluirObra($id);
    }

}