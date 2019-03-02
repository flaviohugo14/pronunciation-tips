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
<body background="blur3.jpg">
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
                <form class="form-inline col-sm-11" action="verifica2.php" method="post">
                    <br><br><br>

                    <label class="form-control-label">a) empire&nbsp;&nbsp;</label><select name="2a" class="form-control form-control-sm col-sm-1" required>
                        <option value=0>/i/</option>
                        <option value=1>/ai/</option>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;
                    <br><br><br>

                    <label class="form-control-label">b) sick&nbsp;&nbsp;</label><select name="2b" class="form-control form-control-sm col-sm-1" required>
                        <option value=1>/i/</option>
                        <option value=0>/ai/</option>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;
                    <br><br><br>

                    <label class="form-control-label">c) violence&nbsp;&nbsp;</label><select name="2c" class="form-control form-control-sm col-sm-1" required>
                        <option value=0>/i/</option>
                        <option value=1>/ai/</option>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;
                    <br><br><br>

                    <label class="form-control-label">d) Almighty&nbsp;&nbsp;</label><select name="2d" class="form-control form-control-sm col-sm-1" required>
                        <option value=0>/i/</option>
                        <option value=1>/ai/</option>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;
                    <br><br><br>

                    <label class="form-control-label">e) magnificent&nbsp;&nbsp;</label><select name="2e" class="form-control form-control-sm col-sm-1" required>
                        <option value=1>/i/</option>
                        <option value=0>/ai/</option>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;
                    <br><br><br>

                    <label class="form-control-label">f) survival&nbsp;&nbsp;</label><select name="2f" class="form-control form-control-sm col-sm-1" required>
                        <option value=0>/i/</option>
                        <option value=1>/ai/</option>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;
                    <br><br><br>

                    <label class="form-control-label">g) promised&nbsp;&nbsp;</label><select name="2g" class="form-control form-control-sm col-sm-1" required>
                        <option value=1>/i/</option>
                        <option value=0>/ai/</option>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;
                    <br><br><br>

                    <label class="form-control-label">h) wilderness&nbsp;&nbsp;</label><select name="2h" class="form-control form-control-sm col-sm-1" required>
                        <option value=1>/i/</option>
                        <option value=0>/ai/</option>
                    </select>
            </div>
            <div class="card-footer">
                <input type="hidden" name="codex" value="2">
                <button class="btn btn-lg btn-outline-info btn-block" type="submit">Send</button>
            </form>
            </div>            
        </div>
    </div>
</body>
</html>