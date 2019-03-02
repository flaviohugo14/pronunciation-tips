<?php
$a = $_POST["2a"];
$b = $_POST["2b"];
$c = $_POST["2c"];
$d = $_POST["2d"];
$e = $_POST["2e"];
$f = $_POST["2f"];
$g = $_POST["2g"];
$h = $_POST["2h"];

$aluno = $_COOKIE['aluno'];
$codex = $_POST['codex'];
$acertos = $a + $b + $c + $d + $e + $f + $g + $h;

$erros = 8 - $acertos;

include "conexao.php";

date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y');

$query = mysqli_query($conexao,"INSERT INTO `tbresultados` (`cod_aluno`, `cod_exercicio`, `acertos`,`data`,`cod_registro`,`erros`) VALUES ('$aluno','$codex','$acertos','$date',NULL,'$erros')");

$nomealuno = mysqli_query($conexao,"SELECT nome_aluno FROM tbalunos WHERE `cod_aluno` = '$aluno'");

$nome_aluno = mysqli_fetch_array($nomealuno);

if ($a == 1) {
	$a1 = " is-valid";
	$a2 = "<div class=valid-feedback>Good!</div>";
}else{
	$a1 = " is-invalid";
	$a2 = "<div class=invalid-feedback>Missed</div>";
}

if ($b == 1) {
	$b1 = " is-valid";
	$b2 = "<div class=valid-feedback>Good!</div>";
}else{
	$b1 = " is-invalid";
	$b2 = "<div class=invalid-feedback>Missed</div>";
}

if ($c == 1) {
	$c1 = " is-valid";
	$c2 = "<div class=valid-feedback>Good!</div>";
}else{
	$c1 = " is-invalid";
	$c2 = "<div class=invalid-feedback>Missed</div>";
}

if ($d == 1) {
	$d1 = " is-valid";
	$d2 = "<div class=valid-feedback>Good!</div>";
}else{
	$d1 = " is-invalid";
	$d2 = "<div class=invalid-feedback>Missed</div>";
}

if ($e == 1) {
	$e1 = " is-valid";
	$e2 = "<div class=valid-feedback>Good!</div>";
}else{
	$e1 = " is-invalid";
	$e2 = "<div class=invalid-feedback>Missed</div>";
}

if ($f == 1) {
	$f1 = " is-valid";
	$f2 = "<div class=valid-feedback>Good!</div>";
}else{
	$f1 = " is-invalid";
	$f2 = "<div class=invalid-feedback>Missed</div>";
}

if ($g == 1) {
	$g1 = " is-valid";
	$g2 = "<div class=valid-feedback>Good!</div>";
}else{
	$g1 = " is-invalid";
	$g2 = "<div class=invalid-feedback>Missed</div>";
}

if ($h == 1) {
	$h1 = " is-valid";
	$h2 = "<div class=valid-feedback>Good!</div>";
}else{
	$h1 = " is-invalid";
	$h2 = "<div class=invalid-feedback>Missed</div>";
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
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Exercise 2</title>
  </head>
<body style="background-color: #20B2AA">
    <?php include "menu.php";?>
    <div class="container"><br><br>
        <div class="card">
            <div class="card-header">
                <h3>Exercise 2</h3>
            </div>
            <div class="card-body">
                <p class="card-text">1. Listen to these words from the text <a href="text2.php"><i>I've Been to the Mountainshop</i></a>. Some of the vowels in those words are underlined. When is the <b>i</b> pronounced /i/ as in <b>children</b> and when is it pronounced /ai/ as in <b>child</b>?<br>Answer below.</p>
                <div class="card">
                    <div class="card-body">
                        <p class="card-text"><b><center>emp<u>i</u>re  -  s<u>i</u>ck  -  v<u>i</u>olence  -  Alm<u>i</u>ghty  -  magn<u>i</u>ficent  -  surv<u>i</u>val  -  prom<u>i</u>sed  -  w<u>i</u>lderness</center></b></p>
                    </div>
                </div>
                <form class="form-group" action="verifica2.php" method="post">
                    <br>

                    <label class="form-control-label">a) empire&nbsp;&nbsp;</label><select name="2a" class="form-control form-control-sm col-sm-1<?=$a1?>" required>
            
                        <option value=1>/ai/</option>
                    </select><?=$a2?>&nbsp;&nbsp;&nbsp;&nbsp;
                    <br>

                    <label class="form-control-label">b) sick&nbsp;&nbsp;</label><select name="2b" class="form-control form-control-sm col-sm-1<?=$b1?>" required>
                        <option value=1>/i/</option>
                      
                    </select><?=$b2?>&nbsp;&nbsp;&nbsp;&nbsp;
                    <br>

                    <label class="form-control-label">c) violence&nbsp;&nbsp;</label><select name="2c" class="form-control form-control-sm col-sm-1<?=$c1?>" required>
                       
                        <option value=1>/ai/</option>
                    </select><?=$c2?>&nbsp;&nbsp;&nbsp;&nbsp;
                    <br>

                    <label class="form-control-label">d) Almighty&nbsp;&nbsp;</label><select name="2d" class="form-control form-control-sm col-sm-1<?=$d1?>" required>
                       
                        <option value=1>/ai/</option>
                    </select><?=$d2?>&nbsp;&nbsp;&nbsp;&nbsp;
                    <br>

                    <label class="form-control-label">e) magnificent&nbsp;&nbsp;</label><select name="2e" class="form-control form-control-sm col-sm-1<?=$e1?>" required>
                        <option value=1>/i/</option>
                       
                    </select><?=$e2?>&nbsp;&nbsp;&nbsp;&nbsp;
                    <br>

                    <label class="form-control-label">f) survival&nbsp;&nbsp;</label><select name="2f" class="form-control form-control-sm col-sm-1<?=$f1?>" required>
                       
                        <option value=1>/ai/</option>
                    </select><?=$f2?>&nbsp;&nbsp;&nbsp;&nbsp;
                    <br>

                    <label class="form-control-label">g) promised&nbsp;&nbsp;</label><select name="2g" class="form-control form-control-sm col-sm-1<?=$g1?>" required>
                        <option value=1>/i/</option>
                       
                    </select><?=$g2?>&nbsp;&nbsp;&nbsp;&nbsp;
                    <br>

                    <label class="form-control-label">h) wilderness&nbsp;&nbsp;</label><select class="form-control form-control-sm col-sm-1<?=$h1?>" required>
                        <option value=1>/i/</option>
                        
                    </select><?=$h2?>
            </div>
            <div class="card-footer">
                <input type="hidden" name="codex" value="2">
	            <center>
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">
	  				<h3>View result</h3>
					</button>
				</center>
            </form>
            </div>            
        </div>
    </div>
    <!-- Modal -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h3 class="modal-title" id="exampleModalLongTitle"><span class="badge badge-dark">Your result</span></h3>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <h4><span class="badge badge-success">Hits</span>:  <span class="badge badge-info"><?=$acertos?></span></h4>
		        <h4><span class="badge badge-danger">Errors</span>:  <span class="badge badge-info"><?=$erros?></span></h4> 
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary"><a href="print.php?nome=<?=$nome_aluno?>">Print</a></button>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
</body>
</html>