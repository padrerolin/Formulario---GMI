<?php   /* Passando os dados pro back*/
use mPDF;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once __DIR__. "/vendor/autoload.php";
    
$idTicket = substr(microtime(),0,8);
$idTicket = preg_replace( '#[^0-9]#', '', $idTicket );

    $para ="mail.gmimportacao.com.br";
    $assunto = "[RMA".$idTicket."] Novo chamado GMI Distribuidora";
    
   
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


    $corpo = "<header class='box-vitrine'>
		<h2 class='tt-vitrine'>
			<cite>ANÁLISE CADASTRAL - MAPEAMENTO SIMPLES</cite>
		</h2>
	</header>
    
    <fieldset class='col-md-6'>
    <h3 class='tt-cadastro'>DADOS GERAIS <br><br></h3>
    <div class='row'>
      <div class='col-md-10 col-xs-10 form-group'>
        <label class='text-right' for='razao_social'>Razão Social </label>
          <input type='text' name='razao_social' id='razao_social' value=$razao_social class='form-control'>
      </div>
      <div class='col-md-10 col-xs-10 form-group'>
        <label class='text-right' for='cnpj'>CNPJ </label>
          <input type='text' name='cnpj' id='cnpj' value=$cnpj class='cnpj form-control'>
      </div>
    </div>

    <div class='row'>
      <div class='col-md-10 col-xs-10 form-group'>
        <label class='text-right' for='nome_fantasia'>Nome Fantasia </label>
          <input type='text' name='nome_fantasia' id='nome_fantasia' value=$nome_fantasia class='form-control'>
    </div>
    <div class='col-md-10 col-xs-10 form-group'>
      <label class='text-right' for='inscricao_estadual'>Inscrição Estadual </label>
        <input type='text' name='inscricao_estadual' id='inscricao_estadual' value=$inscricao_estadual class='form-control'>
      </div>
    <div class='col-md-10 col-xs-10 form-group'>
      <label class='text-right' for='inscricao_municipal'>Inscrição Municipal </label>
        <input type='text' name='inscricao_municipal' id='inscricao_municipal' value=$inscricao_municipal class='form-control'>
      </div>
    </div>

    <div class='row'>
    <div class='col-md-10 col-xs-10 form-group'>
      <label class='text-right' for='regime_tributario'>Regime Tributário </label>
        <input type='text' name='regime_tributario' id='regime_tributario' value=$regime_tributario class='form-control'>
  </div>
  <div class='col-md-10 col-xs-10 form-group'>
    <label class='text-right' for='website
    '>Website </label>
      <input type='text' name='website' id='website' value=$website class='form-control'>
    </div>
  <div class='col-md-10 col-xs-10 form-group'>
    <label class='text-right' for='emailNFE'>E-mail NF-e </label>
      <input type='text' name='emailNFE' id='emailNFE' value=$emailNFE class='form-control'>
    </div>
  </div>

  <div class='row'>
  <div class='col-md-10 col-xs-10 form-group'>
    <label class='text-right' for='endereco'>Endereço</label>
      <input type='text' name='endereco' id='endereco' value=$endereco class='form-control'>
  </div>
  <div class='col-md-10 col-xs-10 form-group'>
    <label class='text-right' for='bairro'>Bairro </label>
      <input type='text' name='bairro' id='bairro' value=$bairro class='cnpj form-control'>
  </div>
</div>

<div class='row'>
<div class='col-md-10 col-xs-10 form-group'>
  <label class='text-right' for='cidade'>Cidade </label>
    <input type='text' name='cidade' id='cidade' value=$cidade class='form-control'>
</div>
<div class='col-md-10 col-xs-10 form-group'>
<label class='text-right' for='cep
'>CEP </label>
  <input type='text' name='cep' id='cep' value=$cep class='form-control'>
</div>
<div class='col-md-10 col-xs-10 form-group'>
<label class='text-right' for='fone'>Telefone Comercial </label>
  <input type='text' name='fone' id='fone' value=$fone class='form-control'>
</div>
</div>
</fieldset>
<fieldset class='col-md-12'>
    <h3 class='tt-cadastro'>DOCUMENTOS NECESSÁRIO<br><br></h3>
    <div class='col-md-10 col-xs-10 form-group'>
    <label class='text-right'>
    <input type='checkbox' name='documentos_necessarios[]' id='classificacao_negocio-1' value='1' class='multiCheckboxAdjusment'>
    1. CONTRATO SOCIAL / MEI</label></div>
    <label class='text-right'>
    <input type='checkbox' name='documentos_necessarios[]' id='classificacao_negocio-2' value='2' class='multiCheckboxAdjusment'>
    2. RG/CPF DOS SÓCIOS</label></div>
    <label class='text-right'>
    <input type='checkbox' name='documentos_necessarios[]' id='classificacao_negocio-3' value='3' class='multiCheckboxAdjusment'>
    3. BOLETOS PAGOS</label></div>
    <label class='text-right'>
    <input type='checkbox' name='documentos_necessarios[]' id='classificacao_negocio-4' value='4' class='multiCheckboxAdjusment'>
    4. COMPTE DE ENDEREÇO</label></div>
    <label class='text-right'>
    <input type='checkbox' name='documentos_necessarios[]' id='classificacao_negocio-5' value='5' class='multiCheckboxAdjusment'>
    5. INSCRIÇÃO ESTADUAL</label></div> 
    </fieldset>
    <fieldset class='col-md-12'>
    <h3 class='tt-cadastro'>CLASSIFICAÇÃO DE NEGÓCIO<br><br></h3>
  
    </fieldset>
    <fieldset class='col-md-12'>
    <h3 class='tt-cadastro'>DADOS DO CLIENTE<br><br></h3>
    <div class='row'>
    <div class='col-md-10 col-xs-10 form-group'>
      <label class='text-right' for='nomecompleto'>Nome Completo </label>
        <input type='text' name='nomecompleto' id='nomecompleto' value=$nomecompleto class='form-control'>
  </div>
  <div class='col-md-10 col-xs-10 form-group'>
    <label class='text-right' for='cpf'>CPF </label>
      <input type='text' name='cpf' id='cpf' value=$cpf class='form-control'>
    </div>
  <div class='col-md-10 col-xs-10 form-group'>
    <label class='text-right' for='numerocliente'>Celular/Whatsapp: </label>
      <input type='text' name='numerocliente' id='numerocliente' value=$numerocliente class='form-control'>
    </div>
  </div>

  <div class='row'>
  <div class='col-md-10 col-xs-10 form-group'>
    <label class='text-right' for='departamento'>Departamento</label>
      <input type='text' name='departamento' id='departamento' value=$departamento class='form-control'>
  </div>
  <div class='col-md-10 col-xs-10 form-group'>
    <label class='text-right' for='cargo'>Cargo </label>
      <input type='text' name='cargo' id='cargo' value=$cargo class='form-control'>
  </div>
</div>
<div class='row'>
<div class='col-md-10 col-xs-10 form-group'>
  <label class='text-right' for='email'>Email</label>
    <input type='text' name='email' id='email' value=$email class='form-control'>
</div>
<div class='col-md-10 col-xs-10 form-group'>
  <label class='text-right' for='skype'>Skype </label>
    <input type='text' name='skype' id='skype' value=$skype class='form-control'>
</div>
</div>

  
    </fieldset>";
    
    $corpo .= "<strong> CNPJ:  </strong>$cnpj<br>";
    $corpo .= "<strong> Razão Social:  </strong>$razao_social<br>";
    $corpo .= "<strong> Nome Fantasia:  </strong>$nome_fantasia<br>";
    //fazer verificação se o campo isento esta marcado se tiver anular estadual

    if (isset($_POST['registration_state_exempted']))
    {
      
      $corpo .= "<strong> Usuario isento da inscrição estadual ! </strong><br/>";
    }
    else{
      $corpo .= "<strong> Inscricao Estadual:  </strong>$inscricao_estadual<br>";
    }
    
    $corpo .= "<strong> Regime Tributario:  </strong>$regime_tributario<br>";
    $corpo .= "<strong> Website:  </strong>$website<br>";
    $corpo .= "<strong> CEP:  </strong>$cep<br>";
    $corpo .= "<strong> Endereço:  </strong>$endereco<br>";
    $corpo .= "<strong> Numero da rua:  </strong>$numerorua<br>";
    $corpo .= "<strong> Complemento:  </strong>$complemento<br>";
    $corpo .= "<strong> Bairro:  </strong>$bairro<br>";
    $corpo .= "<strong> Estado:  </strong>$estado<br>";
    $corpo .= "<strong> Cidade:  </strong>$cidade<br>";
    $corpo .= "<strong> Fone:  </strong>$fone<br>";
    $corpo .= "<strong> Email NFE:  </strong>$emailNFE<br>";
    $classificacao = $classifi;
    foreach ($classificacao as $valor){
      $corpo .= "<strong> Classificação do seu negocio:  </strong>$valor<br>";
    }
    $corpo .= "<br><strong> Dados do cliente  </strong><br><br>";
    $corpo .= "<strong> Nome do Cliente:  </strong>$nomecompleto<br>";
    $corpo .= "<strong> CPF do Cliente:  </strong>$cpf<br>";
    $corpo .= "<strong> Celular/Whatsapp:  </strong>$numerocliente<br>";
    $corpo .= "<strong> Departamento do cliente:  </strong>$departamento<br>";
    $corpo .= "<strong> Cargo:  </strong>$cargo<br>";
    $corpo .= "<strong> Email:  </strong>$email<br>";
    $corpo .= "<strong> Skype:  </strong>$skype<br>";

    //Mensagem para o cliente

    $retorno = "$nomecompleto<strong> Seus dados foram armazenados com sucesso,
     nossa equipe estará entrando em contato imediatamente.</strong>";


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
   $mail ->True;
   $mail ->SMTPSecure = "tls";
   $mail->Host = 'smtp.mailtrap.io';
   $mail ->Port = 2525;
   $mail->SMTPAuth = true;
   $mail ->Username = "32cff1d654178b";
   $mail->Password = "f3e5abcd0c3ade";
   $mail->From = "$email";
   $mail->setfrom("nao-responda@gmimportacao.com.br","GMI DISTRIBUIDORA");
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

   //if(!$mail->Send()) // Envia o email
 //{
 //echo "Erro no envio da mensagem";
 //} 
 
 $mpdf = new mPDF();
 $css = file_get_contents("mpdfStyle.css");
 $mpdf->WriteHTML($css,1);

 $mpdf ->WriteHTML($corpo);
 $mpdf ->Output();
 
?>