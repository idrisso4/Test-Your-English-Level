  function verifEmail(a) 
  {
    adresse = a;
    taille = a.length;  
    validelog = false;
    validedom = false;
    valideext = false;
    arob = adresse.lastIndexOf("@");
    login = adresse.substring(0,arob); 
    pointfinal = adresse.lastIndexOf(".");
    extension = adresse.substring(pointfinal,taille);
    domaine = adresse.substring(arob+1,pointfinal);
    if ( login.length > 2 ) 
    {
      validelog = true;
    }
    else 
    {
      validelog = false;
    }
    if ( domaine.length > 1 ) 
    {
      validedom = true;
    }
    else 
    { 
      validelog = false;
    }
    if ( pointfinal > -1 && (extension.length == 3 || extension.length == 4) ) 
    {
      valideext = true;
    }
    else 
    {
      valideext = false;
    }
    if ( validelog == true && validedom == true && valideext == true ) 
    {
      return true;
    }
    else 
    {
      return false;
    }
  }
function validation() { 
var r1=document.Inscription.prenom.value;
var r2=document.Inscription.nom.value;
var r3=document.Inscription.sex.value;
var r4=document.Inscription.mail.value;
var r5=document.Inscription.cin.value;
var r6=document.Inscription.password1.value;
var r7=document.Inscription.password2.value;
if (r1!="" && r2!="" && r3!="" && r4!="" && r5!="" && r6!="" && r7!="")
{ if (!verifEmail(r4))
{alert("il faut donner Email sous la forme: login@domaine.TLD");}
else return true;}
if (r6!=r7) {alert("Mot de passe incorrect!");}
else
{alert("il faut remplir toutes les cases contenant *");}}
