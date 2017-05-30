<?php
if(IsSet($_COOKIE["logado"])){}
else{
echo '<meta http-equiv="refresh" content="0;url=login.html">';
exit; 

}
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<script type="text/javascript" src="../post/javascript/jquery-1.12.3.min.js" language="javascript"></script>
		<script type="text/javascript" src="../post/javascript/jquery.mask.js" language="javascript"></script>
		<script type="text/javascript" src="../post/javascript/jsfuncoes.js" language="javascript"></script>
		<link href="../post/css/bootstrap-responsive.css" rel="stylesheet" media="screen" />
		<link href="../post/css/bootstrap.css" rel="stylesheet" media="screen" />
		<link href="../post/css/estilo.css" rel="stylesheet" type="text/css" />
	</head>
<title>Like e Dislike / Melhorar</title>
</head>
<body>
<font face="Verdana" size="2">
<br><a href="logout.php">Sair/Logout</a><hr></font>
<?php
     $page = $_GET['page'];
     if ($page==''.'') {
     include("../post/index.html");
     } else {
     if ($page!='') {
     if (file_exists($page.'.php')) {
     include(''.$page.'.php'); } else {
     echo('<center><script>alert("Arquivo não existente.");</script>Arquivo '.$page.'.php não existente.</center>'); }
     }}
     ?>


</body>
</html>