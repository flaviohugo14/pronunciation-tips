<?php

$a = $_POST["2a"];
$b = $_POST["2b"];
$c = $_POST["2c"];
$d = $_POST["2d"];
$e = $_POST["2e"];
$f = $_POST["2f"];
$g = $_POST["2g"];
$h = $_POST["2h"];
$i = $_POST["2i"];
$j = $_POST["2j"];

$aluno = $_COOKIE['aluno'];
$codex = $_POST['codex'];
$acertos = $a + $b + $c + $d + $e + $f + $g + $h + $i + $j;

$erros = 10 - $acertos;

include "conexao.php";

date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y');

$query = mysqli_query($conexao,"INSERT INTO `tbresultados` (`cod_aluno`, `cod_exercicio`, `acertos`,`data`,`cod_registro`,`erros`) VALUES ('$aluno','$codex','$acertos','$date',NULL,'$erros')");

$nomealuno = mysqli_query($conexao,"SELECT nome_aluno FROM tbalunos WHERE `cod_aluno` = '$aluno'");

$nome_aluno = mysqli_fetch_array($nomealuno);
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- JavaScript (Opcional) -->
    <script type="text/javascript" src="iconwc.js"></script>
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body background="blur.jpg">
	<?php include "menu.php";?>
	<div class="container"><br><br>
		<div class="card">
			<div class="card-header">
				<h3>Exercise 1</h3>
			</div>
			<div class="card-body">
				<p class="card-text">1. The words below can all be found <a href="text1.php">in this text</a>. Listen to those words, paying close attention to the vowel sound in each one.</p>
				<div class="card">
					<div class="card-body">
						<p class="card-text" align="center"><b>lead  -  death  -  blood  -  deed  -  devil  -  fault  -  deaf  -  lives  -  bury  -  muscle</b></p>
					</div>
				</div>
				<br>
				<p class="card-text">2. Choose the word that rhymes with each of these bold words. Listen again to check your answers.</p>
				<div class="card">

					<div class="card-body">

							<div class="row">

								<div class="col">
									a) <b>lead</b> rhymes with<br><br>
									b) <b>death</b> rhymes with<br><br>
									c) <b>blood</b> rhymes with<br><br>
									d) <b>deed</b> rhymes with<br><br>
									e) <b>devil</b> rhymes with<br><br>
									f) <b>fault</b> rhymes with<br><br>
									g) <b>deaf</b> rhymes with<br><br>
									h) <b>lives</b> rhymes with<br><br>
									i) <b>bury</b> rhymes with<br><br>
									j) <b>muscle</b> rhymes with<br><br>
								</div><!-- col -->

								<div class="col">

									<div class="form-check form-check-inline"><!-- Open A -->
	  									<input class="form-check-input" type="radio" name="2a" id="2a1" value=1
	  									<?php
	  									if ($a == 1) {
	  										echo "CHECKED";
	  									}
	  									?>
	  									>
	  									<label class="form-check-label" for="2a2"><span class="badge badge-success">need</span></label>
									</div>

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2a" id="2a2" value=0
									  <?php
	  									if ($a == 0) {
	  										echo "CHECKED";
	  									}
	  									?>
									  >
									  <label class="form-check-label" for="2a2">dead</label>
									  <svg-icon><src href="sprite.svg#si-glyph-checked" /></svg-icon>
									</div> <!-- Close A --><br><br>

									<div class="form-check form-check-inline"><!-- Open B -->
	  									<input class="form-check-input" type="radio" name="2b" id="2b1" value=0
	  									<?php
	  									if ($b == 0) {
	  										echo "CHECKED";
	  									}
	  									?>
	  									>
	  									<label class="form-check-label" for="2b1">teeth</label>
									</div> 

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2b" id="2b2" value=1
									  <?php
	  									if ($b == 1) {
	  										echo "CHECKED";
	  									}
	  									?>
									  >
									  <label class="form-check-label" for="2b2"><span class="badge badge-success">breath</span></label>
									</div><!-- Close B --><br><br>

									<div class="form-check form-check-inline"><!-- Open C -->
	  									<input class="form-check-input" type="radio" name="2c" id="2c1" value=0
	  									<?php
	  									if ($c == 0) {
	  										echo "CHECKED";
	  									}
	  									?>
	  									>
	  									<label class="form-check-label" for="2c1">food</label>
									</div>

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2c" id="2c2" value=1
									  <?php
	  									if ($c == 1) {
	  										echo "CHECKED";
	  									}
	  									?>
									  >
									  <label class="form-check-label" for="2c2"><span class="badge badge-success">flood</span></label>
									</div><!-- Close C --><br><br>

									<div class="form-check form-check-inline"><!-- Open D -->
	  									<input class="form-check-input" type="radio" name="2d" id="2d1" value=1
	  									<?php
	  									if ($d == 1) {
	  										echo "CHECKED";
	  									}
	  									?>
	  									>
	  									<label class="form-check-label" for="2d1"><span class="badge badge-success">lead</span></label>
									</div>

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2d" id="2d2" value=0
									  <?php
	  									if ($d == 0) {
	  										echo "CHECKED";
	  									}
	  									?>
									  >
									  <label class="form-check-label" for="2d2">bread</label>
									</div><!-- Close D --><br><br>

									<div class="form-check form-check-inline"><!-- Open E -->
	  									<input class="form-check-input" type="radio" name="2e" id="2e1" value=1
	  									<?php
	  									if ($e == 1) {
	  										echo "CHECKED";
	  									}
	  									?>
	  									>
	  									<label class="form-check-label" for="2e1"><span class="badge badge-success">level</span></label>
									</div>

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2e" id="2e2" value=0
									  <?php
	  									if ($e == 0) {
	  										echo "CHECKED";
	  									}
	  									?>
	  									>
									  <label class="form-check-label" for="2e2">evil</label>
									</div><!-- Close E --><br><br>

									<div class="form-check form-check-inline"><!-- Open F -->
	  									<input class="form-check-input" type="radio" name="2f" id="2f1" value=1
	  									<?php
	  									if ($f == 1) {
	  										echo "CHECKED";
	  									}
	  									?>
	  									>
	  									<label class="form-check-label" for="2f1"><span class="badge badge-success">salt</span></label>
									</div>

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2f" id="2f2" value=0
									  <?php
	  									if ($f == 0) {
	  										echo "CHECKED";
	  									}
	  									?>
									  >
									  <label class="form-check-label" for="2f2">called</label>
									</div><!-- Close F --><br><br>

									<div class="form-check form-check-inline"><!-- Open G -->
	  									<input class="form-check-input" type="radio" name="2g" id="2g1" value=0
	  									<?php
	  									if ($g == 0) {
	  										echo "CHECKED";
	  									}
	  									?>
	  									>
	  									<label class="form-check-label" for="2g1">leaf</label>
									</div>

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2g" id="2g2" value=1
									  <?php
	  									if ($g == 1) {
	  										echo "CHECKED";
	  									}
	  									?>
	  									>
									  <label class="form-check-label" for="inlineRadio2"><span class="badge badge-success">Jeff</span></label>
									</div> <!-- Close G --><br><br>

									<div class="form-check form-check-inline"><!-- Open H -->
	  									<input class="form-check-input" type="radio" name="2h" id="2h1" value=1
	  									<?php
	  									if ($h == 1) {
	  										echo "CHECKED";
	  									}
	  									?>
	  									>
	  									<label class="form-check-label" for="2h1"><span class="badge badge-success">wives</span></label>
									</div>

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2h" id="2h2" value=0
									  <?php
	  									if ($h == 0) {
	  										echo "CHECKED";
	  									}
	  									?>
									  >
									  <label class="form-check-label" for="2h2">leaves</label>
									</div> <!-- Close H --><br><br>

									<div class="form-check form-check-inline"><!-- Open I -->
	  									<input class="form-check-input" type="radio" name="2i" id="2i1" value=0
	  									<?php
	  									if ($i == 0) {
	  										echo "CHECKED";
	  									}
	  									?>
	  									>
	  									<label class="form-check-label" for="2i1">fury</label>
									</div>

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2i" id="2i2" value=1
									  <?php
	  									if ($i == 1) {
	  										echo "CHECKED";
	  									}
	  									?>
									  >
									  <label class="form-check-label" for="2i2"><span class="badge badge-success">very</span></label>
									</div> <!-- Close I --><br><br>

									<div class="form-check form-check-inline"><!-- Open J -->
	  									<input class="form-check-input" type="radio" name="2j" id="2j1" value=0
	  									<?php
	  									if ($j == 0) {
	  										echo "CHECKED";
	  									}
	  									?>
	  									>
	  									<label class="form-check-label" for="2j1">parcel</label>
									</div>

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2j" id="2j2" value=1
									  <?php
	  									if ($j == 1) {
	  										echo "CHECKED";
	  									}
	  									?>
									  >
									  <label class="form-check-label" for="2j2"><span class="badge badge-success">Russell</span></label>
									</div> <!-- Close J -->

								</div><!-- col -->
							</div><!-- row -->
					</div><!-- card body -->
					<div class="card-footer"><center>
							<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">
  							<h3>View result</h3>
							</button></center>
					</div>
				</div>
			</div>
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
		      </div>
		    </div>
		  </div>
		</div>
	</div>
</body>
</html>