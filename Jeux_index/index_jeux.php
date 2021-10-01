
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Choix du jeux</title>
</head>
<body>
    <h1 class="text-center">Veuillez choisir le jeux que vous voulez</h1>
    <form action="../connexion/deco.php" method="POST">
        <button type="submit"  class="btn btn-primary" name="btn-deco">Se déconnecter</button>
    </form>
   
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Modifier</th>
            <th scope="col">Voir le jeu</th>
        </tr>
        </thead>
                <tr>
                <td>JEUX DE FOOT</td>
                    <td><a href="../Jeux1/admin/admin-index.php" target="blank" class="btn btn-warning">Modifier</a></td>
                    <td><a  href="../Jeux1/" class="btn btn-success" target="_blank">Voir le jeu</a></td>        
                </tr>
                <tr>
                <td>JEUX TELE</td>
                    <td><a href="../Jeux2/admin/admin-index.php" target="blank" class="btn btn-warning">Modifier</a></td>
                    <td><a  href="../Jeux2/" class="btn btn-success" target="blank" class="btn btn-success">Voir le jeu</a></td>     
                     
                </tr>
</table>

</body>
</html>