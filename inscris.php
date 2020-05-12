<?php
if(!empty($_POST['cin']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['password1']) && !empty($_POST['password2']) && !empty($_POST['mail']) && isset($_POST['sex']) && ($_POST['password1']==$_POST['password2'])) 
{ 
  $name=$_POST['prenom']." ".$_POST['nom'];
  $pass=$_POST['password1'];
  $cin=$_POST['cin'];
  $sex=$_POST['sex'];
  $mail=$_POST['mail'];
  $date=$_POST['date'];
  $t=0;
  while($ligne=mysql_fetch_array($result))
   {if($cin==$ligne[0])
     {
       echo "<script type=\"text/javascript\">alert(\"This User already exists!\");</script>";
       $t=1;
       break;
     }}
     if($t==0)
     {
       $requete="INSERT INTO users VALUES('$cin','$name','$sex','$pass','$mail','$date','a0',0,0,0,0)";
       $res=mysql_query($requete,$idcon);
       if(!$res)
       {
        echo "ecriture impossible";
      }
      session_start();
      $_SESSION['acces']="oui";
      $_SESSION['name']=$name;
      $_SESSION['cin']=$cin;
      $_SESSION['sex']=$sex;
      $_SESSION['level']="a0";
      $_SESSION['comp']=0;
      $_SESSION['gram']=0;
      $_SESSION['lis']=0;
      $_SESSION['dict']=0;
      header("Location: http://localhost/idriss/projet%20web/0.php");
    }
  }
  ?>