<html>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'conecta.php';
                    $pesquisa = mysqli_query($conn, "SELECT * FROM produto");
                    $row = mysqli_num_rows($pesquisa);
                    if($row > 0){
                        while($registro = $pesquisa->fetch_array()){
                            echo '<tr>';
                            echo '<td>'.$registro['id'].'</td>';
                            echo '<td>'.$registro['nomeproduto'].'</td>';
                            echo '<td>'.$registro['preco'].'</td>';
                            echo '<td>'.$registro['quantidade'].'</td>';
                            echo '</tr>';
                        }
                        echo "</tbody>";
                        echo "</table>";
                    } else {
                        echo "Não há registros!";
                        echo "</tbody>";
                        echo "</table>";
                    }
                ?>
                <a href="rel2.php">Relatório com paginação</a>
    </body>
</html>