<!doctype>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href=""/>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
        <tiltle></title>
</head>
<div class="container-fluid">
        <?php include("entete.php");
            ?>
        </div>
<body>

<div class="container">
    <h3>Liste des employes</h3>
<table class="table table-striped table-hover">
            <thead>
                <th>MATRICULE</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>SEXE</th>
                <th>DOMICILE</th>
                <th>TELEPHONE</th>
                <th>DATE NAISS</th>
                <th>EMAIL</th>
                <th>CODEPOSTE</th>
            </thead>
            
        <?php
                $my_sql="SELECT * FROM employe";
                include("connexion.php");
                $result=mysqli_query($link,$my_sql); 
                while($row=mysqli_fetch_array($result)){
                    echo '<tr>
                    <td>'.$row['Matricule'].'</td>
                    <td>'.$row['Nom'].'</td>
                    <td>'.$row['Prenom'].'</td>
                    <td>'.$row['Sexe'].'</td>
                    <td>'.$row['Domicile'].'</td>
                    <td>'.$row['Tel'].'</td>
                    <td>'.$row['Date_naiss'].'</td>
                    <td>'.$row['Email'].'</td>
                    <td>'.$row['CodePoste'].'</td>
                    </tr>';
                }
                mysqli_close($link);
            
            ?>
  <table>
            </div>
</body>
</html>