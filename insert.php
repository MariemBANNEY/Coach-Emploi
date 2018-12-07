<?php
$link = mysqli_connect("localhost", "root", "", "coach-emploi");
 
// vérifier la connexion
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Échapper les entrées utilisateur pour la sécurité
$nom = mysqli_real_escape_string($link, $_REQUEST['nom']);
$prenom = mysqli_real_escape_string($link, $_REQUEST['prenom']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$tel = mysqli_real_escape_string($link, $_REQUEST['tel']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']); 
$password2 = mysqli_real_escape_string($link, $_REQUEST['password2']); 
 
// tentative d'insertion d'une requête
if($password==$password2){
	$sql = "INSERT INTO utilisateur (nom, prenom, email, tel,password,password2) VALUES ('$nom', '$prenom', '$email', '$tel', '$password', '$password2')";
	if(mysqli_query($link, $sql)){
		header("location: index.php");
   
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
}
else{
	echo "ERREUR:mots de passe non identiques. " ;
}
// fermer la connexion
mysqli_close($link);
?>