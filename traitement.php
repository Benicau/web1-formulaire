<?php


if(isset($_POST['nom']))
{
   $err=0;
   if(empty($_POST['nom']))
   {
       $err=1;
   }
   else
   {
       $nom=htmlspecialchars($_POST['nom']);
   }
   if(empty($_POST['prenom']))
   {
       $err=2;
   }
   else
   {
       $nom=htmlspecialchars($_POST['prenom']);
   }
   if(empty($_POST['pays']))
   {
       $err=3;
   }
   else
   {
       $nom=htmlspecialchars($_POST['pays']);
   }
   if(empty($_POST['message']))
   {
       $err=4;
   }
   else
   {
       $nom=htmlspecialchars($_POST['message']);
   }
   if ($err==0)
   {
       echo 'ok';
   }
   else
   {
    header("LOCATION:index.php?err=".$err);
   }
}
else
{
   header("LOCATION:index.php");
}

?>