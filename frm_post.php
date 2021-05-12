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
								<span> Título do Post</span>	
								<input type = "text" name="txt_titulo" id="txt_titulo" >
							</label>
							
							<label>
								<span>Conteúdo do post</span>
								<textarea  name="txt_conteudo" id="txt_conteudo" rows="30">  </textarea>
							</label>
							
							<label>
								<span>Categoria</span>
								<select name="id_categoria">
									<?php 
										$sql_cat = "SELECT * FROM categoria order by categoria";
										$resultado = mysqli_query($db,$sql_cat);
										
										while($coluna = mysqli_fetch_array($resultado))
										{
											$valor = $coluna[id_categoria];
											
											if ($id_categoria ==$valor)
											{
												 $selecionado = "selected";
											}
											else
											{
												$selecionado ="";
											}
											
											echo "<option value='$valor' $selecionado> $coluna[categoria] </option>";
										}
									
									?>
								</select>
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
							
							
							<input type="hidden" name ="id" value="<?php echo $id; ?>">
							<input type="hidden" name ="txt_nome_imagem" value="<?php echo $linha[img_post]; ?>">
							<input type="hidden" name ="acao" value="<?php if ($acao!=""){echo $acao;}else{echo "Inserir";} ?>">							
							<input type="submit" name= "logar" id="logar" value = "<?php if ($acao!=""){echo $acao;}else{echo "Inserir";} ?>" class="botao" >					
					</fieldset>
				</form>				
			</div>		
		</div>		
</body>
</html>
