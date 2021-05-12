<?php 
	include "conexao.php";
	

if (isset($_GET['acao'])){ 
    $acao = $_GET['acao'];
} else{$acao = '';} 

if ($acao !=""){
	
	$sql = "SELECT * FROM post WHERE id_post = '$id'";
	
	$qry = mysqli_query($db,$sql);	
	$linha = mysqli_fetch_array($qry);

	$id_categoria = $linha[id_categoria];	
} 
  
?>

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Criando um site completo </title>
<link href="estilo-admin.css" type = "text/css" rel="stylesheet" media="all" >


</head>	
<body>
		<div id="box-cadatro">
			<div id="formulario-maior">
				<form id ="frmpost" name="frmpost" enctype="multipart/form-data" method="post" action="op_post.php" >
					<fieldset>
						<legend> Cadastro de Post</legend>	
							<label>
								<span>Categoria</span>
								<select name="txt_categoria" id="txt_categoria"></select>
							</label>			
							<label>
								<span> Título do Post</span>	
								<input type = "text" name="txt_titulo" id="txt_titulo" >
							</label>
							
							<label>
								<span>Conteúdo do post</span>
								<input type = "text" name="txt_conteudo" id="txt_conteudo">  </input>
							</label>
							
							<label>
								<span>Escolha a imagem</span>
								<input type="text" name="txt_imagem">
							</label>
							<label>
								<span>Data do post</span>
								<input type="text" name="txt_data" id="txt_data" >
							
							</label>
							
							<label>
								<span>ativo</span>
								<input type="text" name="txt_ativo" id="txt_ativo" >						</label>
							
													
							<input type="submit" value = "Cadastrar" class ="botao" >					
					</fieldset>
				</form>				
			</div>		
		</div>		
</body>
</html>