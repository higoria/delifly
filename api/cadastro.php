<?php
require_once 'config.php';
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

function validarInputsUsuario($input)
{ //função para validar dados enviados pelo form.
  global $conexao;
  $var = mysqli_escape_string($conexao, $input);
  $var = htmlspecialchars($var);
  return $var;
}


if (isset($_POST['submitCadastro'])) {
  $nome = validarInputsUsuario($_POST['nome']);
  $email = validarInputsUsuario($_POST['email']);
  $tel = validarInputsUsuario($_POST['tel']);
  $senha = validarInputsUsuario($_POST['senha']);

  $comandSQL = "INSERT INTO usuarios 
  (nome,email,telefone,senha) 
  VALUES 
  ('$nome','$email','$tel','$senha')
  ";

  if (mysqli_query($conexao, $comandSQL)) {
    $_SESSION['msg'] = "Cadastrado com sucesso.";
    $_SESSION['nomeUsuario'] = $nome;
  } else {
    $_SESSION['msg'] = "Erro ao cadastrar.";
  }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/luckiest-guy" rel="stylesheet">
  <link rel="stylesheet" href="./src/css/imports.css">
  <title>Cadastro | Delifly</title>
</head>

<body class="body-cadastro">
  <div class="spanMsgDB">
    <h1 class="h1-mgs-db">
      <?php
      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
      }
      ?>
    </h1>
  </div>
  <div class="box">
    <div class="img-box">
      <img src="src/imgs/loginIMG.svg">
    </div>
    <div class="form-box">
      <div class="titulo-voltar-cadastro">
        <h2>Criar Conta</h2>
        <a href="index.php">
          <h3>Voltar</h3>
        </a>
      </div>
      <p> Já é um membro? <a href="#"> Login </a> </p>
      <form action="cadastro.php" method="POST">
        <div class="input-group">
          <label for="nome">Primeiro nome</label>
          <input name="nome" type="text" id="nome" placeholder="Digite o seu nome completo" required>
        </div>

        <div class="input-group">
          <label for="email">E-mail</label>
          <input name="email" type="email" id="email" placeholder="Digite o seu email" required>
        </div>

        <div class="input-group">
          <label for="telefone">Telefone</label>
          <input name="tel" type="tel" id="telefone" placeholder="Digite o seu telefone" required>
        </div>

        <div class="input-group w50">
          <label for="senha">Senha</label>
          <input name="senha" type="password" id="senha" placeholder="Digite sua senha" required>
        </div>

        <div class="input-group w50">
          <label for="Confirmarsenha">Confirmar Senha</label>
          <input type="password" id="Confirmarsenha" placeholder="Confirme a senha" required>
        </div>

        <div class="input-group">
          <button type="submit" name="submitCadastro">Cadastrar</button>
        </div>

      </form>
    </div>
  </div>
  <script type="module" src="./src/js/main.js"></script>
</body>

</html>