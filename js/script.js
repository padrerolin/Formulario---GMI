//Masks
$(document).ready(function() {
    $('#cnpj').mask('99.999.999/9999-99');
    $('#end-cep').mask('99999-999');
    $('#cpf-cliente').mask('999.999.999-99');
    $("$formval").submit(validar);
    });



//Fill dos campos do endereço por CEP

    'use strict';

    const preencherFormulario = (endereco)=>{
      document.getElementById('end_rua').value = endereco.logradouro;
      document.getElementById('end_bairro').value = endereco.bairro;
      document.getElementById('end_estado').value = endereco.uf;
      document.getElementById('end_cidade').value = endereco.localidade;

    }
//Pesquisando CEP automaticamente
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

    //block do campo de isento
    var Isento = document.getElementById('Isento');

       Isento.addEventListener("click", function(){
         if (this.checked){
           $('input[name="registration_state"]').
           val("ISENTO").
           prop('readonly', true);
           //Adicionar o nome ISENTO dentro do value do input
         }else{
           $('input[name="registration_state"]').
           val("").
           prop('readonly', false);
         }
       });
       function toggleReadOnly(bool){
        var inputs = document.getElementsByTagName("input");
        for (var i = 0; i < inputs.length; i++){
          if (inputs[i].name === "registration_state"){  
            inputs[i].readOnly = bool;
          }   
        }
      }

       //Mudar o input ao selecionar o campo outros em cargos

       var role = $('#cliente_cargo');
          if (role.length > 0) {
            role.hide();
            role.closest('div').addClass('combo');
            var select = $('<select/>');
            select.attr('name', role.attr('name'));
            select.attr('class', 'dropdown-select selectpicker');
            var options = [
              '',
              'Proprietário(a)',
              'Diretor(a)',
              'Gerente Geral',
              'Gerente TI',
              'Comprador',
              'Vendedor',
              'Técnico em TI',
              'Financeiro',
              'Outros (especifique)'
            ]; //ALTERAR O METODO DO CARGO
            for (var i in options) {
			var option = $('<option/>');
			option.attr("value", options[i]);
			option.html(options[i]);
			select.append(option);
		}  
            if ($.inArray(role.val(), options) != -1) {
			select.val(role.val())
		}
            var creating = true;
		    select.on('change', function(ev) {
                if ($(this).val() == options[options.length - 1] || (role.val() != "" && $.inArray(role.val(), options) == -1)) {
                    $(this).hide();
                    $(this).attr('disabled', 'disabled');
                    role.closest('div').removeClass('combo');
                    role.show();
                    if (!creating) {
                        role.focus();
                    }
                    creating = false;
                }
            });
            role.after(select);
            select.trigger('change');
            role.on('blur', function(ev) {
                if ($(this).val() == "") {
                    select.removeAttr('disabled');
                    role.hide();
                    select.val("");
                    select.show();
                    role.closest('div').addClass('combo');
                }
            });
      }



