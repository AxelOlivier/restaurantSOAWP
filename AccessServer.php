<?php
function connexionPDO() {
    $login = "root";
    $mdp = "";
    $bd = "restaurantSOAWP";
    $serveur = "localhost"; 
    try {
        $conn = new PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $conn;
    } catch (PDOException $e) {
        return "Erreur de connexion PDO ";
        print $e;
        die();
    }
}

function createRecipe(){
return $recipe;
}
function supprRecipe(){
    return $recipe;
}
function displayRecipe(){
    return $recipe;
}

ini_set('soap.wsdl_cache_enabled', 0);
$serversoap=new SoapServer("http://localhost/restaurantSOAWP/server.wsdl");
$serversoap->addFunction("connexionPDO");

$serversoap->addFunction("createRecipe");
$serversoap->addFunction("supprRecipe");
$serversoap->addFunction("displayRecipe");
$serversoap->handle();
?>