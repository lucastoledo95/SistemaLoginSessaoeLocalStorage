<?php
$archive = file_get_contents('users.txt');
$split = explode(";", $archive);

if(in_array($_POST["login"], $split))
{
echo "J� existe algu�m com esse nome de usu�rio em nosso sistema!";
echo "<meta http-equiv=refresh content=2;URL=cadastro.html>";
}
else
{
session_start("logado");
include("bd.php");
$login = $_POST['login'];
$senha = $_POST['senha'];
$senha1 = $_POST['senhaa'];
if($senha != $senha1 ){
echo "As senhas n�o s�o iguais!";
echo "<meta http-equiv=refresh content=2;URL=cadastro.html>";
} else{
$fp = fopen("users.txt","a+");
$cbd = "$login;";
fwrite($fp, $cbd);
fclose($fp);
$bd = fopen("bd.php","a+");
$varval = "valida[";
$new = "<?php
$$varval$login] = \"$senha\";
?>";
fputs($bd, $new);
fclose($bd);
echo "<script>location.href='sucesso.html'</script>";
}
}

?>