<?php


if(!empty($_POST)){
    $connexion = new PDO("mysql://host=localhost;dbname=module6;charset=utf8", "root", "demo");
   
   
    $prenom = htmlentities($_POST["prenom"]);
    $nom = htmlentities($_POST["nom"]);
    $email = htmlentities($_POST["email"]);
    $cv = htmlentities($_POST["cv"]);
    $dt_naissance = htmlentities($_POST["dt_naissance"]);
    $isAdmin = ($_POST["isAdmin"]);
    
    $sql="INSERT INTO etudiants (prenom, nom, email, cv, dt_naissance, isAdmin)
    VALUES
    ('$prenom','$nom', '$email','$cv','$dt_naissance',$isAdmin)
    ";
   
    $ajout = $connexion->exec($sql);
  

};



?>

<form method="post">
    <div>
        <label for="prenom">prénom</label>
        <input type="text" name="prenom">
    </div>
    <div>
        <label for="nom">nom</label>
        <input type="text" name="nom">
    </div>
    <div>
        <label for="email">email</label>
        <input type="email" name="email" >
    </div>
    <div>
        <label for="cv">cv</label>
        <textarea name="cv" id="cv" cols="30" rows="10"></textarea>
       
    </div>
    <div>
        <label for="dt_naissance">date de naissance</label>
        <input type="date" name="dt_naissance" >
    </div>
   
    <div>
        <p>Is admin?</p>
        <input type="radio" id="isAdmin" name="isAdmin" value="1">
        <label for="isAdmin">yes</label><br>
        <input type="radio" id="isAdmin" name="isAdmin" value="0">
        <label for="isAdmin">no</label><br>
    </div>

    <input type="submit" value="ajouter un étudiant!">
</form>