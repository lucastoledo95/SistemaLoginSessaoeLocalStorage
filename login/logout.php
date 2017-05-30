<?php
setcookie("logado", "");
?>
<HTML>
<HEAD>
<TITLE>Sistema de usuários</TITLE>
<meta http-equiv="refresh" content="1;url=login.html">
<script language="JavaScript">
  function deleteCookie(nome){
    var exdate = new Date();
    exdate.setTime(exdate.getTime() + (-1 * 24 * 3600 
       * 1000));
    document.cookie = nome + "=" + escape("")+ ((-1 
       == null) ? "" : "; expires=" + exdate);
  } 
</script>

</HEAD>
<BODY>
<FONT FACE="Verdana" SIZE="2"></FONT>
<script language="JavaScript">
  deleteCookie("logado");
</script>

</BODY>
</HTML>
