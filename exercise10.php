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

    <title>Exercise 10</title>
  </head>
<body background="blur.jpg">
    <?php include "menu.php";?>
    <div class="container"><br><br>
        <div class="card">
            <div class="card-header">
                <h3>Exercise 10</h3>
            </div>
            <div class="card-body">
                <p class="card-text">
                    1. The following words are from the text. In each group there is a word that has a different vowel sound
                    from the other two. Choose it below. Notice that vowel sounds are underlined for you.
                </p>
                <br>
                <div class="table-resposive">
                    <form class="form" method="post">
                    <table class="table table-bordered">
                        <tr>
                            <td>a) p<u>e</u>t</td>
                            <td>
                                <input type="radio" class="form-check-inline" id="a1" name="a" value=0 required>
                                <label class="form-check-label" for="a1">
                                    pl<u>ea</u>sure
                                </label>
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="a2" name="a" value=1 required>
                                <label class="form-check-label" for="a2">
                                    cap<u>a</u>city
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>b) m<u>e</u>at</td>
                            <td>
                                <input type="radio" class="form-check-inline" id="b1" name="b" value=0 required>
                                <lable class="form-check-label" for="b1">
                                    comp<u>a</u>nion
                                </lable>
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="b2" name="b" value=1 required>
                                <lable class="form-check-label" for="b2">
                                    r<u>ea</u>son
                                </lable>
                            </td>
                        </tr>
                        <tr>
                            <td>c) l<u>ea</u>ther</td>
                            <td>
                                <input type="radio" class="form-check-inline" id="c1" name="c" value=0 required>
                                <lable class="form-check-label" for="c1">
                                    f<u>ea</u>r
                                </lable>
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="c2" name="c" value=1 required>
                                <lable class="form-check-label" for="c2">
                                    wh<u>e</u>ther
                                </lable>
                            </td>
                        </tr>
                        <tr>
                            <td>d) l<u>o</u>ve</td>
                            <td>
                                <input type="radio" class="form-check-inline" id="d1" name="d" value=0 required>
                                <lable class="form-check-label" for="d1">
                                    s<u>u</u>ffer
                                </lable>
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="d2" name="d" value=1 required>
                                <lable class="form-check-label" for="d2">
                                    b<u>ou</u>ght
                                </lable>
                            </td>
                        </tr>
                        <tr>
                            <td>e) l<u>i</u>ve</td>
                            <td>
                                <input type="radio" class="form-check-inline" id="e1" name="e" value=0 required>
                                <lable class="form-check-label" for="e1">
                                    qu<u>i</u>te
                                </lable>
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="e2" name="e" value=1 required>
                                <lable class="form-check-label" for="e2">
                                    g<u>i</u>ve
                            </td>
                        </tr>
                        <tr>
                            <td>f) v<u>i</u>tal</td>
                            <td>
                                <input type="radio" class="form-check-inline" id="f1" name="f" value=0 required>
                                <lable class="form-check-label" for="f1">
                                    r<u>i</u>ght
                                </lable>
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="f2" name="f" value=1 required>
                                <lable class="form-check-label" for="f2">
                                    prejud<u>i</u>ce
                                </lable>
                            </td>
                        </tr>
                        <tr>
                            <td>g) d<u>i</u>nner</td>
                            <td>
                                <input type="radio" class="form-check-inline" id="g1" name="g" value=0 required>
                                <lable class="form-check-label" for="g1">
                                f<u>ee</u>l
                                </lable>
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="g2" name="g" value=1 required>
                                <lable class="form-check-label" for="g2">
                                    sp<u>e</u>cies
                                </lable>
                            </td>
                        </tr>
                        <tr>
                            <td>h) all<u>o</u>ws</td>
                            <td>
                                <input type="radio" class="form-check-inline" id="h1" name="h" value=0 required>
                                <lable class="form-check-label" for="h1">
                                    <u>ou</u>rs
                                </lable>
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="h2" name="h" value=1 required>
                                <lable class="form-check-label" for="h2">
                                    w<u>oo</u>l
                                </lable>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <input type="hidden" id="codex" value=10>
                <button class="btn btn-lg btn-outline-info btn-block" type="submit" id="send">Send</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>