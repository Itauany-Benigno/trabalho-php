<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Trabalho Programação Web </title>
</head>
<body>
<style type="text/css">
	body{
	background-image: url("bt2.gif");
	background-size: cover;
	color: grey;

	}
</style>
<body> <h1> Upload de Arquivos <h1> </body>

	<form enctype="multipart/form-data" method="post" action="upload.php">
		<p> Nome da Pasta: <input type="text" name="comodo"><p>
			<!-- <p> Cômodo: 
 		<p><span> Cozinha </span>
 		<input type="radio" name="Cômodo" value="true">
 		<p><span> Quarto </span>
 		<input type="radio" name="Cômodo" value="false">
 		<p><span> Banheiro </span>
 		<input type="radio" name="Cômodo" value= "false">
 	</p> -->
 	<p><input type="file" name="userfile"></p>
 	 <p><button type="submit" name="sub"> Upload </button></p>
	</form>

</html>