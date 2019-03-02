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
                    from the other three. Notice that vowel sounds are underlined for you.
                </p>
                <br>
                <div class="table-resposive">
                    <form class="form" method="post">
                    <table class="table table-bordered">
                        <tr>
                            <td>a) thr<u>ea</u>ten</td>
                            <td>
                                <input type="radio" class="form-check-inline" id="a1" name="a" value=0 required>
                                <label class="form-check-label" for="a1">
                                    w<u>ea</u>pon
                                </label>
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="a2" name="a" value=1 required>
                                <label class="form-check-label" for="a2">
                                    qu<u>e</u>stion
                                </label>
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="a3" name="a" value=2 required>
                                <label class="form-check-label" for="a3">
                                    m<u>e</u>rely
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>b) w<u>a</u>ste</td>
                            <td>
                                <input type="radio" class="form-check-inline" id="b1" name="b" value=0 required>
                                <lable class="form-check-label" for="b1">
                                    v<u>a</u>lue
                                </lable>
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="b2" name="b" value=1 required>
                                <lable class="form-check-label" for="b2">
                                    p<u>a</u>triot
                                </lable>
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="b3" name="b" value=2 required>
                                <lable class="form-check-label" for="b3">
                                    n<u>ei</u>ghbors
                                </lable>
                            </td>
                        </tr>
                        <tr>
                            <td>c) q<u>ua</u>rrels</td>
                            <td>
                                <input type="radio" class="form-check-inline" id="c1" name="c" value=0 required>
                                <lable class="form-check-label" for="c1">
                                    res<u>ou</u>rces
                                </lable>
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="c2" name="c" value=1 required>
                                <lable class="form-check-label" for="c2">
                                    gr<u>ou</u>p
                                </lable>
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="c3" name="c" value=2 required>
                                <lable class="form-check-label" for="c3">
                                    enf<u>o</u>rce
                                </lable>
                            </td>
                        </tr>
                        <tr>
                            <td>d) l<u>o</u>ve</td>
                            <td>
                                <input type="radio" class="form-check-inline" id="d1" name="d" value=0 required>
                                <lable class="form-check-label" for="d1">
                                    ab<u>o</u>ve
                                </lable>
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="d2" name="d" value=1 required>
                                <lable class="form-check-label" for="d2">
                                    em<u>o</u>tional
                                </lable>
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="d3" name="d" value=2 required>
                                <lable class="form-check-label" for="d3">
                                    d<u>o</u>ne
                                </lable>
                            </td>

                        </tr>
                        <tr>
                            <td>e) surv<u>i</u>ve</td>
                            <td>
                                <input type="radio" class="form-check-inline" id="e1" name="e" value=0 required>
                                <lable class="form-check-label" for="e1">
                                    desp<u>i</u>ses
                                </lable>
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="e2" name="e" value=1 required>
                                <lable class="form-check-label" for="e2">
                                    ben<u>i</u>gn
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="e3" name="e" value=2 required>
                                <lable class="form-check-label" for="e3">
                                    prejud<u>i</u>ces
                            </td>
                        </tr>
                        <tr>
                            <td>f) <u>u</u>nites</td>
                            <td>
                                <input type="radio" class="form-check-inline" id="f1" name="f" value=0 required>
                                <lable class="form-check-label" for="f1">
                                    sec<u>u</u>rity
                                </lable>
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="f2" name="f" value=1 required>
                                <lable class="form-check-label" for="f2">
                                    destr<u>u</u>ction
                                </lable>
                            </td>
                            <td>
                                <input type="radio" class="form-check-inline" id="f3" name="f" value=2 required>
                                <lable class="form-check-label" for="f3">
                                    h<u>u</u>manity
                                </lable>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <input type="hidden" id="codex" value=11>
                <button class="btn btn-lg btn-outline-info btn-block" type="submit" id="send">Send</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>