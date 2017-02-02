<?php

$pagina = 'falecom.php';

$mensagem_01 = $_POST['mensagem'];

//ENVIA EMAIL
include ("smtp.class.php");


$to = "comercial@alueesquadrias.com.br"; /* o e-mail cadastrado*/
$subject = "CONTATO VIA SITE"; /* assunto da mensagem */

//***************************************************
// MENSAGEM HTML
//***************************************************

$msg=<<<RES
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="500" border="0" cellspacing="3" cellpadding="0">
  <tr> 
    <td> 
    <div align="center"><font color="#000000" size="2" face="Arial, Helvetica, sans-serif">Contato via site</font> </div>    </td>
  </tr>
  <tr> 
    <td height="201" valign="top"><table width="100%" border="0" cellspacing="3" cellpadding="0">
        <tr> 
          <td width="115" height="20" align="right" valign="middle">&nbsp;</td>
          <td height="2" width="370">&nbsp;</td>
        </tr>
        
        <tr> 
          <td width="115" height="20" align="right" valign="middle"><strong><font color="#e77903" size="2" face="Arial, Helvetica, sans-serif"><font color="#000000">Mensagem</font></font></strong></td>
          <td width="370"><font color="#e77903" size="2" face="Arial, Helvetica, sans-serif"><font color="#000000">$mensagem_01</font></font></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>
RES;

$smtp->Send($to, $from, $subject, $msg);/* faz o envio da mensagem */


//===========================================================================================================================

?>

<script>

	alert("Mensagem enviada com sucesso");

	location.href="<? echo $pagina; ?>";

</script>