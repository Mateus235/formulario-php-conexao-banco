<?php
 if(isset($_POST['submit']))
 {
//     print_r('Nome: ' . $_POST['nome']);
//     print_r('<br>');
//     print_r('Email: '  . $_POST['email']);
//     print_r('<br>');
//     print_r('Senha: '  . $_POST['senha']);
//     print_r('<br>');
//     print_r('Telefone: ' . $_POST['telefone']);
//     print_r('<br>');
//     print_r('Genero: '  . $_POST['genero']);
//     print_r('<br>');
//     print_r('Data de Nascimento: '. $_POST['data_nascimento']);
//     print_r('<br>');
//     print_r('Endereco: ' . $_POST['endereco']);
//     print_r('<br>');
//     print_r('Cidade: '  . $_POST['cidade']);
//     print_r('<br>');
//     print_r('Estado: '  . $_POST['estado']);

    include_once('config.php');

    $nomeCompleto = $_POST['nome'];
    $email = $_POST['email'];
    $senha  = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $data_nascimento = $_POST['data_nascimento'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $result = mysqli_query($conexao,
    "INSERT INTO formulario(nomeCompleto,email,senha,telefone,genero,dataNascimento,endereco,cidade,estado)
    Values('$nomeCompleto','$email', '$senha', '$telefone', '$genero','$data_nascimento','$endereco', '$cidade','$estado')");

        header('Location:  login.php');
        mysqli_close($conexao);
 }



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="stylesforms.css">
</head>
<body>
    <div class="box">
         <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Realize o seu cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Tel</label>
                </div>
                <p>Gênero:</p>
                <div class="inputBox">
                    <input type="radio" name="genero" id="feminino" class="inputUser" required>
                    <label for="Feminino">Feminino</label>
                </div>
                <div class="inputBox">
                    <input type="radio" name="genero" id="masculino" class="inputUser" required>
                    <label for="masculino">Masculino</label>
                </div>
                <div class="inputBox">
                    <input type="radio" name="genero" id="outros" class="inputUser" required>
                    <label for="Outros" >Outros</label>
                </div>
                <br><br>
                <label for="data_nascimento"><b>Data de nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">endereco</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit" />
            </fieldset>


         </form>
    </div>
</body>
</html>