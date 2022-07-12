<!doctype>
<html>
    <head>
        <meta charset ="utf-8"/>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
        <title></title>
   </head>
   <div class="container-fluid">
        <?php include("entete.php");
            ?>
        </div>
<body>
<section>
        <h1 align= "center">Entrez les postes</h1>
        <form   action="" method="POST" style="margin: auto; width: 420px; height: 125px;";  >
        <label>Code Poste</label>
        <input type="text" name="CodePoste"  size="40" style="height:45px; width: 380px;"required/></br></br>
        <label>LibPoste</label>
        <input type="text" name="LibPoste" size="40" style="height:45px; width: 380px;"required/></br></br>
        <label>Salaire</label>
        <input type="text" name="SalPoste" size="40" style="height:45px; width: 380px;"required/></br></br>
        <input type ="submit" value="Valider" btn-btn-danger size="40" style="height:55px; width: 380px;"/>  </br></br>    
    </form>
</section>
<?php
        //required_once(connexion.php);
        if (empty ($_POST["CodePoste"])||(empty($_POST["LibPoste"]))||(empty($_POST["SalPoste"])))
        {
            echo"Veuillez remplir les champs";
        }
        else
       {
           $Code=$_POST["CodePoste"];
           $Lib=$_POST["LibPoste"];
           $Sal=$_POST["SalPoste"];



        $sql_select="SELECT * FROM poste WHERE CodePoste='$Code'";

        include("connexion.php");
   
        $resultat=mysqli_query($link,$sql_select);
        if(mysqli_num_rows($resultat)>0)
        {
            echo "$Code existe déjà dans la base de données";
            mysqli_close($link);
        }
        else
        {
            //insertion dans la base de données 
            $sql="INSERT INTO poste values('$Code','$Lib','$Sal')";
            mysqli_query($link,$sql);
            echo"Information enregistrée avec succès";
            mysqli_close($link);
            /*header('Location::http://localhost/PPSTGRH/Poste.php');*/
        }
       
    }
   
   ?>
   <!-- ************Nombre d'Etudiant enregistre********-->
   <?php
         $sql_all="SELECT * FROM poste";
         include("connexion.php");
         $liste_poste = mysqli_query($link,$sql_all);
         $nombre_poste=mysqli_num_rows($liste_poste);
           echo"<font color='blue'> il existe $nombre_poste postes enregistrés</font></br>";
           mysqli_close($link);
   ?>
</body>
