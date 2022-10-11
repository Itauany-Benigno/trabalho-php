<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Galeria Imoveis</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<style >
	[class*="col"]{
			border: 2px solid blue;
			border-radius: 7px;
			height: 33.3vh;
			width: 25vw;
			color: black;
			/*margin: 200px;*/
		
		}
		.container{
			display:  grid;
		 grid-row-gap: 30px;
		}
		.row{
			display: grid;
			grid-template-columns:auto auto auto;
		}
			/*	body{
			background: url();
			width: 90vw;
			height: 90vh;
           
			background-size: cover;
		}*/

		#a1{
			background-image: url("imgs/banheiro1.png");
		}
		#a2{
			background-image: url("imgs/banheiro2.jpg");
		}
		#a3{
			background-image: url("imgs/banheiro3.jpg");
		}
		#a4{
			background-image: url("imgs/cozinha1.jpg");
		}
		#a5{
			background-image: url("imgs/cozinha2.jpg");
		}
		#a6{
			background-image: url("imgs/cozinha3.jpg");
		}
		#a7{
			background-image: url("imgs/quarto1.jpg");
		}
		#a8{
			background-image: url("imgs/quarto2.jpg");
			
		}
		#a9{
			background-image: url("imgs/quarto3.jpg");
		}
</style>
<div class="container">
<div class="row">
    <div class="col" id="a1">banheiro1</div>
    <div class="col" id="a2">banheiro2</div>
    <div class="col" id="a3">banheiro3</div>
    </div>
    <div class="container">
  <div class="row">
     <div class="col" id="a4">cozinha1</div>
    <div class="col" id="a5">cozinha2</div>
    <div class="col" id="a6">cozinha3</div>
    </div>
    <div class="container">
   <div class="row">
     <div class="col" id="a7">quarto1</div>
    <div class="col" id="a8">quarto2</div>
    <div class="col" id="a9">quarto3</div>
</div>

</div>
</div>
</div>
</div>
</body>
</html>