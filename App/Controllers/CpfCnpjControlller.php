<?php
/**
 * Created by PhpStorm.
 * User: idelf
 * Date: 22/05/2018
 * Time: 00:10
 */

namespace App\Controllers;

use App\Models\ValidaCPF_CNPJ;

class CpfCnpjControlller
{


    public function test(){
        $cpf_cnpj_form = $_POST['cpf_cnpjEnpresa'];

        // Cria um objeto sobre a classe
        $cpf_cnpj = new ValidaCPF_CNPJ($cpf_cnpj_form);

        // Opção de CPF ou CNPJ formatado no padrão
        $formatado = $cpf_cnpj->formata();

        // Verifica se o CPF ou CNPJ é válido
        if ( $formatado ) {
            echo $formatado; // 71.569.042/0001-96
        }else {
            echo '<script type="text/javascript">
                $(document).ready(function(){
                    $("#alerta-danger").fadeIn(1000);    // 1 s
                    $("#alerta-danger").fadeOut(7000);   // 7 s
                });
              </script>';
        }

        /*  Opção sem formatação, apenas validação    */

        // Cria um objeto sobre a classe
        $cpf_cnpj = new ValidaCPF_CNPJ($cpf_cnpj_form);

        // Verifica se o CPF ou CNPJ é válido
        if ( $cpf_cnpj->valida() ) {
            include_once("../Views/page_destino.html"); // Retornará este valor
        } else {
            echo '<script type="text/javascript"> 
                $(document).ready(function(){
                    $("#alerta-danger").fadeIn(1000);  // 1 s
                    $("#alerta-danger").fadeOut(7000);  // 7 s
                });
              </script>';
        }


    }


}











