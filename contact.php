<?php   /* Passando os dados pro back*/
use mPDF;
require_once __DIR__. "/vendor/autoload.php";
    
    $para ="elmanodeveloper@gmail.com";

   
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
    
    /*Começando o anexo */
    $tmp_name =$_FILES['input_cnpj']['tmp_name'];
    $name = $_FILES['input_cnpj']['name'];
    $size = $_FILES['input_cnpj']['size'];
    $type = $_FILES['input_cnpj']['type'];
    $error = $_FILES['input_cnpj']['error'];

 

    $boundary = md5("random");
    $handle = fopen($tmp_name,"r");
    $content = fread($handle, $size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));
    /*$corpo = "--$boundary\r\n";
    $corpo .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $corpo .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $corpo .= chunk_split(base64_encode($corpo)); 
    $corpo .= "Content-Disposition: attachment; filename=".$name."\r\n";
    $corpo .= "Content-Transfer-Encoding: base64\r\n";
    $corpo .= "X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n"; 
    $corpo .= $encoded_content;
    https://acervolima.com/php-enviar-anexo-com-e-mail/ site pra tentar
    passar o anexo por mail*/

    $corpo = "<strong> Dados da empresa do cliente </strong><br><br>";
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
    //Colocar os checkbox e os combos como campos obrigatorios
    $classificacao = $classifi;
    foreach ($classificacao as $valor){
      $corpo .= "<strong> Classificação do seu negocio:  </strong>$valor<br>";
    }
    $corpo .= "<strong> Nome do Cliente:  </strong>$nomecompleto<br>";
    $corpo .= "<strong> CPF do Cliente:  </strong>$cpf<br>";
    $corpo .= "<strong> Departamento do cliente:  </strong>$departamento<br>";
    $corpo .= "<strong> Cargo:  </strong>$cargo<br>";
    $corpo .= "<strong> Email:  </strong>$email<br>";


   
   

    

          /*Recebendo os anexos*/
          //Colocar os anexos em um IF para confirmar envio deles 
          if($_POST['button'] && isset($_FILES['input_cnpj']))
          {
             $ext = strtolower(substr($_FILES['input_cnpj']['name'],-4)); //Pegando extensão do arquivo
             $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
             $dir = './anexos/CNPJ'; //Diretório para uploads 
             move_uploaded_file($_FILES['input_cnpj']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
          } 
          if($_POST['button'] && isset($_FILES['input_rg']))
          {
             $ext = strtolower(substr($_FILES['input_rg']['name'],-4)); //Pegando extensão do arquivo
             $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
             $dir = './anexos/RG'; //Diretório para uploads 
             move_uploaded_file($_FILES['input_rg']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
          } 
          if($_POST['button'] && isset($_FILES['input_res']))
          {
             $ext = strtolower(substr($_FILES['input_res']['name'],-4)); //Pegando extensão do arquivo
             $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
             $dir = './anexos/compRes'; //Diretório para uploads 
             move_uploaded_file($_FILES['input_res']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
          } 
   
      $headers = "MIME-Version: 1.0\r\n"; 
      $headers .= "Content-Type: multipart/mixed;";
      $headers .= "boundary = $boundary\r\n";
      $headers .=  "From: $email Reply-to: $email\n";
    

    /*$mpdf = new mPDF();
    $mpdf ->WriteHTML($corpo);
    $mpdf ->Output();*/
    

    




    /*Remover o @ para pegar o mail*/
    //Passar os anexos para o mail
    $sentMailResult = @mail($para,$corpo,$headers);

    /*if ($sentMailResult)
    {
       echo "Formulario preenchido com sucesso. ";
       unlink($name);
    }
    else
    {
       die("Por favor preencha o formulario novamente");
    }*/



    
    echo $corpo;

?>