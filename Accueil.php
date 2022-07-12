<?php
session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location: index.php");
      exit();
   }
?>

<!Doctype>
<html>
    <head>
        <meta charset ="utf-8"/>
        <title></title>
   </head>
<body>
<header>
<a class="logo" href="#"><img src="index.png" width="50" height="50" class="d-inline-block align-top" alt=""></a>
    <nav>
    
        <a id="icon-menu" href="#"><img src="menu-icon.png" alt=""></a>

        <ul>
        
        <div class="dropdown">
               </div>
                
                 <a href="deconnexion.php"><li class="list">DECONNEXION</li></a>
        </ul>
    </nav>
</header>

         <div>
         <h1>Bienvenue!</h1>
            <a href="Employe.php"><input type="button" name="submit" value="Gestion des employes"  size="40" style="height:115px; width: 180px;"/></a>
            <a href="Poste.php"><input type="button" name="submit" value="Gestion des postes" size="40" style="height:115px; width: 180px;"/></a>
            <a href="Paiement.php"><input type="button" name="submit" value="Gestion du paiement"  size="40" style="height:115px; width: 180px;"/>
            <a href="Conge.php"><input type="button" name="submit" value="Gestion des conges"  size="40" style="height:115px; width: 180px;"/></a>

</div>


<?php
    echo'<style>
body
{
background-color: rgb(165, 91, 42);
display:flex;
align-items:center;
justify-content:center;
height: 10px;
}
div
{

padding: 10px;
position: fixed;
display: flex;
flex-direction: column;
width: 360px;
border-radius: 6px;
margin-top: 110%;
margin-bottom: 60%;
margin-right :0%;
float: right;

}
 h1
{
  
   position : abslolute;
   float: left;

}
 input[type="button"]
    {
       background-color: blue;
       border:0;
       color: white;
       font-size: 100%;
       margin-top: 10px;
       font-family: Arial, Helvetica, sans-serif;
       cursor: pointer;
      
    }

    ul{
      list-style: none;
      font-weight: bolder;
      color:black;
      margin-bottom: 0;
      padding: 0;
    }
    header{
      width:100%;
      height:50px;
      position: absolute;
      top: 0;
      padding:0;
      margin: 0;
      border-bottom: 4px solid rgba(20, 156, 190, 0.52);
    }
    li{
      display: inline-block;
      font-size: 18px;
      padding: 8px;
      text-decoration: none;
      color:black;
      margin: 0;
    }
    li:hover{
      background-color:white;
      color: rgb(190, 151, 20);
      
    }
    nav 
    {
      float: right;
      padding:0;
      margin-bottom: 0;
    }
    .app-button{
      list-style: none;
      text-align: center;
      background-color: #01AAAD;
      width: 150px;margin:0;
      line-height: 60px;
 }
</style>'
?>
