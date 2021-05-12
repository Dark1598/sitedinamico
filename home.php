<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Dinâmico <?php echo "| Wellington" ?></title>
</head>
<body>
    <div id= "corpo conteiner-posts-recentes" >
    <h3>:: Posts Recentes</h3>
    <?php
            include "conexao.php";
            $resultado = $cn->query("SELECT * FROM categoria");
            $resultado = $resultado->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultado as $key => $value) {
        ?>
        <div id = "ultimo-post-lancado">
            <small>publicado em 02/03/2017 | 1200 visitas | 300 comentários </small>
            <a href="index.php?link=" alt=""><img src="<?php echo $value['img_post']; ?>" alt=""></a>
            <h1><a href="index.php?="><?php echo $value['titulo_post']; ?></a></h1>
            <p><?php echo $value['descricao_post']; ?></p>
        </div>
        <?php } ?>
    </div>
    
</body>
</html>