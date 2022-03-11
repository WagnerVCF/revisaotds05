<html>
    <body>
        <?php
            include 'conecta.php';
            $p = $_REQUEST["p"];
            if(isset($p)){
                $p = $p;
            } else {
                $p = 1;
            }
            $qnt = 5;
            $inicio = ($p*$qnt) - $qnt;
            $sql_select = "SELECT * FROM produto LIMIT $inicio,$qnt";
            $sql_query = mysqli_query($conn, $sql_select);
            $sql_select_all = "SELECT * FROM produto";
            $sql_query_all = mysqli_query($conn, $sql_select_all);
            $total_registros = mysqli_num_rows($sql_query_all);
            $num_rows = ($total_registros);
            $pags = ceil($total_registros/$qnt);
            echo '<div id="dados">
                    <table>
                        <tr>
                            <th>Código</th>
                            <th>Produto</th>
                        </tr>';
            while($row = $sql_query->fetch_array(MYSQLI_ASSOC)){
                echo '<tr>
                        <td>'.$row['id'].'</td>
                        <td>'.$row['nomeproduto'].'</td>';
            }
        ?>
        </table>
        </div>
        <?php
            if($pags > 1){
                $max_links = 3;
                echo '<a href="rel2.php?p=1" target="_SELF">Primeira</a>';
                for($i=$p-$max_links;$i<=$p-1;$i++){
                    if($i >= 1){
                        echo '<a href="rel2.php?p='.$i.'" target="_SELF">'.$i.'</a>';
                    }
                }
                echo $p." ";
                for($i=$p+1;$i<=$p+$max_links;$i++){
                    if($i>$pags){

                    } else {
                        echo '<a href="rel2.php?p='.$i.'" target="_SELF">'.$i.'</a>';
                    }
                }
                if($pags<=0){
                    $i=1;
                } else {
                    $i=$pags;
                }
                echo '<a href="rel2.php?p='.$i.'" target="_SELF">Última Página</a>';
            }
            echo '</div>';
        ?>
        </div>
    </body>
</html>