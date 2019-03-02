<?php
$login = $_REQUEST['login'];
$senha = $_REQUEST['senha'];

if ($login == "admin" && $senha == "78e0ea") {
	setcookie(admin,"admin");
	header("Location:admin.php");
}

include "conexao.php";
$tbalunos = mysqli_query($conexao,"SELECT * FROM tbalunos");

while ($array = mysqli_fetch_array($tbalunos)) {
	if (($login == $array['login_aluno']) && ($senha == $array['senha_aluno'])){
		setcookie(aluno,"$array[cod_aluno]");
		header("Location: main.php");
	}
}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pronunciation Tips</title>
  </head>
  <body>
  	<div class="container"><br><br><br>
  		<div class="alert alert-info" role="alert">
  Login/Senha Incorretos! <a href="index.php" class="alert-link">Clique aqui para voltar à página de Login</a>.
</div>
  	</div>
  </body>
  </html>