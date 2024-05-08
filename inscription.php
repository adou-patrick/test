<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_etudiant";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $con->connect_error);
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo"envoie réussi"; 
}
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion_etudiants</title>
</head>
<body>
     <form action="" method= "POST" align="center" >
         <label for="nom">Nom:</label><br>
         <input type="text" name="nom" placeholder="entrer votre nom..." required><br>
         <label for="email">Prenom:</label><br>
         <input type="email" name="email" placeholder="entrer votre email..." required><br>
         <label for="mdp">Mot de passe:</label><br>
         <input type="password" name="mdp" placeholder="entrer mot de passe..." required><br>
         <label for="role">profession:</label>
         <select name="role" required>
            <option value="utilisateur">utilisateur</option>
            <option value="administrateur">administrateur</option>
         </select> <br>
         <input type="submit" name="submit" value="s'inscrire"> <br>
         déjà inscris? <button> <a href="connexion.php">se connecter</a></button>
    </form>
   </body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $options = $_POST['options'];

// SQL query to retrieve user information
$sql ="INSERT INTO gestion (nom, email, mdp, profession) VALUES ('$nom', '$email', '$mdp','$options')";
$result = mysqli_query($conn, $sql);

header("location:connexion.php");

}

mysqli_close($conn);
?>
</html>
