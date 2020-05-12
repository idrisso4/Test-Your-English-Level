<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="author" content="idrisso4"/>
  <title>English Test</title>
  <link rel="stylesheet" type="text/css" href="design.css">
</head>
<?php
include("connex.php");
$idcon=connex("projet","myparam");
session_start ();
if ($_SESSION['acces']=="non") {
  header("Location: http://localhost/idriss/projet%20web/index.php");  
}
$cin=$_SESSION['cin'];
if(isset($_POST['sub']))
{
  $a=0;$b=0;$c=0;$d=0;
  for ($i=1; $i<26 ; $i++) 
  { 
    $j='a1'.strval($i);
    $k='a2'.strval($i);
    $l='com'.strval($i);
    $m='dict'.strval($i);
    if($_POST[$j]=='himself')
    {
      $a++;
    }
    if($_POST[$k]=='in danger')
    {
      $b++;
    }
    if($_POST[$l]=='is going to')
    {
      $c++;
    }
    if($_POST[$m]=='I love summer')
    {
      $d++;
    }

  }
$_SESSION['comp']=$a;
$_SESSION['gram']=$b;
$_SESSION['lis']=$c;
$_SESSION['dict']=$d;
  if ($a>23) {
    $requete="UPDATE users SET comprehension='$a' WHERE cin='$cin'";
    $result=mysql_query($requete,$idcon);
    if (!$result) {
      echo "erreur de modification";
    }
  }

  if ($b>23) {
    $requete="UPDATE users SET grammer='$b' WHERE cin='$cin'";
    $result=mysql_query($requete,$idcon);
    if (!$result) {
      echo "erreur de modification";
    }
  }

  if ($c>23) {
    $requete="UPDATE users SET listening='$c' WHERE cin='$cin'";
    $result=mysql_query($requete,$idcon);
    if (!$result) {
      echo "erreur de modification";
    }
  }

  if ($d>23) {
    $requete="UPDATE users SET dictation='$d' WHERE cin='$cin'";
    $result=mysql_query($requete,$idcon);
    if (!$result) {
      echo "erreur de modification";
    }
  }

  if ($a>23 && $b>23 && $c>23 && $d>23) {
    $requete="UPDATE users SET level='a1' WHERE cin='$cin'";
    $result=mysql_query($requete,$idcon);
    $_SESSION['level']="a1";
    if (!$result) {
      echo "erreur de modification";
    }
  }
  header("Location: http://localhost/idriss/projet%20web/0.php");
} 
?>
<BODY class="bod">
  <label class="h"><center>English Test</center></label>
  <label><h2 align="center" style="margin-top: 14%;">Test for lelvel A1</h2></label> 
  <form name="a0" method="post" action='<?= $_SERVER["PHP_SELF"] ?>' enctype="application/x-www-form-urlencoded">            
    <table width="70%" align="center" class="a1">
      <tr>
        <td width="45%"><font color="red">Comprehension Test</font></td>
      </tr>
      <tr>
        <td width="45%">Choose the best word to complete the sentence.</td>
      </tr><tr><td><br></td></tr>
      <tr>
        <td width="500px">1) The baby boy saw ... in the mirror and started to cry.</td>
        <td> <input type="radio" name="a11" value="itself"> itself</td>
        <td> <input type="radio" name="a11" value="herself"> herself</td>
        <td> <input type="radio" name="a11" value="himself"> himself</td>
      </tr>
      <tr><td width="500px">2) The baby boy saw ... in the mirror and started to cry.</td>
        <td> <input type="radio" name="a12" value="itself"> itself</td>
        <td> <input type="radio" name="a12" value="herself"> herself</td>
        <td> <input type="radio" name="a12" value="himself"> himself</td>
      </tr>
      <tr><td width="500px">3) The baby boy saw ... in the mirror and started to cry.</td>
        <td> <input type="radio" name="a13" value="itself"> itself</td>
        <td> <input type="radio" name="a13" value="herself"> herself</td>
        <td> <input type="radio" name="a13" value="himself"> himself</td>
      </tr>
      <tr><td width="500px">4) The baby boy saw ... in the mirror and started to cry.</td>
        <td> <input type="radio" name="a14" value="itself"> itself</td>
        <td> <input type="radio" name="a14" value="herself"> herself</td>
        <td> <input type="radio" name="a14" value="himself"> himself</td>
      </tr>
      <tr><td width="500px">5) The baby boy saw ... in the mirror and started to cry.</td>
        <td> <input type="radio" name="a15" value="itself"> itself</td>
        <td> <input type="radio" name="a15" value="herself"> herself</td>
        <td> <input type="radio" name="a15" value="himself"> himself</td>
      </tr>
      <tr><td width="500px">6) The baby boy saw ... in the mirror and started to cry.</td>
        <td> <input type="radio" name="a16" value="itself"> itself</td>
        <td> <input type="radio" name="a16" value="herself"> herself</td>
        <td> <input type="radio" name="a16" value="himself"> himself</td>
      </tr>
      <tr><td width="500px">7) The baby boy saw ... in the mirror and started to cry.</td>
        <td> <input type="radio" name="a17" value="itself"> itself</td>
        <td> <input type="radio" name="a17" value="herself"> herself</td>
        <td> <input type="radio" name="a17" value="himself"> himself</td>
      </tr>
      <tr><td width="500px">8) The baby boy saw ... in the mirror and started to cry.</td>
        <td> <input type="radio" name="a18" value="itself"> itself</td>
        <td> <input type="radio" name="a18" value="herself"> herself</td>
        <td> <input type="radio" name="a18" value="himself"> himself</td>
      </tr>
      <tr><td width="500px">9) The baby boy saw ... in the mirror and started to cry.</td>
        <td> <input type="radio" name="a19" value="itself"> itself</td>
        <td> <input type="radio" name="a19" value="herself"> herself</td>
        <td> <input type="radio" name="a19" value="himself"> himself</td>
      </tr>
      <tr><td width="500px">10) The baby boy saw ... in the mirror and started to cry.</td>
        <td> <input type="radio" name="a110" value="itself"> itself</td>
        <td> <input type="radio" name="a110" value="herself"> herself</td>
        <td> <input type="radio" name="a110" value="himself"> himself</td>
      </tr>
      <tr><td width="500px">11) The baby boy saw ... in the mirror and started to cry.</td>
        <td> <input type="radio" name="a111" value="itself"> itself</td>
        <td> <input type="radio" name="a111" value="herself"> herself</td>
        <td> <input type="radio" name="a111" value="himself"> himself</td>
      </tr>
      <tr><td width="500px">12) The baby boy saw ... in the mirror and started to cry.</td>
        <td> <input type="radio" name="a112" value="itself"> itself</td>
        <td> <input type="radio" name="a112" value="hersel"> herself</td>
        <td> <input type="radio" name="a112" value="himself"> himself</td>
      </tr>
      <tr><td width="500px">13) The baby boy saw ... in the mirror and started to cry.</td>
        <td> <input type="radio" name="a113" value="itself"> itself</td>
        <td> <input type="radio" name="a113" value="herself"> herself</td>
        <td> <input type="radio" name="a113" value="himself"> himself</td>
      </tr>
      <tr><td width="500px">14) The baby boy saw ... in the mirror and started to cry.</td>
        <td> <input type="radio" name="a114" value="itself"> itself</td>
        <td> <input type="radio" name="a114" value="herself"> herself</td>
        <td> <input type="radio" name="a114" value="himself"> himself</td>
      </tr>
      <tr><td width="500px">15) The baby boy saw ... in the mirror and started to cry.</td>
        <td> <input type="radio" name="a115" value="itself"> itself</td>
        <td> <input type="radio" name="a115" value="herself"> herself</td>
        <td> <input type="radio" name="a115" value="himself"> himself</td>
      </tr>
      <tr><td width="500px">16) The baby boy saw ... in the mirror and started to cry.</td>
        <td> <input type="radio" name="a116" value="itself"> itself</td>
        <td> <input type="radio" name="a116" value="herself"> herself</td>
        <td> <input type="radio" name="a116" value="himself"> himself</td>
      </tr>
      <tr><td width="500px">17) The baby boy saw ... in the mirror and started to cry.</td>
        <td> <input type="radio" name="a117" value="itself"> itself</td>
        <td> <input type="radio" name="a117" value="herself"> herself</td>
        <td> <input type="radio" name="a117" value="himself"> himself</td></tr>
        <tr><td width="500px">18) The baby boy saw ... in the mirror and started to cry.</td>
          <td> <input type="radio" name="a118" value="itself"> itself</td>
          <td> <input type="radio" name="a118" value="herself"> herself</td>
          <td> <input type="radio" name="a118" value="himself"> himself</td>
        </tr>
        <tr><td width="500px">19) The baby boy saw ... in the mirror and started to cry.</td>
          <td> <input type="radio" name="a119" value="itself"> itself</td>
          <td> <input type="radio" name="a119" value="herself"> herself</td>
          <td> <input type="radio" name="a119" value="himself"> himself</td>
        </tr>
        <tr><td width="500px">20) The baby boy saw ... in the mirror and started to cry.</td>
          <td> <input type="radio" name="a120" value="itself"> itself</td>
          <td> <input type="radio" name="a120" value="herself"> herself</td>
          <td> <input type="radio" name="a120" value="himself"> himself</td>
        </tr>
        <tr><td width="500px">21) The baby boy saw ... in the mirror and started to cry.</td>
          <td> <input type="radio" name="a121" value="itself"> itself</td>
          <td> <input type="radio" name="a121" value="herself"> herself</td>
          <td> <input type="radio" name="a121" value="himself"> himself</td>
        </tr>
        <tr><td width="500px">22) The baby boy saw ... in the mirror and started to cry.</td>
          <td> <input type="radio" name="a122" value="itself"> itself</td>
          <td> <input type="radio" name="a122" value="herself"> herself</td>
          <td> <input type="radio" name="a122" value="himself"> himself</td>
        </tr>
        <tr><td width="500px">23) The baby boy saw ... in the mirror and started to cry.</td>
          <td> <input type="radio" name="a123" value="itself"> itself</td>
          <td> <input type="radio" name="a123" value="herself"> herself</td>
          <td> <input type="radio" name="a123" value="himself"> himself</td>
        </tr>
        <tr><td width="500px">24) The baby boy saw ... in the mirror and started to cry.</td>
          <td> <input type="radio" name="a124" value="itself"> itself</td>
          <td> <input type="radio" name="a124" value="herself"> herself</td>
          <td> <input type="radio" name="a124" value="himself"> himself</td>
        </tr>
        <tr><td width="500px">25) The baby boy saw ... in the mirror and started to cry.</td>
          <td> <input type="radio" name="a125" value="itself"> itself</td>
          <td> <input type="radio" name="a125" value="herself"> herself</td>
          <td> <input type="radio" name="a125" value="himself"> himself</td>
        </tr>
        <tr><td><br></td></tr>
      </table>



      <table width="70%" align="center" class="a2">
        <tr>
          <td width="45%"><font color="red">Grammar Test</font></td>
        </tr>
        <tr>       
          <td width="45%">Choose the best word to complete the sentence.</td>
        </tr>
        <tr><td><br></td></tr>
        <tr>        
          <td width="500px">1) The children thought they were ... when they saw the bull.</td>       
          <td> <input type="radio" name="a21" value="in a danger"> in a danger</td>       
          <td> <input type="radio" name="a21" value="in danger"> in danger</td>        
          <td> <input type="radio" name="a21" value="in the danger"> in the danger</td>      
        </tr>     
        <tr>
          <td width="500px">2) The children thought they were ... when they saw the bull.</td>
          <td> <input type="radio" name="a22" value="in a danger"> in a danger</td>
          <td> <input type="radio" name="a22" value="in danger"> in danger</td>
          <td> <input type="radio" name="a22" value="in the danger"> in the danger</td>
        </tr>
        <tr><td width="500px">3) The children thought they were ... when they saw the bull.</td>
          <td> <input type="radio" name="a23" value="in a danger"> in a danger</td>
          <td> <input type="radio" name="a23" value="in danger"> in danger</td>
          <td> <input type="radio" name="a23" value="in the danger"> in the danger</td>
        </tr>
        <tr><td width="500px">4) The children thought they were ... when they saw the bull.</td>
          <td> <input type="radio" name="a24" value="in a danger"> in a danger</td>
          <td> <input type="radio" name="a24" value="in danger"> in danger</td>
          <td> <input type="radio" name="a24" value="in the danger"> in the danger</td>
        </tr>
        <tr><td width="500px">5) The children thought they were ... when they saw the bull.</td>
          <td> <input type="radio" name="a25" value="in a danger"> in a danger</td>
          <td> <input type="radio" name="a25" value="in danger"> in danger</td>
          <td> <input type="radio" name="a25" value="in the danger"> in the danger</td>
        </tr>
        <tr><td width="500px">6) The children thought they were ... when they saw the bull.</td>
          <td> <input type="radio" name="a26" value="in a danger"> in a danger</td>
          <td> <input type="radio" name="a26" value="in danger"> in danger</td>
          <td> <input type="radio" name="a26" value="in the danger"> in the danger</td>
        </tr>
        <tr><td width="500px">7) The children thought they were ... when they saw the bull.</td>
          <td> <input type="radio" name="a27" value="in a danger"> in a danger</td>
          <td> <input type="radio" name="a27" value="in danger"> in danger</td>
          <td> <input type="radio" name="a27" value="in the danger"> in the danger</td>
        </tr>
        <tr><td width="500px">8) The children thought they were ... when they saw the bull.</td>
          <td> <input type="radio" name="a28" value="in a danger"> in a danger</td>
          <td> <input type="radio" name="a28" value="in danger"> in danger</td>
          <td> <input type="radio" name="a28" value="in the danger"> in the danger</td>
        </tr>
        <tr><td width="500px">9) The children thought they were ... when they saw the bull.</td>
          <td> <input type="radio" name="a29" value="in a danger"> in a danger</td>
          <td> <input type="radio" name="a29" value="in danger"> in danger</td>
          <td> <input type="radio" name="a29" value="in the danger"> in the danger</td>
        </tr>
        <tr><td width="500px">10) The children thought they were ... when they saw the bull.</td>
          <td> <input type="radio" name="a210" value="in a danger"> in a danger</td>
          <td> <input type="radio" name="a210" value="in danger"> in danger</td>
          <td> <input type="radio" name="a210" value="in the danger"> in the danger</td>
        </tr>
        <tr><td width="500px">11) The children thought they were ... when they saw the bull.</td>
          <td> <input type="radio" name="a211" value="in a danger"> in a danger</td>
          <td> <input type="radio" name="a211" value="in danger"> in danger</td>
          <td> <input type="radio" name="a211" value="in the danger"> in the danger</td>
        </tr>
        <tr><td width="500px">12) The children thought they were ... when they saw the bull.</td>
          <td> <input type="radio" name="a212" value="in a danger"> in a danger</td>
          <td> <input type="radio" name="a212" value="in danger"> in danger</td>
          <td> <input type="radio" name="a212" value="in the danger"> in the danger</td></tr>
          <tr><td width="500px">13) The children thought they were ... when they saw the bull.</td>
            <td> <input type="radio" name="a213" value="in a danger"> in a danger</td>
            <td> <input type="radio" name="a213" value="in danger"> in danger</td>
            <td> <input type="radio" name="a213" value="in the danger"> in the danger</td>
          </tr>
          <tr><td width="500px">14) The children thought they were ... when they saw the bull.</td>
            <td> <input type="radio" name="a214" value="in a danger"> in a danger</td>
            <td> <input type="radio" name="a214" value="in danger"> in danger</td>
            <td> <input type="radio" name="a214" value="in the danger"> in the danger</td>
          </tr>
          <tr><td width="500px">15) The children thought they were ... when they saw the bull.</td>
            <td> <input type="radio" name="a215" value="in a danger"> in a danger</td>
            <td> <input type="radio" name="a215" value="in danger"> in danger</td>
            <td> <input type="radio" name="a215" value="in the danger"> in the danger</td>
          </tr>
          <tr><td width="500px">16) The children thought they were ... when they saw the bull.</td>
            <td> <input type="radio" name="a216" value="in a danger"> in a danger</td>
            <td> <input type="radio" name="a216" value="in danger"> in danger</td>
            <td> <input type="radio" name="a216" value="in the danger"> in the danger</td>
          </tr>
          <tr><td width="500px">17) The children thought they were ... when they saw the bull.</td>
            <td> <input type="radio" name="a217" value="in a danger"> in a danger</td>
            <td> <input type="radio" name="a217" value="in danger"> in danger</td>
            <td> <input type="radio" name="a217" value="in the danger"> in the danger</td>
          </tr>
          <tr><td width="500px">18) The children thought they were ... when they saw the bull.</td>
            <td> <input type="radio" name="a218" value="in a danger"> in a danger</td>
            <td> <input type="radio" name="a218" value="in danger"> in danger</td>
            <td> <input type="radio" name="a218" value="in the danger"> in the danger</td>
          </tr>
          <tr><td width="500px">19) The children thought they were ... when they saw the bull.</td>
            <td> <input type="radio" name="a219" value="in a danger"> in a danger</td>
            <td> <input type="radio" name="a219" value="in danger"> in danger</td>
            <td> <input type="radio" name="a219" value="in the danger"> in the danger</td>
          </tr>
          <tr><td width="500px">20) The children thought they were ... when they saw the bull.</td>
            <td> <input type="radio" name="a220" value="in a danger"> in a danger</td>
            <td> <input type="radio" name="a220" value="in danger"> in danger</td>
            <td> <input type="radio" name="a220" value="in the danger"> in the danger</td>
          </tr>
          <tr><td width="500px">21) The children thought they were ... when they saw the bull.</td>
            <td> <input type="radio" name="a221" value="in a danger"> in a danger</td>
            <td> <input type="radio" name="a221" value="in danger"> in danger</td>
            <td> <input type="radio" name="a221" value="in the danger"> in the danger</td>
          </tr>
          <tr><td width="500px">22) The children thought they were ... when they saw the bull.</td>
            <td> <input type="radio" name="a222" value="in a danger"> in a danger</td>
            <td> <input type="radio" name="a222" value="in danger"> in danger</td>
            <td> <input type="radio" name="a222" value="in the danger"> in the danger</td>
          </tr>
          <tr><td width="500px">23) The children thought they were ... when they saw the bull.</td>
            <td> <input type="radio" name="a223" value="in a danger"> in a danger</td>
            <td> <input type="radio" name="a223" value="in danger"> in danger</td>
            <td> <input type="radio" name="a223" value="in the danger"> in the danger</td>
          </tr>
          <tr><td width="500px">24) The children thought they were ... when they saw the bull.</td>
            <td> <input type="radio" name="a224" value="in a danger"> in a danger</td>
            <td> <input type="radio" name="a224" value="in danger"> in danger</td>
            <td> <input type="radio" name="a224" value="in the danger"> in the danger</td>
          </tr>
          <tr><td width="500px">25) The children thought they were ... when they saw the bull.</td>
            <td> <input type="radio" name="a225" value="in a danger"> in a danger</td>
            <td> <input type="radio" name="a225" value="in danger"> in danger</td>
            <td> <input type="radio" name="a225" value="in the danger"> in the danger</td>
          </tr>
        </table>



        <table width="70%" align="center" class="com">    
          <tr>
            <td width="45%"><font color="red">Listening Test</font></td>
          </tr> 
          <tr><td width="45%">Listen to the text and choose the best word.</td>    
          </tr><tr><td><br></td>
          </tr> 
          <tr>
            <td colspan="4" align="center"><audio controls>
              <source src="Listening.mp3" type="audio/mpeg">
              </audio></td>
            </tr>
          </tr><tr><td><br></td>
          </tr>   
          <tr>
            <td width="500px">1) Peter ..... fly to San Francisco tomorrow.</td>               
            <td> <input type="radio" name="com1" value="go to"> go to</td>              
            <td> <input type="radio" name="com1" value="goes to"> goes to</td>         
            <td> <input type="radio" name="com1" value="is going to"> is going to</td>             
          </tr>            
          <tr><td width="500px">2) Peter ..... fly to San Francisco tomorrow.</td>           
           <td> <input type="radio" name="com2" value="go to"> go to</td>       
           <td> <input type="radio" name="com2" value="goes to"> goes to</td>        
           <td> <input type="radio" name="com2" value="is going to"> is going to</td>     
         </tr>          
         <tr>
          <td width="500px">3) Peter ..... fly to San Francisco tomorrow.</td>      
          <td> <input type="radio" name="com3" value="go to"> go to</td>     
          <td> <input type="radio" name="com3" value="goes to"> goes to</td>     
          <td> <input type="radio" name="com3" value="is going to"> is going to</td>          
        </tr>         
        <tr><td width="500px">4) Peter ..... fly to San Francisco tomorrow.</td>            
          <td> <input type="radio" name="com4" value="go to"> go to</td>            
          <td> <input type="radio" name="com4" value="goes to"> goes to</td>            
          <td> <input type="radio" name="com4" value="is going to"> is going to</td>          
        </tr>          
        <tr><td width="500px">5) Peter ..... fly to San Francisco tomorrow.</td>            
          <td> <input type="radio" name="com5" value="go to"> go to</td>            
          <td> <input type="radio" name="com5" value="goes to"> goes to</td>            
          <td> <input type="radio" name="com5" value="is going to"> is going to</td>          
        </tr>          
        <tr><td width="500px">6) Peter ..... fly to San Francisco tomorrow.</td>            
          <td> <input type="radio" name="com6" value="go to"> go to</td>            
          <td> <input type="radio" name="com6" value="goes to"> goes to</td>            
          <td> <input type="radio" name="com6" value="is going to"> is going to</td>          
        </tr>          
        <tr><td width="500px">7) Peter ..... fly to San Francisco tomorrow.</td>            
          <td> <input type="radio" name="com7" value="go to"> go to</td>            
          <td> <input type="radio" name="com7" value="goes to"> goes to</td>            
          <td> <input type="radio" name="com7" value="is going to"> is going to</td>          
        </tr>          
        <tr><td width="500px">8) Peter ..... fly to San Francisco tomorrow.</td>            
          <td> <input type="radio" name="com8" value="go to"> go to</td>            
          <td> <input type="radio" name="com8" value="goes to"> goes to</td>            
          <td> <input type="radio" name="com8" value="is going to"> is going to</td>          
        </tr>          
        <tr><td width="500px">9) Peter ..... fly to San Francisco tomorrow.</td>            
          <td> <input type="radio" name="com9" value="go to"> go to</td>            
          <td> <input type="radio" name="com9" value="goes to"> goes to</td>            
          <td> <input type="radio" name="com9" value="is going to"> is going to</td>          
        </tr>          
        <tr><td width="500px">10) Peter ..... fly to San Francisco tomorrow.</td>            
          <td> <input type="radio" name="com10" value="go to"> go to</td>            
          <td> <input type="radio" name="com10" value="goes to"> goes to</td>            
          <td> <input type="radio" name="com10" value="is going to"> is going to</td>          
        </tr>          
        <tr><td width="500px">11) Peter ..... fly to San Francisco tomorrow.</td>            
          <td> <input type="radio" name="com11" value="go to"> go to</td>            
          <td> <input type="radio" name="com11" value="goes to"> goes to</td>            
          <td> <input type="radio" name="com11" value="is going to"> is going to</td>          
        </tr>          
        <tr><td width="500px">12) Peter ..... fly to San Francisco tomorrow.</td>            
          <td> <input type="radio" name="com12" value="go to"> go to</td>            
          <td> <input type="radio" name="com12" value="goes to"> goes to</td>            
          <td> <input type="radio" name="com12" value="is going to"> is going to</td>
        </tr>            
        <tr><td width="500px">13) Peter ..... fly to San Francisco tomorrow.</td>              
          <td> <input type="radio" name="com13" value="go to"> go to</td>              
          <td> <input type="radio" name="com13" value="goes to"> goes to</td>              
          <td> <input type="radio" name="com13" value="is going to"> is going to</td>            
        </tr>            
        <tr><td width="500px">14) Peter ..... fly to San Francisco tomorrow.</td>              
          <td> <input type="radio" name="com14" value="go to"> go to</td>              
          <td> <input type="radio" name="com14" value="goes to"> goes to</td>              
          <td> <input type="radio" name="com14" value="is going to"> is going to</td>            
        </tr>            
        <tr><td width="500px">15) Peter ..... fly to San Francisco tomorrow.</td>              
          <td> <input type="radio" name="com15" value="go to"> go to</td>              
          <td> <input type="radio" name="com15" value="goes to"> goes to</td>              
          <td> <input type="radio" name="com15" value="is going to"> is going to</td>            
        </tr>            
        <tr><td width="500px">16) Peter ..... fly to San Francisco tomorrow.</td>              
          <td> <input type="radio" name="com16" value="go to"> go to</td>              
          <td> <input type="radio" name="com16" value="goes to"> goes to</td>              
          <td> <input type="radio" name="com16" value="is going to"> is going to</td>            
        </tr>            
        <tr><td width="500px">17) Peter ..... fly to San Francisco tomorrow.</td>              
          <td> <input type="radio" name="com17" value="go to"> go to</td>              
          <td> <input type="radio" name="com17" value="goes to"> goes to</td>              
          <td> <input type="radio" name="com17" value="is going to"> is going to</td>            
        </tr>            
        <tr><td width="500px">18) Peter ..... fly to San Francisco tomorrow.</td>              
          <td> <input type="radio" name="com18" value="go to"> go to</td>            
          <td> <input type="radio" name="com18" value="goes to"> goes to</td>           
          <td> <input type="radio" name="com18" value="is going to"> is going to</td>      
        </tr>       
        <tr><td width="500px">19) Peter ..... fly to San Francisco tomorrow.</td>      
          <td> <input type="radio" name="com19" value="go to"> go to</td>        
          <td> <input type="radio" name="com19" value="goes to"> goes to</td>   
          <td> <input type="radio" name="com19" value="is going to"> is going to</td>    
        </tr>   
        <tr><td width="500px">20) Peter ..... fly to San Francisco tomorrow.</td>    
          <td> <input type="radio" name="com20" value="go to"> go to</td>      
          <td> <input type="radio" name="com20" value="goes to"> goes to</td>            
          <td> <input type="radio" name="com20" value="is going to"> is going to</td>        
        </tr>           
        <tr><td width="500px">21) Peter ..... fly to San Francisco tomorrow.</td>           
          <td> <input type="radio" name="com21" value="go to"> go to</td>            
          <td> <input type="radio" name="com21" value="goes to"> goes to</td>     
          <td> <input type="radio" name="com21" value="is going to"> is going to</td>    
        </tr>      
        <tr><td width="500px">22) Peter ..... fly to San Francisco tomorrow.</td>           
         <td> <input type="radio" name="com22" value="go to"> go to</td>             
         <td> <input type="radio" name="com22" value="goes to"> goes to</td>        
         <td> <input type="radio" name="com22" value="is going to"> is going to</td>       
       </tr>   
       <tr><td width="500px">23) Peter ..... fly to San Francisco tomorrow.</td>          
        <td> <input type="radio" name="com23" value="go to"> go to</td>            
        <td> <input type="radio" name="com23" value="goes to"> goes to</td>      
        <td> <input type="radio" name="com23" value="is going to"> is going to</td>         
      </tr>      
      <tr><td width="500px">24) Peter ..... fly to San Francisco tomorrow.</td>          
        <td> <input type="radio" name="com24" value="go to"> go to</td>          
        <td> <input type="radio" name="com24" value="goes to"> goes to</td>        
        <td> <input type="radio" name="com24" value="is going to"> is going to</td>    
      </tr>           
      <tr><td width="500px">25) Peter ..... fly to San Francisco tomorrow.</td>            
       <td> <input type="radio" name="com25" value="go to"> go to</td>              
       <td> <input type="radio" name="com25" value="goes to"> goes to</td>              
       <td> <input type="radio" name="com25" value="is going to"> is going to</td>            
     </tr>
   </table>


   <table width="70%" align="center" class="dict">
    <tr>
      <td width="45%"><font color="red">Dictation Test</font></td>
    </tr> 
    <tr><td width="45%">Listen to the sentences and write what you listen.</td>    
    </tr><tr><td><br></td>
    </tr> 
    <tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>
      <td colspan="3" align="center">1)  <input size="55px" type="text" name="dict1" ></td>              
    </tr> 
    <tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>        
      <td colspan="3" align="center">2)  <input size="55px" type="text" name="dict2" ></td>    
    </tr>
    <tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>       
     <td colspan="3" align="center">3)  <input size="55px" type="text" name="dict3" ></td>   
   </tr>
   <tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>       
    <td colspan="3" align="center">4)  <input size="55px" type="text" name="dict4" ></td>   
  </tr>
  <tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>   
    <td colspan="3" align="center">5)  <input size="55px" type="text" name="dict5" ></td>  
  </tr><tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>    
    <td colspan="3" align="center">6)  <input size="55px" type="text" name="dict6" ></td>   
  </tr><tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>    
   <td colspan="3" align="center">7)  <input size="55px" type="text" name="dict7" ></td>    
 </tr><tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>   
  <td colspan="3" align="center">8)  <input size="55px" type="text" name="dict8" ></td> 
</tr><tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>    
 <td colspan="3" align="center">9)  <input size="55px" type="text" name="dict9" ></td> 
</tr><tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>   
 <td colspan="3" align="center">10)  <input size="55px" type="text" name="dict10" ></td>  
</tr><tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>   
 <td colspan="3" align="center">11)  <input size="55px" type="text" name="dict11" ></td>    
</tr>
<tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>    
 <td colspan="3" align="center">12)  <input size="55px" type="text" name="dict12" ></td>    
</tr>
</table>
<table width="70%" align="center" class="dict2">
<tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>  
 <td colspan="3" align="center">13)  <input size="55px" type="text" name="dict13" ></td> 
</tr><tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td> 
 <td colspan="3" align="center">14)  <input size="55px" type="text" name="dict14" ></td> 
</tr><tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>    
  <td colspan="3" align="center">15)  <input size="55px" type="text" name="dict15" ></td>    
</tr><tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>  
  <td colspan="3" align="center">16)  <input size="55px" type="text" name="dict16" ></td>   
</tr><tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>     
  <td colspan="3" align="center">17)  <input size="55px" type="text" name="dict17" ></td>  
</tr><tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>      
  <td colspan="3" align="center">18)  <input size="55px" type="text" name="dict18" ></td>  
</tr><tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>     
 <td colspan="3" align="center">19)  <input size="55px" type="text" name="dict19" ></td>  
</tr><tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>    
 <td colspan="3" align="center">20)  <input size="55px" type="text" name="dict20" ></td>  
</tr><tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>     
  <td colspan="3" align="center">21)  <input size="55px" type="text" name="dict21" ></td> 
</tr><tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>    
 <td colspan="3" align="center">22)  <input size="55px" type="text" name="dict22" ></td> 
</tr><tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td> 
 <td colspan="3" align="center">23)  <input size="55px" type="text" name="dict23" ></td>  
</tr><tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>  
 <td colspan="3" align="center">24)  <input size="55px" type="text" name="dict24" ></td>   
</tr><tr><td align="center"><audio controls><source src="Dictation.mp3" type="audio/mpeg"></audio></td>     
 <td colspan="3" align="center">25)  <input size="55px" type="text" name="dict25" ></td>    </tr>
 <tr>
  <td colspan="4" align="center"><input class="bout" type="submit" value="submit" name="sub"></td>
</tr>
</table>
</form>                        
</BODY>
</html>