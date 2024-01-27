<?php

$connexion= new PDO("mysql://host=localhost;dbname=module6;charset=utf8","root","demo");
var_dump($connexion);

// écrire ma requete => STATEMENT stmt
$sql="
SELECT id, prenom, nom, email, cv, dt_naissance, isAdmin, dt_mis_a_jour
FROM etudiants
";
$stmt= $connexion->query($sql);

var_dump($stmt);

$tableau = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($tableau);
// afficher le résultat de ma requete ds un tableau html
echo"
    <table>
    <tr>
    <th>id</th>
    <th>prenom</th>
    <th>nom</th>
    <th>email</th>
    <th>cv</th>
    <th>dt_naissance</th>
    <th>isAdmin</th>
    <th>dt_mis_a_jour</th>
    </tr>
";
foreach($tableau as $key => $value){
    echo"
    <tr>
    <td>{$value["id"]}</td>
    <td>{$value["prenom"]}</td>
    <td>{$value["nom"]}</td>
    <td>{$value["email"]}</td>
    <td>{$value["cv"]}</td>
    <td>{$value["dt_naissance"]}</td>
    <td>{$value["isAdmin"]}</td>
    <td>{$value["dt_mis_a_jour"]}</td>
    </tr>
    ";
};

echo"</table>";