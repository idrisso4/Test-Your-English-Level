<?php
    if(!empty($_POST['mail']) && !empty($_POST['pwd'])) 
      {while($ligne=mysql_fetch_array($result))
        {
         if($_POST['mail']==$ligne[4] && $_POST['pwd']==$ligne[3])
         {
          session_start();
          $_SESSION['acces']="oui";
          $_SESSION['cin']=$ligne[0];
          $_SESSION['name']=$ligne[1];
          $_SESSION['sex']=$ligne[2];
          $_SESSION['level']=$ligne[6];
          $_SESSION['comp']=$ligne[7];
          $_SESSION['gram']=$ligne[8];
          $_SESSION['lis']=$ligne[9];
          $_SESSION['dict']=$ligne[10];
          header("Location: http://localhost/idriss/projet%20web/0.php");
          break;
        }
        else $_SESSION['acces']="non";
    }
    echo "<script type=\"text/javascript\">alert(\"Wrong Username or Password!\");</script>";
  }
?>