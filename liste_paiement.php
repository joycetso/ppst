<!doctype>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href=""/> 
        <tiltle></title>
</head>
<div class="container-fluid">
        <?php include("entete.php");
            ?>
        </div>
<body>
<div class="container">
    <h3>Liste des paiements</h3>
<table class="table table-striped table-hover">
            <thead>
                <th>Matricule</th>
                <th>Annee</th>
                <th>Mois</th>
                <th>Jour</th>
                <th>Montant</th>
            </thead>
            
        <?php
                $my_sql="SELECT * FROM paiement";
                include("connexion.php");
                $result=mysqli_query($link,$my_sql); 
                while($row=mysqli_fetch_array($result)){
                    echo '<tr>
                    <td>'.$row['Matricule'].'</td>
                    <td>'.$row['Annee'].'</td>
                    <td>'.$row['Mois'].'</td>
                    <td>'.$row['Jour'].'</td>
                    <td>'.$row['Montant'].'</td>
                    </tr>';
                }
                mysqli_close($link);
            
            ?>
  <table>
            </div>
</body>
</html>