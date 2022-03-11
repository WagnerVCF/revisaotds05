<html>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Imagem</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'conecta.php';
                    $pesquisa = mysqli_query($conn, "SELECT * FROM imagem");
                    $row = mysqli_num_rows($pesquisa);
                    if($row > 0){
                        while($registro = $pesquisa->fetch_array()){
                            $image = $registro['name'];
                            $image_src = "imagem/".$image; //imagem/imagem1.png
                            echo '<tr>';
                            echo '<td>'.$registro['id'].'</td>';
                            echo '<td>'.$registro['nome'].'</td>';
                            echo '<td><img src='.$image_src.'></td>';
                            echo '</tr>';
                            echo '</tbody>';
                            echo '</table>';
                        }
                    } else {
                        echo 'Não existem registros!';
                        echo '</tbody>';
                        echo '</table>';
                    }
                ?>
    </body>
</html>