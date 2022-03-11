<html>
<form method="post" action="imagem.php" enctype='multipart/form-data'>
    <label>Nome</label><br/>
    <input type="text" name="nome"/><br/><br/>
    <label>Imagem</label><br/>
    <input type='file' name='file' /><br/><br/>
    <input type='submit' value='Salvar' name='but_upload'>
</form>
<br/><br/>
<a href="imagem2.php">Ver Imagens</a>
<?php
include 'conecta.php';

if(isset($_POST['but_upload'])){
  $nome = $_POST['nome'];
  $name = $_FILES['file']['name'];
  $target_dir = "imagens/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
     // Upload file
     if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
        // Insert record
        $query = "insert into imagem(nome,name) values('".$nome."','".$name."')";
        mysqli_query($conn,$query);
     }

  }
 
}
?>
</html>