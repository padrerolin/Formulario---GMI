<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        
        <link rel="stylesheet" type="text/css" href="formulario.css" media="screen">

        
        <title>Cadastro</title>
</head>
<body>

  <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
  <div>
            <h1 id="titulo">GMI</h1>
            <p id="subtitulo">Insira seus dados</p>
            <br>
        </div>

        <!-- Início do formulário -->
        <form>

        <div class="campo">
                    <label for="nome"><strong> CNPJ:  </strong></label>
                    <input type="text" name="cnpj" id="cnpj" maxlength="39" required>
                </div>

                <div class="campo">
                    <label for="nome"><strong>Nome: </strong></label>
                    <input type="text" name="nome" id="nome" maxlength="39" required>
                </div>

            <div class="campo">
                <label for="email"><strong>Email: </strong></label>
                <input type="email" name="email" id="email" required>
            </div>
            
            <div class="campo">
                <label for="nome"><strong>Fone:  </strong></label>
                <input type="text" name="fone" id="fone" required>
            </div>

            
            <div class="campo">
                <label><strong>...</strong></label>
                <label>
                    <input type="radio" name="devweb" value="frontend" checked>...
                </label>
                <label>
                    <input type="radio" name="devweb" value="backend">...
                </label>
                <label>
                    <input type="radio" name="devweb" value="fullstack">...
                </label>
            </div>

            <!-- Campo de senioridade com 3 opções para escolha (select option) e css de classe "campo" -->
            <div class="campo">
                <label for="senioridade"><strong>...</strong></label>
                <select id="senioridade" required>
                  <option selected disabled value="">Selecione</option>
                  <option>...</option>
                  <option>...</option>
                  <option>...</option>
                </select>
            </div>

            <fieldset class="grupo">
                <!-- Campo de tecnologias para escolha de 1 ou mais opções para marcar (checkbox) e css de classe "campo" -->
                <div id="check">
                    <label><strong>Checkbox</strong></label><br><br>
                    <input type="checkbox" id="tecnologia1" name="tecnologia1" value="t1">
                    <label for="tecnologia1"> ...</label>
                    <input type="checkbox" id="tecnologia2" name="tecnologia2" value="t2">
                    <label for="tecnologia2"> ...</label>
                    <input type="checkbox" id="tecnologia3" name="tecnologia3" value="t3">
                    <label for="tecnologia3"> ...</label>
                    <input type="checkbox" id="tecnologia4" name="tecnologia4" value="t4">
                    <label for="tecnologia4"> ...</label>
                    <input type="checkbox" id="tecnologia5" name="tecnologia5" value="t5">
                    <label for="tecnologia5"> ...#</label>
                    <input type="checkbox" id="tecnologia6" name="tecnologia6" value="t6">
                    <label for="tecnologia6"> ...</label>
                    <input type="checkbox" id="tecnologia7" name="tecnologia7" value="t7">
                    <label for="tecnologia7"> ...</label>
                </div>
            </fieldset>

            <!-- Caixa de texto -->
            <div class="campo">
                <br>
                <label for="experiencia"><strong>teste... </strong></label>
                <textarea rows="6" style="width: 26em" id="experiencia" name="experiencia"></textarea>
            </div>

            <!-- Botão para enviar o formulário -->
            <button class="botao" type="submit" onsubmit="">Concluído</button>            

        </form>
</form>