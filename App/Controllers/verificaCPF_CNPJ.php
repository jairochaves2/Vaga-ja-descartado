<?php
// Inclui a classe
//include('class/class-valida-cpf-cnpj.php');
use App\Models\ValidaCPF_CNPJ;


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
                $("#alerta-danger").fadeIn(1000);  // 1 s
                $("#alerta-danger").fadeOut(7000);  // 7 s
            });
          </script>';
}

#
# Opção sem formatação, apenas validação
#

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
?>


<div style="display: none;position: absolute; margin-left: 50%;" id="alerta-danger" class="alert alert-danger alert-dismissible navbar-fixed-top alerta" role="alert">
    <button  type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>CPF/CNPJ inválido !</strong><br><br>Tente Novamente informação correta.
</div>
<br><br>


