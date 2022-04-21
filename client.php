<?php
ini_set('soap.wsdl_cache_enabled', 0);
$service=new SoapClient("http://localhost/restaurantSOAWP/server.wsdl");
$taballservices=$service->connexionPDO();
$taballrecettes=$service->recettes();

print_r($taballrecettes);
?>