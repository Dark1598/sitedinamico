<?php
 include("conexao.php");

 $txt_categoria = $_POST['txt_categoria'];
 $txt_ativo = $_POST['txt_ativo'];

 $cmd=$cn->prepare('INSERT INTO categoria (categoria, cat_ativo) VALUES (:categoria, :cat_ativo)';);
 $cmd->execute(array(':nome' => '$txt_categoria', ':cat_ativo' => '$txt_ativo'));
 var_dump($cmd);
?>