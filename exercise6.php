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

    <title>Exercise 6</title>
  </head>
<body background="blur.jpg">
    <?php include "menu.php";?>
    <div class="container"><br><br>
        <div class="card">
            <div class="card-header">
                <h3>Exercise 6</h3>
            </div>
            <div class="card-body">
                <p class="card-text">The words in the box below are from the text <a href="#"><i>Why Can't I Stop Procrastinating?</i></a>. Each of those words rhymes with another one in the statements <b>a</b> to <b>l</b>. Complete the twelve statements with the correct words, as appropriate. Then listen to the complete sentences and check your answers.</p>
                <div class="card">
                    <div class="card-body">
                            <center>rush - task - meow - seeker - bored - busy - tough - through - fruit - reach - seat - derail</center>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <form class="form" method="post">
                    <div class="row">
                    <div class="col-sm-4">
                        a) Heat rhymes with <input type="text" class="form-control" id="a" required><br>
                        b) Brush rhymes with <input type="text" class="form-control" id="b" required><br>
                        c) Female rhymes with <input type="text" class="form-control" id="c" required><br>
                        d) Enough rhymes with <input type="text" class="form-control" id="d" required><br>
                    </div>
                    <div class="col-sm-4">
                        e) Lord rhymes with <input type="text" class="form-control" id="e" required><br>
                        f) Speaker rhymes with <input type="text" class="form-control" id="f" required><br>
                        g) Speech rhymes with <input type="text" class="form-control" id="g" required><br>
                        h) Allow rhymes with <input type="text" class="form-control" id="h" required><br>
                    </div>
                    <div class="col-sm-4">
                        i) Cute rhymes with <input type="text" class="form-control" id="i" required><br>
                        j) True rhymes with <input type="text" class="form-control" id="j" required><br>
                        k) Ask rhymes with <input type="text" class="form-control" id="k" required><br>
                        l) Is he? rhymes with <input type="text" class="form-control" id="l" required><br>
                    </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="hidden" id="codex" value=6>
                <button class="btn btn-lg btn-outline-info btn-block" type="submit" id="send">Send</button>
                <br>
                <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>A</th>
                            <th>B</th>
                            <th>C</th>
                            <th>D</th>
                            <th>E</th>
                            <th>F</th>
                            <th>G</th>
                            <th>H</th>
                            <th>I</th>
                            <th>J</th>
                            <th>K</th>
                            <th>L</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="12">Acertos: <label id="label1"></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Erros: <label id="label2"></label></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            </div>
            </form>
        </div>
    </div>
    <script src="ex6.js"></script>
</body>
</html>