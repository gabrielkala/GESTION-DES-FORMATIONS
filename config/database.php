
<?php
//Connexion à la base de donnée
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=formationppe", $username, $password);
    //configuration mode erreur
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //  $->query
    }
catch(PDOException $e)
    {
    echo "Impossible de se connecter à la bdd: " . $e->getMessage();
    }
?>
