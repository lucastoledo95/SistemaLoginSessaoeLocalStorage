
<?php
error_reporting(0);
ini_set(“display_errors”, 0 );
?>
<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
 include("bd.php");
 
if($user!="" && $pass!=""){
if($valida[$user]==$pass){
		setcookie("logado", "1");
 					echo "<script>location.href='main.php'</script>";}
else{

 echo "<font face=verdana size=2>";
 echo "Usuário ou senha incorretos!";
 echo "<br>";
 echo "<a href=login.html>";
 echo "Clique aqui</a> para tentar novamente.";
 echo "</a></font>";

}
}else {
		setcookie("logado");
 		echo "<script>location.href='login.html'</script>";
}
 	
	
	





?>
