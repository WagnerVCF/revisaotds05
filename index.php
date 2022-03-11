<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Revisão</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <header>
            <center><h1>REVISÃO</h1></center>
            <hr/>
        </header>
        <div class="container-fluid">
            <section>
                <br/>
                <center>
                <div class="col-sm-6">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="SteelBlue" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>&nbsp;<b><font color="SteelBlue">Login</font></b></h4>
                        </div>
                        <div class="card-body">
                            <form action="login.php" method="POST">
                                <div class="form-group">
                                    <label>Login</label>
                                    <input type="text" class="form-control" name="login" placeholder="Insira o seu login" required/>
                                    <br/>
                                    <label>Senha</label>
                                    <input type="password" class="form-control" name="senha" required/>
                                    <br/>
                                    <button type="submit" class="btn btn-outline-primary">Logar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </center>
            </section>
        </div>
        <footer>
            <hr/>
            <center><b>Revisão TCC - TDS05 - 2022</b></center>
        </footer>
    </body>
</html>