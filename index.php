<!DOCTYPE html>
<head>
<link href="formulario.css" rel="stylesheet">
<title>Formulario | GMI </title>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/additional-methods.min"></script>
<script type="text/javascript" src="js/localization/messages_pt_BR.js"></script>

<!--<script type="text/javascript">
  $(document).ready(function(){
    $('#formval').validate({
      rules:{
        cnpj:{
            required: true
        },
        name_corporate:{
            required: true
        },
        name_fancy:{
            required: true  
        },
        registration_state:{
            required: true
        },
        regime_tributario:{
           required: true
        },
        end_cep:{
          required: true
        },
        end_num:{
          required: true
        },
        end_comp:{
          required: true
        },
        end_bairro:{
          required: true
        },
        fone_comercial:{
          required: true
        },
        emailnfe:{
          required: true,
          email:true
        },
        classificacao_negocio:{
          required: true
        },
        nome_cliente:{
          required: true
        },
        departamento_cliente:{
          required: true
        },
        cliente_cargo:{
          required: true
        },
        cliente_email:{
          required: true,
          email: true
        }
      },
      messages:{

      }
    });
  });-->
</script>

</head>
<body>
  <header id="header" class="header-login">
    <section class="header-content">
      <div class="box">
        <div class="inputBox">
        <img src="imgs/gmilogo.png" alt="GMI Distribuidora">
        </div>
      </div>

    </section>
  </header>


<section class="box">
<header class="box-vitrine">
  <h2 class="tt-vitrine">
			<cite>Registro de Clientes</cite>
	</h2>
</header>
 
    
    <form role="form" id="formval" class="cadastro inputBox" action="contact.php" name="client_data" method="post" enctype="multipart/form-data">
    <fieldset class="dadosEmpresaEndereco">
			<h3 class="tt-cadastro">Dados da Empresa</h3>
      <input type="hidden" name="id" value="" class=" form-control" id="id">
      <input type="hidden" name="person_type" value="J" class=" form-control" id="person_type">
      
    <div class="inputBox form-group">
      <label class="text-right" for="cnpj">* CNPJ:</label>
      <input type="text" name="cnpj" id="cnpj" value="" class="cnpj form-control" autocomplete="off">
      <div class="required-icon" data-toggle="tooltip" data-placement="top" title="Este campo é obrigatório. Por favor, preencher.">
        
       
    </div>
    </div>

    <div class="inputBox form-group">
      <label class="text-right" for="name_corporate">* Razão Social:</label>
      <input type="text" name="name_corporate" id="name_corporate" value="" class="form-control" maxlength="255"><div class="required-icon" data-toggle="tooltip" data-placement="top" title="Este campo é obrigatório. Por favor, preencher.">
 
    </div>
    </div>
    </div>
    <div class="inputBox form-group">
      <label class="text-right" for="name_fancy">* Nome Fantasia:</label>
      <input type="text" name="name_fancy" id="name_fancy" value="" class="form-control" maxlength="255"><div class="required-icon" data-toggle="tooltip" data-placement="top" title="Este campo é obrigatório. Por favor, preencher.">
    
    </div>
    </div>
    </div>

    <div class="inputBox form-group">
        <div class="inscbox-SM form-group inputInscEst">
          <label class="inpInscEstLbl text-right" for="registration_state">* Inscrição Estadual: </label>
          <input type="text" name="registration_state" id="registration_state" value="" class="form-control" maxlength="255">
       
        </div>
    </div>
        </div>
        
        <div class="isentoDivBx form-group checkboxInscEst">
          <label class="isentoLabel text-right" for="Isento">Isento</label>
          <div class="isentoBx">
          <input type="hidden" name=" " value="0">
          <input type="checkbox" name="registration_state_exempted" id="Isento" value="1" class="form-control">
          </div>
          </div>
    </div>
    
    
    <div class="inputBox">
      <div class="inscMuniRegimeTributCidad form-group">
      <label class="text-right" for="registration_municipal">Inscrição Municipal:</label>
      <input type="text" name="registration_municipal" id="registration_municipal"  value="" class="form-control" maxlength="255">
      </div>  
    </div>
    

    <div class="inputBox">
      <div class="inscMuniRegimeTributCidad form-group has-error">
      <label class="text-right" for="">* Regime tributário: </label>
      <div class="combo"> 
        <select name="regime_tributario" id="regime_tributario" class="dropdown-select selectpicker">
          <option value="0" label="Selecione">Selecione</option>
          <option value="Lucro Presumido" label="Lucro Presumido">Lucro Presumido</option>
          <option value="Lucro Real" label="Lucro Real">Lucro Real</option>
          <option value="MEI - Micro Empreendedor Individual" label="MEI - Micro Empreendedor Individual">MEI - Micro Empreendedor Individual</option>
          <option value="Simples" label="Simples">Simples</option>
          <option value="Super Simples" label="Super Simples">Super Simples</option>
      </select>
   
    </div>
      <div class="required-icon" data-toggle="tooltip" data-placement="top" title="Este campo é obrigatório. Por favor, preencher."></div>
    </div>
    </div>
    </div>
    
    <div class="inputBox">
      <label class="text-right" for="website">Website: </label>
      <input type="text" name="website" id="website" value="" class="form-control" maxlength="255">
    </div>
    </fieldset>
    <fieldset class="dadosEmpresaEndereco">
			<h3 class="tt-cadastro">Endereço</h3>

      <div class="inputBox">
        <div class="inputCep form-group cep">
      <label class="text-right" for="end_cep">* CEP:</label>
        <input type="text" name="end_cep" id="end_cep" value=""class="cep form-control" data-mask="99999-999" autocomplete="off"><p class="element-description"><a target="_blank" href="http://www.buscacep.correios.com.br/">Consultar CEP</a></p>
        
    </div>
        </div>
    </div>
    <div class="inputBox form-group">
      <label class="text-right" for="end_rua">* Endereço:</label>
        <input type="text" name="end_rua" id="end_rua" value="" class="form-control" maxlength="255">
      
    </div>
      </div>
    <div class="inputBox">
      <div class="isentoDivBx form-group">
      <label class="text-right" for="end_num">* Número:</label>
        <input type="text" name="end_num" id="end_num" value="" class="form-control" maxlength="255">
     
    </div>
      </div>
      <div class="inscbox-SM form-group">
        <label class="text-right" for="end_comp">* Complemento:</label>
        <input type="text" name="end_comp" id="end_comp" value="" class="form-control" maxlength="255">
      </div>
      </div>
    
    <div class="inputBox">
      <div class="inscbox-SM form-group">
      <label class="text-right" for="end_bairro">* Bairro:</label>
        <input type="text" name="end_bairro" id="end_bairro" value="" class="form-control" maxlength="255">
     
    </div>
      </div>
      <div class="isentoDivBx form-group">
    <label class="text-right" for=""> * Estado: </label>
    <div class="combo">
      <select name="end_estado" id="end_estado" class=" dropdown-select selectpicker">
      <option value="0" label=""></option>
      <option value="AC" label="AC">AC</option>
      <option value="AL" label="AL">AL</option>
      <option value="AM" label="AM">AM</option>
      <option value="AP" label="AP">AP</option>
      <option value="BA" label="BA">BA</option>
      <option value="CE" label="CE">CE</option>
      <option value="DF" label="DF">DF</option>
      <option value="ES" label="ES">ES</option>
      <option value="GO" label="GO">GO</option>
      <option value="MA" label="MA">MA</option>
      <option value="MT" label="MT">MT</option>
      <option value="MS" label="MS">MS</option>
      <option value="MG" label="MG">MG</option>
      <option value="PA" label="PA">PA</option>
      <option value="PB" label="PB">PB</option>
      <option value="PR" label="PR">PR</option>
      <option value="PE" label="PE">PE</option>
      <option value="PI" label="PI">PI</option>
      <option value="RJ" label="RJ">RJ</option>
      <option value="RN" label="RN">RN</option>
      <option value="RS" label="RS">RS</option>
      <option value="RO" label="RO">RO</option>
      <option value="RR" label="RR">RR</option>
      <option value="SC" label="SC">SC</option>
      <option value="SE" label="SE">SE</option>
      <option value="SP" label="SP">SP</option>
      <option value="TO" label="TO">TO</option>
      </select>
    
    </div>
    </div>
      </div>


      </div>
    <div class="inputBox">
      <div class="inscMuniRegimeTributCidad form-group">
      <label class="text-right" for="end_cidade">* Cidade:</label>
        <input type="text" name="end_cidade" id="end_cidade"value="" class="form-control" maxlength="255">
     
    </div>
      </div>

    </div>
    <div class="inputBox form-group">
      <label class="text-right" for="fone_comercial">* Telefone Comercial:</label>
      <input type="text" name="fone_comercial" id="fone_comercial" value="" class="phonenumber form-control">
  
    </div>
    </div>
    <div class="inputBox form-group">
      <label class="text-right" for="emailnfe">* E-mail NF-e:</label>
      <input type="text" name="emailnfe" id="emailnfe" value="" class="form-control">
    
    </div>
    </div>
      </fieldset>
      <fieldset class="classificacao-set">
        <div class="row classificacao-negocio">
          <div class="inscMuniRegimeTributCidad form-group">
          <label class="text-right">* Classifique seu negócio (múltipla escolha):</label>
          <div cla
          ss=""> 
          <label class="text-right">
            <input type="checkbox" name="classificacao_negocio[]" id="classificacaoNegocio1" value="Loja Virtual" class="checkboxadjusment">
            Loja Virtual (e-commerce, marketplace)
          </label>
          <label class="text-right">
            <input type="checkbox" name="classificacao_negocio[]" id="classificacaoNegocio2" value="Revendedor de TI com foco em consumidor doméstico e pequenas empresas" class="checkboxadjusment">
            Revendedor de TI com foco em consumidor doméstico e pequenas empresas
        </label>
        <label class="text-right">
            <input type="checkbox" name="classificacao_negocio[]" id="classificacaoNegocio3" value="Revendedor de TI com foco em Corporativo de médias e grandes empresas" class="checkboxadjusment">
            Revendedor de TI com foco em Corporativo de médias e grandes empresas
        </label>
        <label class ="text-right">
            <input type="checkbox" name="classificacao_negocio[]" id="classificacaoNegocio4" value="Revendedor de Automação Comercial" class="checkboxadjusment">
            Revendedor de Automação Comercial
        </label>
        <label class="text-right">
            <input type="checkbox" name="classificacao_negocio[]" id="classificacaoNegocio5" value="Revendedor de Segurança Eletrônica" class="checkboxadjusment">
            Revendedor de Segurança Eletrônica
        </label>
        <label class="text-right">
            <input type="checkbox" name="classificacao_negocio[]" id="classificacaoNegocio6" value="Provedor de Internet (ISP)" class="checkboxadjusment">
            Provedor de Internet (ISP)
        </label>
        <label class="text-right">
            <input type="checkbox" name="classificacao_negocio[]" id="classificacaoNegocio7" value="Revendedor de Geradores de Energia Solar" class="checkboxadjusment">
            Revendedor de Geradores de Energia Solar
        </label>
        <label class="text-right">
            <input type="checkbox" name="classificacao_negocio[]" id="classificacaoNegocio8" value="Prestador de Serviços, Suporte em TI, Assistência Técnica" class="checkboxadjusment">
            Prestador de Serviços, Suporte em TI, Assistência Técnica
        </label>
        <label class="text-right">
            <input type="checkbox" name="classificacao_negocio[]" id="classificacaoNegocio9" value="Integrador Solar" class="checkboxadjusment">
            Integrador Solar
        </label>
        <label class="text-right">
            <input type="checkbox" name="classificacao_negocio[]" id="classificacaoNegocio10" value="Outros" class="checkboxadjusment">
            Outros
        </label>
          </div>
        </div>
        </div>

      </fieldset>
      <fieldset class="classificacaoset">
      <h3 class="tt-cadastro">Dados da pessoa responsável pelas compras e respectivas permissões</h3>

      <div class="cliente-pre-registro">
        <strong>Estaremos juntamente dos dados da sua empresa pré-registrando seus dados pessoais nos nossos sistemas:</strong>
      </div>
    <div class="inputBox">
        <div class="inscbox-SM form-group">
          <label class="text-right" for="nome_cliente">* Nome Completo:</label>
          <input type="text" name="nome_cliente" id="nome_cliente" value="" class="form-control" maxlength="255">
       
    </div>
        </div>
        <div class="ctCpf form-group">
          <label class="text-right" for="cpf_cliente"> CPF:</label>
          <input type="text" name="cpf_cliente" id="cpf_cliente" value="" class="form-control"data-mask="999.999.999-99" minlength="14" autocomplete="off">
        </div>
    </div>
   
    <div class="inputBox">
      <div class="celDepCarg form-group">
      <label class="text-right" for="celular_cliente">* Celular/Whatsapp:</label>
      <input type="text" name="celular_cliente" id="celular_cliente" value="" class="phonenumber form-control" data-mask="(99) 99999-9999" minlength="14" autocomplete="off"> 
    
    </div>
    </div>
      <div class="celDepCarg form-group">
      <label class="text-right" for="departamento_cliente">* Departamento:</label>
      <input type="text" name="departamento_cliente" id="departamento_cliente" value="" class="form-control" maxlength="255">
      </div>
      <div class="celDepCarg form-group">
      <label class="text-right" for="cliente_cargo">* Cargo:</label>
      <div class="combo">
        <input type="text" name="cliente_cargo" id="cliente_cargo" value="" class="form-control" maxlength="255" style="display: none;">
        <select name="cliente_cargo" id="cliente_cargo" class="dropdown-select selectpicker">
            <option value="0" label=""></option>
            <option value="Proprietário(a)">Proprietário(a)</option>
            <option value="Diretor(a)">Diretor(a)</option>
            <option value="Gerente Geral">Gerente Geral</option>
            <option value="Gerente TI">Gerente TI</option>
            <option value="Comprador">Comprador</option>
            <option value="Técnico em TI">Técnico em TI</option>
            <option value="Financeiro">Financeiro</option>
            <option value="Outros"></option>
        </select>
      </div>
      
      </div>
    </div>


    <input type="hidden" name="contactsAactive" value="1">
    <div class="inputBox">
    <div class="dadosEmpresaEndereco form-group has-error">
      <label class="text-right" for="">* Email:</label>
      <input type="text" name="cliente_email" id="cliente_email" value="" class="form-control">
  
    </div>
    </div>
      <div class="celDepCarg form-group">
      <label class="text-right"for="cliente_skype"> Skype:</label>
      <input type="text" name="cliente_skype" id="cliente_skype" value="" class="form-control" maxlength="255">
      </div>
    </div>
    </fieldset>
  <div class="inputBox separaBotoes">
    <div class="btoCanEnv">
					<input type="reset" class="bto-submeter bto-float pull-right" value="Cancelar">
		</div>

    <div class="btoCanEnv">
					<input type="submit" class="bto-submeter bto-float bto-salvar" value="Enviar cadastro">
		</div>
  </div>
    
      </div>
      <!-- INICIO DOS ANEXOS -->
      <div class="anexarArquivos terms-checks">
        <div class="classificacao-set form-group">
          <label for="arqvCnpj" class="arqvClass">Insira seu cartão CNPJ: 
          <img src="https://cdn3.iconfinder.com/data/icons/glypho-generic-icons/64/action-upload-alt-512.png" style="width: 20px" />
          </label>
          <input id="arqvCnpj"type="file" name="input_cnpj" placeholder="Insira um arquivo" multiple accept=".image/*,.pdf" style="display: none">
        </div>
      </div>
      <div class="anexarArquivos terms-checks">
        <div class="classificacao-set form-group">
          <label for="arqvCPF" class="arqvClass">Insira seu RG/CPF: 
          <img src="https://cdn3.iconfinder.com/data/icons/glypho-generic-icons/64/action-upload-alt-512.png" style="width: 20px" />
          </label>
          <input id="arqvCPF"type="file" name="input_rg" placeholder="Insira um arquivo" multiple accept=".image/*,.pdf" style="display: none">
        </div>
      </div>
      <div class="anexarArquivos terms-checks">
        <div class="classificacao-set form-group">
          <label for="arqvRes" class="arqvClass">Insira seu Comprovante : 
          <img src="https://cdn3.iconfinder.com/data/icons/glypho-generic-icons/64/action-upload-alt-512.png" style="width: 20px" />
          </label>
          <input id="arqvRes"type="file" name="input_res" placeholder="Insira um arquivo" multiple accept=".image/*,.pdf" style="display: none">
        </div>
      </div>
  
   
      </form>
      </section>  
    <!-- RODAPE -->
    <!--<footer id="rodape" class="rodape">
      
      
      <div class="colunas">
      <div class="box">
      <div id="conteudo-base">
        <div class="content">
          <img src="imgs/gmicadeado.png"style="float: left; width: 88px; height: 88px; display: inline;">
          <span style="font-family: Arial;"></span>
          <p style="color: white; font-size: 17px; float: left; display: inline;">
          <span style="font-family: Arial;">COMPRA 100%</span>
          <br>
          <span style="font-family: Arial;">SEGURA</span>
          </p>
          <img src="imgs/gmicaminhao.png" style="float: left; width: 88px; height:88px; display: inline;">
          <span style="font-family: Arial;"></span>
          <p style="color: white; font-size: 17px; float: left; display: inline;">
          <span style="font-family: Arial;"> FRETE GRÁTIS PARA O</span>
          <br>
          <span style="font-family: Arial;">NORTE E NORDESTE</span>  
        </p>
        <span style="font-family: Arial;"></span>
        <img src="imgs/gmientrega.png" style="float: left; width: 88px; height: 88px; display: inline;">
          <span style="font-family: Arial;"></span>
          <p style="color: white; font-size: 17px; float: left; display: inline;">
          <span style="font-family: Arial;">ENTREGA</span><br>
          <span style="font-family: Arial;"> RÁPIDA</span>
        </p>
        <span style="font-family: Arial;"></span>
        <img src="imgs/gmibanco.png"
        style="float: left; width: 88px; height: 88px; display: inline;">
        <span style="font-family: Arial;"></span>
        <p style="color: white; font-size: 17px; float: left; display: inline;">
        <span style="font-family: Arial;">MIX COM MAIS</span><br>
        <span style="font-family: Arial;"> DE 10 MIL ITENS</span>
      </p>
      
      </div>
      </div>
      
        <div class="col">
          <div class="item-col">
            <div id="col-conteudo">
              <p>
              <img src="imgs/gmimercado.png" data-filename="rodape-comercio.png" style="width: 48px;">
              </p>
              <p class="footerDescColor">
                <b>
                GM COMÉRCIO E
                <br>
                IMPORTAÇÃO LTDA
                <br>
                </b>
              </p>
                <p class="footerGrey">
                RUA SEVERINO LUIZ DE
                <br>
                FRANÇA, 211
                <br>
                58102-600, CABEDELO
                <br>
                BRASIL
              </p>
              <p class="footerDescColor">
                <b>TELEVENDAS:</b>
              </p>
              <p class="footerGrey">

                  (83) 3023-9590
              </p>
              <p class="footerDescColor">
                <b>HORÁRIO DE ATENDIMENTO:</b>
              </p>
                <p class="footerGrey">
                SEGUNDA-FEIRA A QUINTA-FEIRA,
                <br>
                DAS 8H ÀS 18H
                  
                SEXTA-FEIRA DAS 8H ÀS 17H
              </p>
              <p class="footerDescColor">
                <b>E-MAIL / SKYPE</b>
              </p>
              <p class="footerGrey">
                
                CONTATO@GMIMPORTACAO.COM.BR
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="item-col">
            <div id="col-conteudo">
              <p></p>
              <p><img src="imgs/gmidinheiro.png" data-filename="rodape-pagamento.png" style="width: 48px;">
              </p>
              <p class="footerGrey">
                <b>
                  FORMAS DE PAGAMENTO
                  <br>
                  CARTÕES DE CRÉDITO:
                </b>
              </p>
              <p>
                <img src="imgs/gmicartoesbandeiras.png" data-filename="pagamentos-1.png" style="width: 302.29 6px; height: 36.5312px;">
                <b>
                  <br>
                </b>
              </p>
              <p class="footerGrey">
                "Para compras via cartão de crédito é"
                <br>
                "necessário ter um cartão cadastrado."
              </p>
              <a href="/conteudo/informacoes_formas_de_pagamento/41" style="text-decoration: underline;">Clique aqui e saiba mais.</a>
              <p></p>
              <p>
                <br>
              </p>
              <p class="footerGrey">
                BOLETO BANCÁRIO
              </p>
              <p>
                <img src="imgs/gmibandeirasboleto.png" data-filename="bancos_GMI_icone_horizontal.png" style="width: 124px;">
              </p>
              <p>
              <img src="imgs/gmicheque.png" data-filename="pagamentos-3.png" style="width: 68.4773px; height: 48.3906px;">
              <br>  
            </p>
            <p></p>
            </div>
          </div>
        </div>
      </div>
        <div class="col">
          <div class="item-col">
          <p> </p>  
          <p>
            <img src="imgs/gmiemg.png" data-filename="rodape-servicos.png" style="width: 48px;">
            </p>
            <h3>Servicos</h3>
            <nav>
              <ul>
                <li>
                  <h2 class="footerGrey">
                    <a href="/contato" title="Fale Conosco">
                    Fale Conosco
            </a>
            </h2></li></ul></nav>
          </div>
          <div class="item-col">
            <h3>Institucional</h3>
            <nav>
              <ul>
                <li>
                  <h2>
                  <a href="/conteudo/politica_de_privacidade/40" title="Política de Privacidade" target="_blank">
            Política de Privacidade
        </a>
                  </h2>
                </li>
                <li>
                  <h2>
                  <a href="/conteudo/quem_somos/30" title="Quem Somos" target="_blank">
            Quem Somos
              </a>
                  </h2>
                </li>
                <li>
                  <h2>
                  <a href="/conteudo/filiais/45" title="Filiais">
            Filiais
        </a>
                  </h2>
                </li>
                <li>
                  <h2>
                  <a href="https://www.gmimportacao.com.br/rma/" title="Institucional" target="_blank">
            Suporte/RMA
        </a>
                  </h2>
                </li>
              </ul>
            </nav>
          </div>
          
        </div>
        <div class="col">
          <div class="item-col">
            <div id="col-conteudo">
              <p>
                <b>
                  SIGA-NOS
                </b>
              </p>
              <p>
                <a href="https://www.facebook.com/gmidistribuidora" target="_blank">
                  <img src="imgs/gmifacebook.png" data-filename="facebook-4-32.png"style="width: 32px; margin-right: 5px;">
                </a>
                <a href="https://twitter.com/gmi_dist" target="_blank">
                  <img src="imgs/gmitwitter.png" data-filename="twitter-4-32.png" style="width: 32px; margin-right: 5px;">
                </a>
                <a href="https://www.instagram.com/gmidistribuidora/" target="_blank">
                  <img src="imgs/gmiinstagram.png" style="width: 38px; height: 38px;">
                </a>

              </p>
            </div>
          </div>
        </div>
      </div>

    </footer>-->

    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.js"></script>
    <script type="text/javascript">
    
      $(document).ready(function() {
        $('#cnpj').mask('99.999.999/9999-99');
        $('#end-cep').mask('99999-999');
        $('#cpf-cliente').mask('999.999.999-99');
        });
    </script>
    <script>
      'use strict';

      const preencherFormulario = (endereco)=>{
        document.getElementById('end_rua').value = endereco.logradouro;
        document.getElementById('end_bairro').value = endereco.bairro;
        document.getElementById('end_estado').value = endereco.uf;
        document.getElementById('end_cidade').value = endereco.localidade;

      }

      const pesquisarCep= async() =>{
        const cep = document.getElementById('end_cep').value; 
        const url = `http://viacep.com.br/ws/${cep}/json/`;
        const dados = await fetch(url);
        const endereco = await dados.json();
        if (endereco.hasOwnProperty('erro')){
          document.getElementById('end_rua').value = 'CEP não encontrado !';
        }else{
          preencherFormulario(endereco);
        }
        
      
      }

      document.getElementById('end_cep').addEventListener('focusout',pesquisarCep);
    </script>
    

</body>
</html>

</body>
</html>