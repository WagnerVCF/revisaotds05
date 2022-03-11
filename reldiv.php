<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <div class="row row-cols-2 row-cols-md-1 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-body">
            <?php
            include 'conecta.php';
            $pesquisa = mysqli_query($conn, "SELECT * FROM produto");
            $row = mysqli_num_rows($pesquisa);
            if($row > 0){
                while($registro = $pesquisa-> fetch_array()){
                    echo '<br/><br/>';
                    echo '<div class="col-sm-6">';
                    echo '<div class="card shadow-sm">';
                        echo '<div class="card-header">';
                            echo '<h4 class="my-0 fw-normal"><b><font color="SteelBlue">'.$registro['nomeproduto'].'</font></b></h4>';
                        echo '</div>';
                        echo '<div class="card-body">';
                            echo 'Código: '.$registro['id'].'<br/>';
                            echo 'Quantidade em estoque: '.$registro['quantidade'].'<br/>';
                            echo 'Preço: R$'.$registro['preco'].'<br/>';
                            echo '<button type="button" class="btn btn-success">Comprar</button>';
                        echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }
            else {
                echo "Não há registros inseridos!!!";
                echo '</tbody>';
                echo '</table>';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>