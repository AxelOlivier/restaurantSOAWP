<?php
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
$serversoap->addFunction("createRecipe");
$serversoap->addFunction("supprRecipe");
$serversoap->addFunction("displayRecipe");
$serversoap->handle();
?>