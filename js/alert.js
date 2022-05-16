
//Adicionando TAG has-error nos inputs
      $(function(){
        $.validator.setDefaults({
          errorClass: 'help-block',
          highlight: function(element){
            $(element)
            .closest('.form-group')
            .addClass('has-error');
        },
        unhighlight: function(element){
            $(element)
            .closest('.form-group')
            .removeClass('has-error');
        },
        errorPlacement: function(error,element){
          if (element.prop('type')=== 'checkbox'){
            error.insertAfter(element.parent());
          } else {
            error.insertAfter(element);
          }
        }
      });
   

$('#formval').validate({
  
    rules:{
      "#arqvCnpj":{
        required:true
      },
      "classificacao_negocio":{
        required:true
      },
      "cliente_cargo":{
        required:true
      },
      "end_estado":{
        required:true
      },
      "regime_tributario":{
        required:true
      },
      "input_cnpj":{
        required:true,
        
      }
     
      },
      messages:{
        "#arqvCnpj":{
          required:""
        },
        "cnpj":{
          required:""
        },
        "name_corporate":{
          required:""
        },
        "name_fancy":{
          required:""
        },
        "registration_state":{
          required: ""
        },
        "regime_tributario":{
          required:""
        },
        "end_cep":{
          required:""
        },
        'end_rua':{
          required:""
        },
        'end_num':{
          required:""
        },
        'end_bairro':{
          required:""
        },
        'end_estado':{
          required:""
        },
        'end_cidade':{
          required:""
        },
        'fone_comercial':{
          required:""
        },
        'nome_cliente':{
          required:""
        },
        'cpf_cliente':{
          required:""
        },
        'cliente_email':{
          required:"",
          email:""
        },
        'emailnfe':{
          required:"",
          email:""
        },
        'celular_cliente':{
          required:""
        },
        'departamento_cliente':{
          required:""
        },
        'classificacao_negocio[]':{
          required:""
        }
 
    }
  })
  
//Disparando alert
$('#button').click(function(){
    if ($('#formval').valid()){
      return true;
    }else{
      document.getElementById("alert").style.display ="block"; //ativar o display da div
      $('.arqvClass').css('border-color','red');
    }
  });
});
//Alert para os anexos







//Alert para checkbox


      
     