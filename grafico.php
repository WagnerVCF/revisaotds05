<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Produto', 'Vendas'],
          <?php
            include 'conecta.php';
            $sql = "SELECT nomeproduto, vendido FROM produto";
            $consulta = mysqli_query($conn, $sql);
            while($dados = mysqli_fetch_array($consulta)){
                $nomeproduto = $dados['nomeproduto'];
                $vendas = $dados['vendido'];
          ?>
          ['<?php echo $nomeproduto ?>',    <?php echo $vendas ?>],
          <?php } ?>
        ]);

        var options = {
          title: 'Vendas',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 600px; height: 500px;"></div>
  </body>
</html>