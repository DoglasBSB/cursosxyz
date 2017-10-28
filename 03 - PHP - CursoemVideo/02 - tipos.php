<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/estilo.css">
	<title>PHP</title>
</head>
<body>
<div>
<?php
	
	$nome="Doglas";
	$idade=26;
	
    #variaveis sendo concatenadas
	echo  $nome. " tem ". $idade. " anos ";

	echo "<br>"; #Pular linha
       
    # variaveis sendo usados apenas com aspas duplas
	echo " A idade de $nome é $idade anos";

?>
</div>
</body>
</html>