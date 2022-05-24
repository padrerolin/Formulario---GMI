<?php   /* Passando os dados pro back*/
//use mPDF;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once __DIR__. "/vendor/autoload.php";
    
$idTicket = substr(microtime(),0,8);
$idTicket = preg_replace( '#[^0-9]#', '', $idTicket );

    $para ="elmanodeveloper@gmail.com";
    $assunto = "[".$idTicket."] Solicitação Cadastro GMI Distribuidora";
    
   
    $cnpj = $_POST['cnpj'];
    $razao_social = $_POST['name_corporate'];
    $nome_fantasia = $_POST['name_fancy'];
    $inscricao_estadual = $_POST['registration_state'];
    $inscricao_municipal = $_POST['registration_municipal'];
    $regime_tributario = $_POST['regime_tributario'];
    $website = $_POST['website'];
    $cep = $_POST['end_cep'];
    $endereco = $_POST['end_rua'];
    $numerorua = $_POST['end_num'];
    $complemento = $_POST['end_comp'];
    $bairro = $_POST['end_bairro'];
    $estado = $_POST['end_estado'];
    $cidade = $_POST['end_cidade'];
    $fone = $_POST['fone_comercial'];
    $emailNFE = $_POST['emailnfe'];
   

    /*Transformando os arrays em strings */
    $classifi = isset($_POST['classificacao_negocio'] 
     )
     ? $_POST['classificacao_negocio'] : null;
      
     $isento = isset($_POST['registration_state_exempted'])
     ? $_POST['registration_state_exempted'] :null;
   

   
   
   /*Dados do Cliente*/
    $nomecompleto = $_POST['nome_cliente'];
    $cpf = $_POST['cpf_cliente'];
    $numerocliente = $_POST['celular_cliente'];
    $departamento = $_POST['departamento_cliente'];
    $cargo = $_POST['cliente_cargo'];
    $email = $_POST['cliente_email'];     
    $skype = $_POST['cliente_skype'];     

    
    if (isset($_POST['registration_state_exempted']))
    {
  //VER COMO FAÇO PARA PASSAR O VALOR DE ISENTO PRO HTML
      //$corpo .= "<strong> Usuario isento da inscrição estadual ! </strong><br/>";
    }
    else{
      //$corpo .= "<strong> Inscricao Estadual:  </strong>$inscricao_estadual<br>";
    }
  
    $classificacao = $classifi;
    foreach ($classificacao as $valor){
     // $corpo .= "<strong> Classificação do seu negocio:  </strong>$valor<br>";
    }



    $corpo = "<!DOCTYPE html> <html lang='en'<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title></title>
    <link href='mpdfStyle.css' rel='stylesheet'>
    <style>
    body{
      background: #fff;
  }
  label{
      color: black;
      top: 12px;
      left: 5px;
      position: relative;
      font-size: 10px;
      font-weight: bold;
      text-transform: uppercase;
  }
  .col-md-10{
      display: flex;
      flex-direction: column;
      height: 68px;
      width: 50%;
  }
  
  input{
      border: 2px solid black;
        height: 40px;
        padding: 20px 5px;
        font-size: 15px;
  }
  .row{
      display: flex;
      height: 45px;
  
  }
  .razaoS{
      width: 70%;
  }
  .box{
      width: 885px;
      margin: 0 auto;
      height: 50%;
  }
  .docNecessario{
      top: 0px;
      display: table-cell;
      font-size: 30px;
  }
  .tt-cadastro{
      border-bottom: 1px solid black;
      font: 20px;
      color: #97221d;
  }
  .tt-vitrine{
      border-top: 4px solid #97221d;
      border-bottom: 4px solid #97221d;
  }
  .tt-vitrine cite{
      font-size: 20px;
      color: #97221d;
      padding-right: 20px;
      background: #FAFAFA;
      float: right;
      margin-top: 13px;
  }
  h3 {
      height: 25px;
  }
  img{
      height: 50px;
  }
  input[type='text-uniq' i] {
      border: 0px;
      padding: 3px 5px;
  }
  i{
      font-size: 12px;
  }
  fieldset {
      padding: 12px;
  }
  
    </style>
    </head>
    <body>
  
    <section class='box'>
      
    <fieldset class='col-md-6'>
      <header class='box-vitrine'>
        <h2 class='tt-vitrine'>
          <img src='https://i.gmidistribuidora.openk.com.br/logos/logo-171-1.png' alt='GMI Distribuidora'>
          <cite>ANÁLISE CADASTRAL - MAPEAMENTO SIMPLES</cite>
        </h2>
      </header>
    <h3 class='tt-cadastro'>DADOS GERAIS <br><br></h3>
    <div class='row'>
      <div class='col-md-10 col-xs-10 form-group razaoS'>
        <label class='text-right' for='razao_social'>Razão Social </label>
          <input type='text' name='razao_social' id='razao_social' value='$razao_social' class='form-control'>
      </div>
      <div class='col-md-10 col-xs-10 form-group'>
        <label class='text-right' for='cnpj'>CNPJ </label>
          <input type='text' name='cnpj' id='cnpj' value='$cnpj' class='cnpj form-control'>
      </div>
    </div>

    <div class='row'>
      <div class='col-md-10 col-xs-10 form-group'>
        <label class='text-right' for='nome_fantasia'>Nome Fantasia </label>
          <input type='text' name='nome_fantasia' id='nome_fantasia' value='$nome_fantasia' class='form-control'>
    </div>
    <div class='col-md-10 col-xs-10 form-group'>
      <label class='text-right' for='inscricao_estadual'>Inscrição Estadual </label>
      
        <input type='text' name='inscricao_estadual' id='inscricao_estadual' value='$inscricao_estadual' class='form-control'>
      </div>
    <div class='col-md-10 col-xs-10 form-group'>
      <label class='text-right' for='inscricao_municipal'>Inscrição Municipal </label>
        <input type='text' name='inscricao_municipal' id='inscricao_municipal' value='$inscricao_municipal' class='form-control'>
      </div>
    </div>

    <div class='row'>
    <div class='col-md-10 col-xs-10 form-group'>
      <label class='text-right' for='regime_tributario'>Regime Tributário </label>
        <input type='text' name='regime_tributario' id='regime_tributario' value='$regime_tributario' class='form-control'>
  </div>
  <div class='col-md-10 col-xs-10 form-group'>
    <label class='text-right' for='website
    '>Website </label>
      <input type='text' name='website' id='website' value='$website' class='form-control'>
    </div>
  <div class='col-md-10 col-xs-10 form-group'>
    <label class='text-right' for='emailNFE'>E-mail NF-e </label>
      <input type='text' name='emailNFE' id='emailNFE' value='$emailNFE' class='form-control'>
    </div>
  </div>

  <div class='row'>
  <div class='col-md-10 col-xs-10 form-group'>
    <label class='text-right' for='endereco'>Endereço</label>
      <input type='text' name='endereco' id='endereco' value='$endereco' class='form-control'>
  </div>
  <div class='col-md-10 col-xs-10 form-group'>
    <label class='text-right' for='bairro'>Bairro </label>
      <input type='text' name='bairro' id='bairro' value='$bairro' class='cnpj form-control'>
  </div>
</div>

<div class='row'>
<div class='col-md-10 col-xs-10 form-group'>
  <label class='text-right' for='cidade'>Cidade </label>
    <input type='text' name='cidade' id='cidade' value='$cidade' class='form-control'>
</div>
<div class='col-md-10 col-xs-10 form-group'>
<label class='text-right' for='cep
'>CEP </label>
  <input type='text' name='cep' id='cep' value='$cep' class='form-control'>
</div>
<div class='col-md-10 col-xs-10 form-group'>
<label class='text-right' for='fone'>Telefone Comercial </label>
  <input type='text' name='fone' id='fone' value='$fone' class='form-control'>
</div>
</div>
</fieldset>
<fieldset class='col-md-12'>
    <h3 class='tt-cadastro'>DOCUMENTOS NECESSÁRIO<br><br></h3>
    <div class='col-md-10 col-xs-10 form-group docNecessario'>
    <label class='text-right'>
    <input type='checkbox' name='documentos_necessarios[]' id='documentos_necessarios-1' value='1' class='multiCheckboxAdjusment'>
    <i>1. CONTRATO SOCIAL / MEI</i></label>
    <label class='text-right'>
    <input type='checkbox' name='documentos_necessarios[]' id='documentos_necessarios-2' value='2' class='multiCheckboxAdjusment'>
    <i>2. RG/CPF DOS SÓCIOS</i></label>
    <label class='text-right'>
    <input type='checkbox' name='documentos_necessarios[]' id='documentos_necessarios-3' value='3' class='multiCheckboxAdjusment'>
    <i>3. BOLETOS PAGOS</i></label>
    <label class='text-right'>
    <input type='checkbox' name='documentos_necessarios[]' id='documentos_necessarios-4' value='4' class='multiCheckboxAdjusment'>
    <i>4. COMPTE DE ENDEREÇO</i></label>
    <label class='text-right'>
    <input type='checkbox' name='documentos_necessarios[]' id='documentos_necessarios-5' value='5' class='multiCheckboxAdjusment'>
    <i> 5. INSCRIÇÃO ESTADUAL</i></label>
</div>
    </fieldset>
    <fieldset class='col-md-12'>
    <h3 class='tt-cadastro'>CLASSIFICAÇÃO DE NEGÓCIO<br><br></h3>
  <div class='row'>
      <div class='classNegocio'>
        <input type='checkbox' name='check_negocio' id='check_negocio' checked>
    </div>
    <input type='text-uniq' name='classificacao_negocio' id='classificacao_negocio' value='$valor' class='form-control'>

</div>
    </fieldset>
    <fieldset class='col-md-12'>
    <h3 class='tt-cadastro'>DADOS DO CLIENTE<br><br></h3>
    <div class='row'>
    <div class='col-md-10 col-xs-10 form-group'>
      <label class='text-right' for='nomecompleto'>Nome Completo </label>
        <input type='text' name='nomecompleto' id='nomecompleto' value='$nomecompleto' class='form-control'>
  </div>
  <div class='col-md-10 col-xs-10 form-group'>
    <label class='text-right' for='cpf'>CPF </label>
      <input type='text' name='cpf' id='cpf' value='$cpf' class='form-control'>
    </div>
  <div class='col-md-10 col-xs-10 form-group'>
    <label class='text-right' for='numerocliente'>Celular/Whatsapp: </label>
      <input type='text' name='numerocliente' id='numerocliente' value='$numerocliente' class='form-control'>
    </div>
  </div>

  <div class='row'>
  <div class='col-md-10 col-xs-10 form-group'>
    <label class='text-right' for='departamento'>Departamento</label>
      <input type='text' name='departamento' id='departamento' value='$departamento' class='form-control'>
  </div>
  <div class='col-md-10 col-xs-10 form-group'>
    <label class='text-right' for='cargo'>Cargo </label>
      <input type='text' name='cargo' id='cargo' value='$cargo'class='form-control'>
  </div>
</div>
<div class='row'>
<div class='col-md-10 col-xs-10 form-group'>
  <label class='text-right' for='email'>Email</label>
    <input type='text' name='email' id='email' value='$email' class='form-control'>
</div>
<div class='col-md-10 col-xs-10 form-group'>
  <label class='text-right' for='skype'>Skype </label>
    <input type='text' name='skype' id='skype' value='$skype' class='form-control'>
</div>
</div>  
    </fieldset>
    <fieldset class='col-md-12'>
    <h3 class='tt-cadastro'>PREENCHIMENTO PELA GMI<br><br></h3>
  <div class='row'>
  <div class='col-md-10 col-xs-10 form-group razaoS'>
    <label class='text-right' for='nomeExecutivo'>Nome do Executivo</label>
      <input type='text' name='nomeExecutivo' id='nomeExecutivo' value='' class='form-control'>
  </div>
  <div class='col-md-10 col-xs-10 form-group'>
    <label class='text-right' for='carteira'>Carteira </label>
      <input type='text' name='carteira' id='carteira' value=''class='form-control'>
  </div>
</div>
<div class='row'>
<div class='col-md-10 col-xs-10 form-group razaoS'>
  <label class='text-right' for='respAnalise'>Responsavel pela análise</label>
    <input type='text' name='respAnalise' id='respAnalise' value='' class='form-control'>
</div>
<div class='col-md-10 col-xs-10 form-group'>
  <label class='text-right' for='limiteSoli'>Limite solicitado R$ </label>
    <input type='text' name='limiteSoli' id='limiteSoli' value='' class='form-control'>
</div>
</div>  
    </fieldset>
    


</section>
</body>
    </html>";


  

    //Mensagem para o cliente

    $retorno = "Senhor(a) $nomecompleto seus dados foram armazenados com sucesso,
     nossa equipe estará entrando em contato.<br><br>Seus seguintes documentos foram anexados: ";
    


          /*Recebendo os anexos*/ 
          //Colocar os anexos em um IF para confirmar envio deles 
          if($_POST['button'] && isset($_FILES['input_cnpj']))
          {
             $ext = strtolower(substr($_FILES['input_cnpj']['name'],-4)); //Pegando extensão do arquivo
             $new_name1 = date(" Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
             $dir = './anexos/'; //Diretório para uploads 
             move_uploaded_file($_FILES['input_cnpj']['tmp_name'], $dir.$new_name1); //Fazer upload do arquivo
             //$corpo .= "<img src='$dir$new_name' width=100px height=100px object-fit:fill;>" ;
              
          } 
          if($_POST['button'] && isset($_FILES['input_rg']))
          {
             $ext = strtolower(substr($_FILES['input_rg']['name'],-4)); //Pegando extensão do arquivo
             $new_name2 = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
             $dir = './anexos/'; //Diretório para uploads 
             move_uploaded_file($_FILES['input_rg']['tmp_name'], $dir.$new_name2); //Fazer upload do arquivo
             //$corpo .= "<img src='$dir$new_name'width=100px height=100px object-fit:fill>";
          } 
          if($_POST['button'] && isset($_FILES['input_res']))
          {
             $ext = strtolower(substr($_FILES['input_res']['name'],-4)); //Pegando extensão do arquivo
             $new_name3 = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
             $dir = './anexos/'; //Diretório para uploads 
             move_uploaded_file($_FILES['input_res']['tmp_name'], $dir.$new_name3); //Fazer upload do arquivo
             //$corpo .= "<img src='$dir$new_name'width=100px height=100px object-fit:fill>";
          } 

          
      $headers =  "From: $email Reply-to: $email\n";
      $headers .= "Content-Type: multipart/mixed;";
      
  

  
   $mail = new PHPMailer(true);
   $mail -> IsSMTP();
   $mail ->CharSet = 'UTF-8';
   //$mail ->True;
   $mail ->SMTPSecure = "tls";
   $mail->Host = 'smtp.mailtrap.io';
   $mail ->Port = 2525;
   $mail->SMTPAuth = true;
   $mail ->Username = "32cff1d654178b";
   $mail->Password = "f3e5abcd0c3ade";
   $mail->From = "$email";
   $mail->setfrom("elmanodeveloper@gmail.com","GMI DISTRIBUIDORA");
   $mail->FromName = "CADASTRO VIA SITE GMI";
   $mail ->AddAddress($email,$nomecompleto);
   $mail ->WordWrap = 50;
   $mail ->isHTML = true;
   $mail ->Subject = $assunto;
   $mail->Body ='<br/>' . $corpo . '<br/>';
   $mail->addAttachment('./anexos/'. $new_name1);
   $mail->addAttachment('./anexos/'. $new_name2);
   $mail->addAttachment('./anexos/'. $new_name3);
   $mail ->AltBody = "$corpo";

   if($mail->Send()) // Envia o email
 {
  echo "Seus dados foram enviados com sucesso! vamos analisar cuidadosamente e em breve entraremos em contato.";
 } else{
   echo"Erro no envio da mensagem";
 }
  $mail ->clearAllRecipients();
  $mail -> Subject = "$assunto";
  $mail -> AddAddress($email,$nomecompleto);
  $mail -> Body = "$retorno";
  $mail -> AltBody = "$retorno";

  $enviandoCliente = $mail ->Send();

?>