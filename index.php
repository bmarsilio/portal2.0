<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!--inclui o css-->
<script src="bootstrap/js/jquery.js"></script> <!--inclui o jquery-->
<script src="bootstrap/js/data-tables.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script> <!--iclui o js-->

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<title>Portal 2.0</title>
</head>

<body>
	<?php require_once('php/layout/topo.php');?>
	<div id="teste">
		
		<?php 

		if(!isset($_GET['page'])){
			include_once('index.php');
		}
		else{
			include_once('php/'.$_GET['page'].'.php');
			//var_dump($_GET['page']);
		}
		?>

	</body>
	<?php include_once ('php/layout/rodape.php');?>
</div>
</html>
