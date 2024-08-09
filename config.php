<?php
try {
    $cnx = new PDO('mysql:host=localhost;dbname=projet_stage', "root", "");
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>