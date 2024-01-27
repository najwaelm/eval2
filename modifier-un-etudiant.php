<?php

$connexion = new PDO("mysql://host=localhost;dbname=module6;charset=utf8", "root", "demo");

if(!empty($_POST)){
    $id = htmlentities($_POST["id"]);
    $prenom = htmlentities($_POST["prenom"]);
    $nom = htmlentities($_POST["nom"]);
    $email = htmlentities($_POST["email"]);
    $cv = htmlentities($_POST["cv"]);
    $dt_naissance = htmlentities($_POST["dt_naissance"]);
    $isAdmin = htmlentities($_POST["isAdmin"]);
    

    $sql ="UPDATE etudiants
        SET prenom = '$prenom', nom = '$nom' , email='$email', cv='$cv', dt_naissance='$dt_naissance', isAdmin = '$isAdmin'
        WHERE id = $id
    ";

    $modif = $connexion->exec($sql);

    if($modif ==1){
        echo"les infos sur l'étudiant numero $id ont été mis à jour! <br>";
    }

};

$id = $_GET["id"];

$sql="SELECT *
    FROM etudiants
    WHERE id = $id
";

$stmt = $connexion->query($sql);
$etudiant = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<form method="post">
    <input type="hidden"  name="id" value="<?php echo $etudiant["id"] ?>">
    <div>
        <label for="prenom">prénom</label>
        <input type="text" name="prenom" value="<?php echo $etudiant["prenom"] ?>">
    </div>
    <div>
        <label for="nom">nom</label>
        <input type="text" name="nom" value="<?php echo $etudiant["nom"] ?>">
    </div>
    <div>
        <label for="email">email</label>
        <input type="email" name="email" value="<?php echo $etudiant["email"] ?>">
    </div>
    <div>
        <label for="cv">cv</label>
        <!-- <input type="text" name="cv" value="<?php echo $etudiant["cv"] ?>"> -->
        <textarea  name="cv" id="cv" cols="30" rows="10" ><?php echo $etudiant["cv"] ?>"</textarea>
        
    </div>
    <div>
        <label for="dt_naissance">date de naissance</label>
        <input type="date" name="dt_naissance" value="<?php echo $etudiant["dt_naissance"] ?>">
    </div>
    <div>
        <p>Is admin?</p>
        <input type="radio" id="isAdmin" name="isAdmin" value="1">
        <label for="isAdmin">yes</label><br>
        <input type="radio" id="isAdmin" name="isAdmin" value="0">
        <label for="isAdmin">no</label><br>
    </div>

    <input type="submit" value="Mettre à jour les infos de l'étudiant!">
</form>