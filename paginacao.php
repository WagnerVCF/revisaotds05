<html>
<?php 
    //Inicia o código PHP.
    include "conecta.php"; //Chama o arquivo com a conexão ao banco.
    $p = $_REQUEST["p"]; // Pegar a página atual por GET.
    // Verifica se a variável tá declarada, senão deixa na primeira página como padrão.
    if(isset($p)) { $p = $p; } else { $p = 1; }
    // Defina aqui a quantidade máxima de registros por página.
    $qnt = 5; //No caso 20 por página.
    // O sistema calcula o início da seleção, calculando:
    // (página atual * quantidade por página) - quantidade por página
    $inicio = ($p*$qnt) - $qnt;
     // Seleciona no banco de dados com o LIMIT indicado pelos números acima.
    $sql_select = "select * FROM produto limit $inicio, $qnt";
    // Executa a query com mysqli.
    $sql_query = mysqli_query($conn,$sql_select);
    // Faz uma nova seleção no banco de dados semelhante a anterior, mas desta vez sem LIMIT, para pegarmos o número total de registros.
    $sql_select_all = "select * FROM produto";
    // Executa a query das seleções acima.
    $sql_query_all = mysqli_query($conn,$sql_select_all);
    // Gera uma variável com o número total de registros no banco de dados.
    $total_registros = mysqli_num_rows($sql_query_all);
    $num_rows = ($total_registros);
    // Gera outra variável, desta vez com o número de páginas que será precisa.
    // O comando ceil() arredonda "para cima" o valor.
    $pags = ceil($total_registros/$qnt);
    echo ' <!--//Inicia o texto que será impresso na tela.-->
        <div id="dados"><!--//Inicia uma div com a class dados.-->
            <table> <!--//Inicia uma tabela.-->
                <tr> <!--//Cria a linha da tabela.-->
                    <!--//Cria o título do primeiro campo.-->
                    <th>Código</th>
                    <!--//Cria o título do segundo campo.-->
                    <th>Produto</th>
                </tr>';//Fecha a linha dos títulos.
    // Cria um while para pegar as informações do BD para os itens.
    while ($row = $sql_query->fetch_array(MYSQLI_ASSOC)) {
    echo '<!--//Inicia a tabela com dados dinâmicos.-->
                <tr>
                    <!--//Chama o campo código.-->
                    <td style="text-align:center; padding:2px; vertical-align: middle; display: ">' . $row['id'] .'</td>
                    <!--//Chama o campo nome do produto.-->
                    <td style="text-align:center; padding:5px;">' . $row['nomeproduto'] .'</td>
                </tr>';
    }//Fecha o while.
?><!--//Fecha o PHP.-->
    </table>
    </div><!--//Acima fecha a tabela e aqui fecha a div.-->
    <?php //Abre novamente o PHP.
        if($pags > 1){ //Verifica se tem mais de uma página.
            // Número máximos de botões de paginação.
            $max_links = 3;
            // Exibe o primeiro link "primeira página", que não entra na contagem acima(3).
            echo '<a href="paginacao.php?p=1" target="_self">Primeira</a> ';
            // Cria um for() para exibir os 3 links antes da página atual.
            for($i = $p-$max_links; $i <= $p-1; $i++) {
                // Se o número da página for menor ou igual a zero, não faz nada.
                if($i >= 1){//Então chama o link se for 1 ou maior.
                    //Cria o link com o número do indice.
                    echo '<a href="paginacao.php?p='.$i.'" target="_self">'.$i.'</a> ';
                }//Fecha o if.
            }//Fecha o for.
        // Exibe a página atual, sem link, apenas o número
        echo $p." ";
        // Cria outro for(), desta vez para exibir 3 links após a página atual.
        for($i = $p+1; $i <= $p+$max_links; $i++) {
            // Verifica se a página atual é maior do que a última página. Se for, não faz nada.
            if($i > $pags) {
            //faz nada.
            }
            // Se tiver tudo Ok gera os links.
            else {
                echo '<a href="paginacao.php?p='.$i.'" target="_self">'.$i.'</a> ';
            }
        }
        // Exibe o link "última página"
        if($pags <= 0){
            $i=1;
        }
        else{
            $i=$pags;
        }
        echo '<a href="paginacao.php?p='.$i.'" target="_self">&uacute;ltima p&aacute;gina</a> ';   
    }
    echo '</div>';
    ?>
</div><!--//Fecha a div inicial.-->
</html>