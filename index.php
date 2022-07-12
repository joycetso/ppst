<?php
        session_start();
        
        if (empty($_POST["Username"])||(empty($_POST["mdp"])))
        {
            $_info="<font color='red'>Veuillez remplir les champs";
        }
        else
        {
            $Nom=$_POST["Username"];
            $Motdepasse=$_POST["mdp"];
            $_SESSION["autoriser"] ="oui";
            
            //Vérifier si les données à enrégistrer exitent déjà
            $sql_select="SELECT* FROM utilisateur WHERE Username='$Nom' ";
            include("connexion.php");
            $resultat=mysqli_query($link,$sql_select);
            mysqli_close($link);
            if(mysqli_num_rows($resultat)>0)
                { 
                    $_info="connexion réussie";
                    header("location: accueil.php");
                    
                }
            else
            {
                $_info="<font color='red'>Informations erronnées";  
            }
           
        }
        
    ?>
<!Doctype>
<html>
    <head>
        <meta charset ="utf-8"/>
        <title></title>
   </head>
<body>
<section>
        <h1>Connexion</h1>
    <form action=""method="POST">
        <label>Username</label>
        <input type="text" name="Username" placeholder="Entrer le nom d'utilisateur" required/></br></br>
        <label>Password</label>
        <input type="password" name="mdp"   placeholder="Entrer le mot de passe" required/></br></br>
        <input type ="submit" value="Valider"/></br></br>
        <?php
            echo $_info;
         ?>    
    </form>
    </section>
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
    section
    {
    background-color: white;
    padding: 10px;
    display: flex;
    flex-direction: column;
    width: 350px;
    border-radius: 10px;
    margin-top: 100%;
    margin-bottom: 50%;
    margin-right :50%;
    margin-left: 50%;
    
    }
    section h1
    {
       text-align:center;
       
    }
    form
    {
       flex-direction: column;
    }
    
    form input
    {
       margin:5px 0;
       padding :5 px 5px;
       outline:0;
       border :1px solid black;
       width: 350px;
       height: 50px;
       border-radius: 6px;
    
    }
    form input[type="submit"]
    {
       background-color: rgb(165, 101, 42);
       border: 0;
       color: white;
       margin-top: 10px;
    
    }
    
    </style>'
    
    ?>


</body>   
<html>
