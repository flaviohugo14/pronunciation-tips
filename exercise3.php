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

    <title>Exercise 3</title>
  </head>
<body background="blur.jpg">
    <?php include "menu.php";?>
    <div class="container"><br><br>
        <div class="card">
            <div class="card-header">
                <h3>Exercise 3</h3>
            </div>
            <div class="card-body">
                <p class="card-text">1.We can find many polysyllabic words in the main text. The table below contains some of them. Listen to those words, notice where the stress falls and check the right boxes. Then listen again and check your answers.</p>
                <br>
                <form class="form-group">
                <table class="table table-striped table-bordered">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col"></th>
                      <th scope="col"><b>Stress on the 1<sup>st</sup> Syllable</b></th>
                      <th scope="col">Stress on Penultimate Syllable</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Population</th>
                      <td><input class="form-control" type="text" name="3a"></td>
                      <td><input class="form-control" type="text" name="3a"></td>
                    </tr>
                    <tr>
                      <th scope="row">Mathematics</th>
                      <td><input class="form-control" type="text" name="3b"></td>
                      <td><input class="form-control" type="text" name="3b"></td>
                    </tr>
                    <tr>
                      <th scope="row">Military</th>
                      <td><input class="form-control" type="text" name="3c"></td>
                      <td><input class="form-control" type="text" name="3c"></td>
                    </tr>
                    <tr>
                      <th scope="row">Profitable</th>
                      <td><input class="form-control" type="text" name="3d"></td>
                      <td><input class="form-control" type="text" name="3d"></td>
                    </tr>
                    <tr>
                      <th scope="row">Correlation</th>
                      <td><input class="form-control" type="text" name="3e"></td>
                      <td><input class="form-control" type="text" name="3e"></td>
                    </tr>
                    <tr>
                      <th scope="row">Biometrics</th>
                      <td><input class="form-control" type="text" name="3f"></td>
                      <td><input class="form-control" type="text" name="3f"></td>
                    </tr>
                  </tbody>
                </table>
                <br><br>
                <p class="card-text">2. In two of the words above the stress falls on the first syllabe. Which are they?</p>
                <input class="form-control" type="text" name="32">
            </div>
            <div class="card-footer">
                <input type="hidden" name="codex" value="3">
                <button class="btn btn-lg btn-outline-info btn-block" type="submit">Send</button>
               </form>
            </div>
        </div>
    </div>
</body>
</html>