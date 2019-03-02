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

    <title>Exercise 9</title>
  </head>
<body background="blur.jpg">
    <?php include "menu.php";?>
    <div class="container"><br><br>
        <div class="card">
            <div class="card-header">
                <h3>Exercise 9</h3>
            </div>
            <div class="card-body">
                <p class="card-text">Column <b>A</b> shows a word which is stressed on the first syllable. Column <b>B</b> shows a word where the stress falls on the second syllable. Column <b>C</b> shows a word which is stressed on the third one. Listen to the words in the box and classify them in their respective columns.</p>
                <div class="card">
                    <div class="card-body"><center>
                        <strike>consider</strike> - <strike>history</strike> - <strike>seventeen</strike> - dependent - obstacles - library - addictive - realize - connected - medicine</center>
                    </div>
                </div>
                <br>
                <div class="table-responsive">
                    <form class="form">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <th scope="col"><center><b>A</b></center></th>
                        <th scope="col"><center><b>B</b></center></th>
                        <th scope="col"><center><b>C</b></center></th>
                    </thead>
                    <thead class="thead-light">
                        <th scope="col"><center><u>his</u>tory</center></th>
                        <th scope="col"><center>con<u>si</u>der</center></th>
                        <th scope="col"><center>seven<u>teen</u></center></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" required></td>
                            <td><input type="text" class="form-control" required></td>
                            <td><input type="text" class="form-control" required></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" required></td>
                            <td><input type="text" class="form-control" required></td>
                            <td><input type="text" class="form-control" required></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" required></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
            <div class="card-footer">
                <input type="hidden" id="codex" value=9>
                <button class="btn btn-lg btn-outline-info btn-block" type="submit" id="send">Send</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>