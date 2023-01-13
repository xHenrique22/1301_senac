<?php

if(isset($_POST['submit']))
{

include_once('config.php');

$nome = $_POST['nome'];
$telefone1 = $_POST['telefone_1'];
$telefone2 = $_POST['telefone_2'];
$email = $_POST['email'];
$email_recu = $_POST['email_recu'];
$data_nasc = $_POST['data_nasc'];
$cidade_nasc = $_POST['cidade_nasc'];
$bairro_nasc = $_POST['bairro_nasc'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$rg_data = $_POST['rg_data'];
$endereco = $_POST['endereco'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$profissao = $_POST['profissao'];
$nivel_escola = $_POST['nivel_escola'];
$estado_civil = $_POST['estado_civil'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];




$result = mysqli_query($conexao, "INSERT INTO 
usuario_cadastro(nome,telefone_1,telefone_2,email,email_recu,data_nasc,cidade_nasc,bairro_nasc,cpf,rg,rg_data,endereco,usuario,senha,profissao,nivel_escola,estado_civil,altura,peso)
values('$nome','$telefone1','$telefone2','$email','$email_recu','$data_nasc','$cidade_nasc','$bairro_nasc','$cpf','$rg','$rg_data','$endereco','$usuario','$senha','$profissao','$nivel_escola','$estado_civil','$altura','$peso')");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
    <link href="style.css" rel="stylesheet">

</head>
<body>
    <form action="index.php" method="POST">
        <div class="box">
        <fieldset class="field">
            <legend class="legend">Cadastre-se</legend>
            <br>
            <label for="nome">Nome</label>
            <br>
            <input type="text"  name="nome" id="nome"  required/>  
            <br>
            <label for="telefone_1">Telefone 1</label>
            <br>
            <input type="tel"  name="telefone_1" id="telefone_1"  required/>  
            <br>
            <label for="telefone_2">Telefone 2</label>
            <br>
            <input type="tel"  name="telefone_2" id="telefone_2"  required/>  
            <br>
            <label for="email">Email</label>
            <br>
            <input type="email" name="email" id="email" required/>
            <br>
            <label for="email_recu">Email de recuperação</label>
            <br>
            <input type="email" name="email_recu" id="email_recu" required/>
            <br>
            <label for="data_nasc">Data de Nascimento</label>
            <br>    
            <input type="date"  name="data_nasc" id="data_nasc"  required/>
            <br>
            <label for="cidade_nasc">Cidade</label>
            <br>    
            <input type="text"  name="cidade_nasc" id="cidade_nasc"  required/>
            <br>
            <label for="bairro_nasc">Bairro</label>
            <br>    
            <input type="text"  name="bairro_nasc" id="bairro_nasc"  required/>
            <br>
            <label for="cpf">CPF</label>
            <br>
            <input type="text" name="cpf" id="cpf" required/>
            <br>
            <label for="rg">Registro Geral</label>
            <br>
            <input type="text" name="rg" id="rg" required/>
            <br>
            <label for="rg_data">Data de emissão (RG)</label>
            <br>
            <input type="date" name="rg_data" id="rg_data" required/>
            <br>
            <label for="endereco">Endereço</label>
            <br>
            <input type="text" name="endereco" id="endereco" required/>
            <br>
            <label for="usuario">Usuario</label>
            <br>
            <input type="text" name="usuario" id="usuario" required/>
            <br>
            <label for="senha">Senha</label>
            <br>
            <input type="password" name="senha" id="senha" required/>
            <br>
            <label for="profissao">Profissão</label>
            <br>
            <input type="text" name="profissao" id="profissao" required/>
            <br>
            <label for="nivel_escola">Nivel de escolaridade</label>
            <br>
            <input type="text" name="nivel_escola" id="nivel_escola" required/>
            <br>
            <label for="estado_civil">Estado civil</label>
            <br>
            <input type="text" name="estado_civil" id="estado_civil" required/>
            <br>
            <label for="altura">Altura</label>
            <br>
            <input type="text" name="altura" id="altura" required/>
            <br>
            <label for="peso">Peso</label>
            <br>
            <input type="text" name="peso" id="peso" required/>
            <br>
            <input type="submit" name="submit" id="submit" class="submit-button"/>
        </fieldset>
        </div>
    </form>

</body>
</html>