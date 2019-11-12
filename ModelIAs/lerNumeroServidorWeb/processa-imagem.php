<?php

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["imagem_upload"]["name"]);
$base_name = basename($_FILES["imagem_upload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST)) {
	if (move_uploaded_file($_FILES["imagem_upload"]["tmp_name"], $target_file)) {
        #echo "The file ". basename( $_FILES["imagem_upload"]["name"]). " has been uploaded.";
        exec('./texto.py ' . $base_name . ' 2>&1', $output);
        session_start();
        $_SESSION["ultimoTexto"] = $output;
        $_SESSION["ultimoFile"] = $target_file;
        #redireciona
        header('Location: index.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>