
<?php
    session_start(); //(empty($_POST["Code_Filiere"])

   
        $_info='';
        if(empty($_POST["Matricule"])||(empty($_POST["Nom"]))
            || (empty($_POST["Prenom"]))|| (empty($_POST["Sexe"]))
            ||(empty($_POST["Domicile"]))||(empty($_POST["Tel"]))
            ||(empty($_POST["Date_naiss"]))||(empty($_POST["Email"]))
            ||(empty($_POST["CodePoste"])))
        {
          $_info="<font color='red'> Veuillez remplir les champs";
        }
         else
        { 
            
            $Mat=$_POST["Matricule"];
            $Name=$_POST["Nom"];
            $Preno=$_POST["Prenom"];
            $Sex=$_POST["Sexe"];
            $Domi=$_POST["Domicile"];
            $Telephone=$_POST["Tel"];
            $Date=$_POST["Date_naiss"];
            $Em=$_POST["Email"];
            $Code=$_POST["CodePoste"];
            /*$enreg="INSERT INTO employe values('$Mat','$Name','$Preno','$AgeEmploye','$Sex','$Domi','$Telephone','$Date','$Em','$Code')";
            mysqli_query($link,$enreg);
            $_info="<font color='red'> Informations enrégistrées avec succès"; 
            mysqli_close($link);*/ 
            
            //verifie si l'employe existe deja dans la base de donnees

            $sql_select="SELECT * FROM employe WHERE Matricule='$Mat'";
            $resultat=mysqli_query($link,$sql_select);
                if(mysqli_num_rows($resultat)>0)
                {
                
                        $_info= "$Mat existe déjà dans la base de données";
                        mysqli_close($link);
                }
        
            
            
            else    
        {
                 include("connexion.php");
                //insertion dans la base de données 
                $sql="INSERT INTO employe values('$Mat','$Name','$Preno','$Sex','$Domi','$Telephone','$Date','$Em','$Code')";
                
                if(mysqli_query($link,$sql))
                {
                    $_info="Information enregistrée avec succès";
                }
                else
                {
                    $_info="erreur de erronné";
 
                }
                mysqli_close($link);
                /*header('Location::http://localhost/PPSTGRH/Poste.php');*/
        }
     }
?>
<!Doctype>
<html>
    <head>
        <meta charset ="utf-8"/>
       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="style.css"/>
        <title></title>
    </head>
    <div class="container-fluid">
        <?php include("entete.php");?>
    </div>
<body>
    <section >
    <table align="center">
        <h1>Ajouter un employe</h1>
    <form action=""method="POST">
        <tr>
            <td>Matricule</td>
            <td><input type="text" name="Matricule"   minlength="5" maxlength="5" size="40" style="height:35px; width: 80px;"required/></td>
        </tr>
        <tr>
            <td>Nom</td>
            <td><input type="text" name="Nom"   size="40" style="height:35px; width: 380px;"required/></td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td> <input type="text" name="Prenom"   size="40" style="height:35px; width: 380px;"required/></td>
    </tr>
        <tr>
            <td>Sexe</td>
            <td>
            <select type="text" name="Sexe" style="height:25px; width: 380px;"required>
                <option value="">--Please choose an option--</option>
                <option value="Feminin">Feminin</option>
                <option value="Maxulin">Maxulin</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Domicile</td>
            <td><input type="text" name="Domicile"   size="40" style="height:35px; width: 380px;"required/></td>
        </tr>
        <tr>
            <td>Telephone</td>
            <td> <input type="tel" name="Tel"  size="40" style="height:35px; width: 380px;" required/></td>
        </tr>
        <tr>
            <td>Date_naissance</td>
            <td><input type="text" name="Date_naiss"  size="40" style="height:35px; width: 380px;" required/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="Email"   size="40" style="height:35px; width: 380px;"required/></td>
        </tr>
        <tr>
            <td>Poste:</td>
            <td><select name="CodePoste" id="CodePoste"  style="height:25px; width: 380px;"> 
                        <option value="">Selectionnez le poste</option>
                    <?php
                    include("connexion.php");
                   $requ_fil="SELECT CodePoste , LibPoste FROM poste";
                   $donnees_fil=mysqli_query($link,$requ_fil);
                   while($resultat_cours=mysqli_fetch_array($donnees_fil))
                        {?>
                        <option value="<?php echo $resultat_cours['CodePoste'];?>"><?php echo  $resultat_cours['CodePoste']." "?></option>
                        <?php }
                        mysqli_close($link); ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type ="submit" value="Valider"  class="btn-btn-danger"   size="40" style="height:35px; width: 280px;"/></td>
        </tr>
        <?php echo $_info?>

      
       
    </form>
    </table>
    

</body>
<!-- ************Nombre d'Employe enregistre********-->

</section>
    <?php
      $sql_all="SELECT * FROM employe";
      include("connexion.php");
      $liste_employe = mysqli_query($link,$sql_all);
      $nombre_employe=mysqli_num_rows($liste_employe);
        $_info="<font color='blue'> il y a $nombre_employe employes  </font></br>";
        mysqli_close($link);
?>
</html>
           