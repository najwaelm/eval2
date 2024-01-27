<?php


$connexion= new PDO("mysql://host=localhost;dbname=module6;charset=utf8","root","demo");
//var_dump($connexion);

$id= $_GET["id"];
$nbLigneAffectee = $connexion->exec("DELETE FROM etudiants WHERE id=$id");

if($nbLigneAffectee > 0){
    echo "vous avez supprimé l'étudiant $id";
}else{
    echo"aucun etudiant ayant l'id $id n'existe dans la base de donnée module6";
};
