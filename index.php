<!DOCTYPE html>
<head>
<link href="formulario.css" rel="stylesheet">
<title>Formulario | GMI </title>
</head>
<body>
<div class="box">
  <form action="">
  <h2 class="tt-vitrine">
			<cite>Cadastro de Revenda</cite>
		</h2>
    <br>
    <form role="form" class="cadastro row" action="/cliente/cadastro" name="client_data" method="post">
    <fieldset class="dadosEmpresaEndereco">
			<h3 class="tt-cadastro">Dados da Empresa</h3>
      
    <div class="inputBox">
      <label for="cnpj">* CNPJ:</label>
      <input type="text" name="cnpj" id="cnpj" value="" class="cnpj form-control"><div class="required-icon" data-toggle="tooltip" data-placement="top" title="Este campo é obrigatório. Por favor, preencher.">
    </div>
    <div class="inputBox">
      <label class="text-right" for="name_corporate">* Razão Social:</label>
      <input type="text" name="name_corporate" id="name_corporate" value="" class="form-control" maxlength="255"><div class="required-icon" data-toggle="tooltip" data-placement="top" title="Este campo é obrigatório. Por favor, preencher.">
    </div>
    <div class="inputBox">
      <label class="text-right" for="name_fancy">* Nome Fantasia:</label>
      <input type="text" name="name_fancy" id="name_fancy" value="" class="form-control" maxlength="255"><div class="required-icon" data-toggle="tooltip" data-placement="top" title="Este campo é obrigatório. Por favor, preencher.">

    </div>
    <div class="inputBox">
      <label class="text-right" for="registration_state">* Inscrição Estadual:</label>
      <input type="text" name="registration_state" id="registration_state" value="" class="form-control" maxlength="255"><div class="required-icon" data-toggle="tooltip" data-placement="top" title="Este campo é obrigatório. Por favor, preencher.">

    </div>
    <div class="inputBox ">
      <label class="isentoBox" for="Isento">Isento</label>
      <div class="inputBox">
      <input type="hidden" name="registration_state_exempted" value="0"><input type="checkbox" name="registration_state_exempted" id="Isento" value="1" class=" form-control">
      </div></div>

    <div class="inputBox">
      <label class="text-right" for="registration_municipal">Inscrição Municipal:</label>
      <input type="text" name="registration_municipal" id="registration_municipal"  value="" class="form-control" maxlength="255">
    </div>

    <div class="inputBox">
      <label class="text-right" for="">* Regime tributário: </label>
      <div class="combo"> 
        <select name="regime_tributario" id="regime_tributario" class="dropdown-select selectpicker">
          <option value="0" label="Selecione">Selecione</option>
          <option value="P" label="Lucro Presumido">Lucro Presumido</option>
          <option value="R" label="Lucro Real">Lucro Real</option>
          <option value="M" label="MEI - Micro Empreendedor Individual">MEI - Micro Empreendedor Individual</option>
          <option value="S" label="Simples">Simples</option>
          <option value="X" label="Super Simples">Super Simples</option>
      </select><div class="required-icon" data-toggle="tooltip" data-placement="top" title="Este campo é obrigatório. Por favor, preencher."></div>
    </div>
    <div class="inputBox">
      <label class="text-right" for="website">Website: </label>
      <input type="text" name="website" id="website" value="" class="form-control" maxlength="255">
    </div>
    </fieldset>
    <fieldset class="dadosEmpresaEndereco">
			<h3 class="tt-cadastro">Endereço</h3>

      <div class="inputBox">
      <label class="text-right" for="cnpj">* CEP:</label>
        <input type="text" name="address[cep]" id="address[cep]" value=""class="cep form-control"><p class="element-description"><a target="_blank" href="http://www.buscacep.correios.com.br/">Consultar CEP</a></p>

    </div>
    <div class="inputBox">
      <label class="text-right" for="address-street">* Endereço:</label>
        <input type="text" name="address[street]" id="address-street" value="" class="form-control" maxlength="255">
    </div>
    <div class="inputBox">
      <label class="text-right" for="address-number">* Número:</label>
        <input type="text" name="address[number]" id="address-number" value="" class="form-control" maxlength="255">
    </div>
    <div class="inputBox">
      <label class="text-right" for="address-complement">* Complemento:</label>
        <input type="text" name="address[complement]" id="address-complement" value="" class="form-control" maxlength="255">
    </div>
    <div class="inputBox">
      <label class="text-right" for="address-neighborhood">* Bairro:</label>
        <input type="text" name="address[neighborhood]" id="address-neighborhood" value="" class="form-control" maxlength="255">
    </div>
    <label class="text-right" for=""> * Estado: </label>
    <div class="combo"><select name="adress[state]" id="adress-state" class=" dropdown-select selectpicker">
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
      </select></div>
    <div class="inputBox">
      <label class="text-right" for="adress-city">* Cidade:</label>
        <input type="text" name="adress[city]" id="adress-city"value="" class="form-control" maxlength="255">

    </div>
    <div class="inputBox">
      <label class="text-right" for="phone_number">* Telefone Comercial:</label>
      <input type="text" name="phone_number" id="phone_number" value="" class="phonenumber form-control">
    </div>
    <div class="inputBox">
      <label class="text-right" for="email">* E-mail NF-e:</label>
      <input type="text" name="email" id="email" value="" class="form-control">
    </div>
      </fieldset>
      <fieldset class="classificacao-set">
          <label class="text-right"><p>Classifique seu negócio: </p></label><label class="text-right">
            <input type="checkbox" name="classificacaoNegocio" id="classificacaoNegocio1" value="1" class="checkboxadjusment">
            Loja Virtual (e-commerce, marketplace)
        </label><label class="text-right">
            <input type="checkbox" name="classificacaoNegocio" id="classificacaoNegocio2" value="2" class="checkboxadjusment">
            Revendedor de TI com foco em consumidor doméstico e pequenas empresas
        </label><label class="text-right">
            <input type="checkbox" name="classificacaoNegocio" id="classificacaoNegocio3" value="3" class="checkboxadjusment">
            Revendedor de TI com foco em Corporativo de médias e grandes empresas
        </label><label class ="text-right">
            <input type="checkbox" name="classificacaoNegocio" id="classificacaoNegocio4" value="4" class="checkboxadjusment">
            Revendedor de Automação Comercial
        </label><label class="text-right">
            <input type="checkbox" name="classificacaoNegocio" id="classificacaoNegocio5" value="5" class="checkboxadjusment">
            Revendedor de Segurança Eletrônica
        </label><label class="text-right">
            <input type="checkbox" name="classificacaoNegocio" id="classificacaoNegocio6" value="6" class="checkboxadjusment">
            Provedor de Internet (ISP)
        </label><label class="text-right">
            <input type="checkbox" name="classificacaoNegocio" id="classificacaoNegocio7" value="7" class="checkboxadjusment">
            Revendedor de Geradores de Energia Solar
        </label><label class="text-right">
            <input type="checkbox" name="classificacaoNegocio" id="classificacaoNegocio8" value="8" class="checkboxadjusment">
            Prestador de Serviços, Suporte em TI, Assistência Técnica
        </label><label class="text-right">
            <input type="checkbox" name="classificacaoNegocio" id="classificacaoNegocio9" value="9" class="checkboxadjusment">
            Integrador Solar
        </label><label class="text-right">
            <input type="checkbox" name="classificacaoNegocio" id="classificacaoNegocio10" value="10" class="checkboxadjusment">
            Outros
        </label>

      </fieldset>
      <fieldset class="classificacaoset">
      <h3 class="tt-cadastro">Dados da pessoa responsável pelas compras e respectivas permissões</h3>

      <div class="cliente-pre-registro">
        <strong>Estaremos juntamente dos dados da sua empresa pré-registrando seus dados pessoais nos nossos sistemas</strong>
      </div>
    <div class="inputBox">
      <label class="text-right" for="contacts-name">* Nome Completo:</label>
      <input type="text" name="contacts[name]" id="contacts-name" value="" class="form-control" maxlength="255">
    </div>
    <div class="inputBox">
      <label class="text-right" for="contacts-cpf"> CPF:</label>
      <input type="text" name="contacts[cpf]" id="contacts-cpf" value="" class="form-control">
    </div>
    <div class="inputBox">
      <label class="text-right" for="contacts-phone_number">* Celular/Whatsapp:</label>
      <input type="text" name="contacts[phone_number]" id="contacts-phone_number" value="" class="phonenumber form-control" data-mask="(99) 99999-9999" minlength="14"> 
    </div>

    <div class="inputBox">
      <label for="cnpj">* Departamento:</label>
      <input type="text" name="contacts[department]" id="contacts-department" value="" class="form-control" maxlength="255">
    </div>
    <input type="hidden" name="contacts[active]" value="1">
    <div class="inputBox">
      <label for="cnpj">* Cargo:</label>
      <input type="text" name="contacts[role]" id="contacts-role" value="" class="form-control" maxlength="255">
    </div>
    <div class="inputBox">
      <label for="cnpj">* Email:</label>
      <input type="text" name="contacts[email]" id="contacts-email" value="" class="form-control">
    </div>
        </form>
    <div class="bto-cancelar">
					<input type="reset" class="bto-submeter bto-float pull-right" value="Cancelar">
				</div>

    <div class="bto-enviar">
					<input type="submit" class="bto-submeter bto-float bto-salvar" value="Enviar cadastro">
				</div>
    

      </fieldset>
      
   
  </form>
</div>

</body>
</html>

</body>
</html>