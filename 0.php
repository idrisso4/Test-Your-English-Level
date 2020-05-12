<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="author" content="idrisso4"/>
  <title>English Test</title>
  <link rel="stylesheet" type="text/css" href="design.css">
</head>
<?php
session_start ();
if ($_SESSION['acces']=="non") {
  header("Location: http://localhost/idriss/projet%20web/index.php");  
}
if(isset($_POST['next']))
{
  header("Location: http://localhost/idriss/projet%20web/".$_SESSION['level'].".php");
}
if(isset($_POST['disconnect']))
{
  session_unset();
  session_destroy();
  header("Location: http://localhost/idriss/projet%20web/index.php");
}

?>
<BODY class="bod0">
  <label class="h"><center>English Test</center></label>
  <label><h2 align="center" style="margin-top: 10%; margin-bottom: 5%;">Hello <?php 
if ($_SESSION['sex']=='man') $s="Mr"; else $s="Mrs";
  echo "$s ".strtoupper("$_SESSION[name]"); ?></h2></label>
  <form name="0" method="post" action='<?= $_SERVER["PHP_SELF"] ?>' enctype="application/x-www-form-urlencoded">        
    <table width="70%" align="center" class="a0">
      <tr>
        <td width="30%" align="center">Your level is <?php echo strtoupper("$_SESSION[level]"); ?></td>
      </tr><tr><td><br></td></tr>  
      <tr align="center">
        <td width="30%" align="center">Score:</td>
        <td><?php echo "Comprehension: $_SESSION[comp]"; ?></td>
        <td><?php echo "Grammar: $_SESSION[gram]"; ?></td>
        <td><?php echo "Listening: $_SESSION[lis]"; ?></td>
        <td><?php echo "Dictation: $_SESSION[dict]"; ?></td>
      </tr>  
       </tr><tr><td><br></td></tr> 
 <tr align="center">
  <td colspan="2" align="center"><input class="bout" type="submit" value="Next Level" name="next"></td>
  <td colspan="2" align="center"><input class="bout" type="submit" value="Disconnect" name="disconnect"></td>
</tr>
</table>
</form>                        
</BODY>
</html>

