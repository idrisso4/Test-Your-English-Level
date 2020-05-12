<?php 
    include("connex.php");
    $idcon=connex("projet","myparam");
    $req="SELECT * FROM users ORDER BY cin";
    $result=mysql_query($req,$idcon);
    if(!$result)
    {
      echo "lecture impossible";
    }
    session_start();
    $_SESSION['acces']="non";
    include("login.php");
    include("inscris.php"); 
    mysql_close($idcon);
  ?>
<!DOCTYPE HTML>
  <html>
  <head>
   <meta charset="utf-8">
   <meta name="author" content="idrisso4"/>
   <title>English Test</title>
   <script language="JavaScript" type="text/javascript" src="test.js"></script>
   <link rel="stylesheet" type="text/css" href="design.css">
 </head>
 <BODY>
  <label class="h"><center>English Test</center></label>
  <form name="login" method="post" class="a" action='<?= $_SERVER["PHP_SELF"] ?>' enctype="application/x-www-form-urlencoded">            
    <fieldset class="form-signin"><legend>Login</legend>

      <table>
        <tr>
          <td>Email:</td>
          <td><input type="Email" size=25 name="mail"></td>
        </tr>

        <tr>
          <td> Password: </td>
          <td><input type="Password" size=25 name="pwd" class="pass"></td>
        </tr>
        <tr>
          <td><input class="bout" type="Reset" value="Reset"></td>
          <td><input class="bout" type="submit" value="Login"></td>
        </tr>
      </table>
    </fieldset>
  </form>


  <form  name="Inscription" method="POST" action='<?= $_SERVER["PHP_SELF"] ?>' class="b" enctype="application/x-www-form-urlencoded" 
    onSubmit="javascript: return validation();" >
   <label class="form-signin">(<FONT color="red">*</FONT>) mandatory field</label><br/>
   <fieldset class="form-signin" ><legend>Inscription</legend>
    <table>
      <tr>
        <td ><label><FONT color="red" >*</FONT> First Name : </label></td>
        <td><input name="prenom" type=text size=20 /> </td>
      </tr>
      <tr>
        <td ><label><FONT color="red" >*</FONT> Last Name : </label></td>
        <td><input name="nom" type=text size=20 /> </td>
      </tr>
      <tr>
        <td ><label><FONT color="red" >*</FONT> CIN : </label></td>
        <td><input name="cin" type=text size=20 /> </td>
      </tr>
      <tr>
        <td><label><FONT color="red" >*</FONT> Email : </label></td>
        <td><input name="mail" type="Email" size=20/> </td>
      </tr>
      <tr>
        <td><label><FONT color="red" >*</FONT> Password : </label></td>
        <td><input name="password1" type=password size=20/> </td>
      </tr>
      <tr>
        <td><label><FONT color="red" >*</FONT> Password : </label></td>
        <td><input name="password2" type=password size=20 class="pass" /> </td>
      </tr>
      <tr>
        <td><label><FONT color="red" >*</FONT> Sex : </label></td>
        <td>
          <input type="radio" name="sex" value="man"> Man
          <input type="radio" name="sex" value="woman"> Woman
        </td>
      </tr>
      <tr>
        <td><label>I am a : </label></td>
        <td>
          <select name="Occupation">
            <option value="student">Student</option>
            <option value="employee">Employee</option>
          </select> 
        </td>
      </tr>
      <tr><td>Birth date :</td>
        <td> <input type="date" name="date" /> </td>
      </tr>
      <tr align="center">
        <td ><input class="bout" type="Reset" value="Reset"></td>
        <td><input class="bout" type="submit" value="Sign In"></td>
      </tr>
    </table>
  </fieldset>
</form>

<div class="description">
</br>We have 6 levels:</br>A1(BEGINNER) - A2(ELEMENTARY)<br>B1(INTERMEDIATE) - B2(UPPER INTERMEDIATE)<br>C1(ADVANCED) - C2(PROFICIENT).</br> To pass from level X to the next level, you must have score > 95/100 in the test<br> of level X which contains 4 parts: </br>
1- Comprehension </br>
2- Grammar</br>
3- Listening </br>
4- Dictation</br>
Every part have 25 pts to succeed in one part you must have score > 23.  
</div>
</BODY>
</html>