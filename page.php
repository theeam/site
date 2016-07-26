<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="stylesheet.css" type="text/css">
</head>
<body>
<?php
	switch($_GET['pagina']){ 
		case 'aboutme':
		 include 'aboutme.php';
		  break;
		case 'contactme':
		 include 'contactme.php';
		  break;
		  case 'work':
		 include 'work.php';
		  break;
		default:
		 include 'home.php';
		  break;  
	}
	
?>	
</body>
</html>