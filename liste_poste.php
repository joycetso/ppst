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
    <h3>Liste des postes</h3>
<table class="table table-striped table-hover">
            <thead>
                <th>CodePoste</th>
                <th>LibPoste</th>
                <th>Salaire</th>
            </thead>
            
        <?php
                $my_sql="SELECT * FROM poste";
                include("connexion.php");
                $result=mysqli_query($link,$my_sql); 
                while($row=mysqli_fetch_array($result)){
                    echo '<tr>
                    <td>'.$row['CodePoste'].'</td>
                    <td>'.$row['LibPoste'].'</td>
                    <td>'.$row['SalPoste'].'</td>
                    </tr>';
                }
                mysqli_close($link);
            
            ?>
  <table>
            </div>
</body>
</html>