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
                            <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="SteelBlue" class="bi bi-bar-chart" viewBox="0 0 16 16">
                            <path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
                            </svg>&nbsp;<b><font color="SteelBlue">Gráfico Produtos Vendidos</font></b></h4>
                        </div>
                        <div class="card-body">
                            <?php    
                                include 'grafico.php';
                            ?>
                        </div>
                    </div>
                </div>
                </center>
            </section>
        </div>
        <hr/>
        <center><h1>Relatório Simples</h1></center>
        <br/><br/>
        <?php
            include 'relsimples.php';
        ?>
        <hr/>
        <hr/>
        <center><h1>Relatório com DIVS</h1></center>
        <br/><br/>
        <?php
            include 'reldiv.php';
        ?>
        <hr/>
        <footer>
            <hr/>
            <center><b>Revisão TCC - TDS05 - 2022</b></center>
        </footer>
    </body>
</html>