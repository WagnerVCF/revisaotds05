<html>
    <body>
        <form action="image.php" method="POST" enctype="multipart/form-data">
            <label>Nome</label><br/>
            <input type="text" name="nome"/><br/><br/>
            <label>Imagem</label><br/>
            <input type="file" name="file"/><br/><br/>
            <input type="submit" value="Salvar" name="but_upload"/>
        </form>
        <br/><br/>
        <a href="image2.php">Ver imagens</a>
        <?php
            include 'conecta.php';
            if(isset($_POST['but_upload'])){
                $nome = $_POST['nome'];
                $name = $_FILES['file']['name'];
                $target_dir = "imagem/";
                $target_file = $target_dir . basename($_FILES["file"]["name"]);
                //Seleciona o tipo do arquivo
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                //Valida o tipo de extensão da imagem
                $extensions_arr = array("jpg","jpeg","png","gif");
                //Checar a extensão
                if(in_array($imageFileType,$extensions_arr)){
                    //Upload imagem
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
                        //Grava no banco
                        $query = "INSERT INTO imagem(nome,name) VALUES ('".$nome."','".$name."')";
                        mysqli_query($conn, $query);
                    }
                }
            }
        ?>
    </body>
</html>