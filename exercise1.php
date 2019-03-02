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

    <title>Exercise 1</title>
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

						<form action="verifica1.php" method="post">

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
	  									<input class="form-check-input" type="radio" name="2a" id="2a1" value=1 required>
	  									<label class="form-check-label" for="2a1">need</label>
									</div>

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2a" id="2a2" value=0 required>
									  <label class="form-check-label" for="2a2">dead</label>
									</div> <!-- Close A --><br><br>

									<div class="form-check form-check-inline"><!-- Open B -->
	  									<input class="form-check-input" type="radio" name="2b" id="2b1" value=0 required>
	  									<label class="form-check-label" for="2b1">teeth</label>
									</div> 

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2b" id="2b2" value=1 required>
									  <label class="form-check-label" for="2b2">breath</label>
									</div><!-- Close B --><br><br>

									<div class="form-check form-check-inline"><!-- Open C -->
	  									<input class="form-check-input" type="radio" name="2c" id="2c1" value=0 required>
	  									<label class="form-check-label" for="2c1">food</label>
									</div>

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2c" id="2c2" value=1 required>
									  <label class="form-check-label" for="2c2">flood</label>
									</div><!-- Close C --><br><br>

									<div class="form-check form-check-inline"><!-- Open D -->
	  									<input class="form-check-input" type="radio" name="2d" id="2d1" value=1 required>
	  									<label class="form-check-label" for="2d1">lead</label>
									</div>

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2d" id="2d2" value=0 required>
									  <label class="form-check-label" for="2d2">bread</label>
									</div><!-- Close D --><br><br>

									<div class="form-check form-check-inline"><!-- Open E -->
	  									<input class="form-check-input" type="radio" name="2e" id="2e1" value=1 required>
	  									<label class="form-check-label" for="2e1">level</label>
									</div>

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2e" id="2e2" value=0 required>
									  <label class="form-check-label" for="2e2">evil</label>
									</div><!-- Close E --><br><br>

									<div class="form-check form-check-inline"><!-- Open F -->
	  									<input class="form-check-input" type="radio" name="2f" id="2f1" value=1 required>
	  									<label class="form-check-label" for="2f1">salt</label>
									</div>

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2f" id="2f2" value=0 required>
									  <label class="form-check-label" for="2f2">called</label>
									</div><!-- Close F --><br><br>

									<div class="form-check form-check-inline"><!-- Open G -->
	  									<input class="form-check-input" type="radio" name="2g" id="2g1" value=0 required>
	  									<label class="form-check-label" for="2g1">leaf</label>
									</div>

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2g" id="2g2" value=1 required>
									  <label class="form-check-label" for="inlineRadio2">Jeff</label>
									</div> <!-- Close G --><br><br>

									<div class="form-check form-check-inline"><!-- Open H -->
	  									<input class="form-check-input" type="radio" name="2h" id="2h1" value=1 required>
	  									<label class="form-check-label" for="2h1">wives</label>
									</div>

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2h" id="2h2" value=0 required>
									  <label class="form-check-label" for="2h2">leaves</label>
									</div> <!-- Close H --><br><br>

									<div class="form-check form-check-inline"><!-- Open I -->
	  									<input class="form-check-input" type="radio" name="2i" id="2i1" value=0 required>
	  									<label class="form-check-label" for="2i1">fury</label>
									</div>

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2i" id="2i2" value=1 required>
									  <label class="form-check-label" for="2i2">very</label>
									</div> <!-- Close I --><br><br>

									<div class="form-check form-check-inline"><!-- Open J -->
	  									<input class="form-check-input" type="radio" name="2j" id="2j1" value=0 required>
	  									<label class="form-check-label" for="2j1">parcel</label>
									</div>

									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="2j" id="2j2" value=1 required>
									  <label class="form-check-label" for="2j2">Russell</label>
									</div> <!-- Close J -->

								</div><!-- col -->
							</div><!-- row -->
					</div><!-- card body -->
					<div class="card-footer">
								<input type="hidden" name="codex" value=1>
								<button class="btn btn-lg btn-outline-info btn-block" type="submit">Send</button>
							</div>
						</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>