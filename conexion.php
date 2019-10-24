<?php
$serverName = "localhost";
$connectionInfo= array("Database"=>"SIGAA", "UID"=>"Juan", "PWD"=>"22446688", "CharacterSet"=>"UTF-8" );

$connexion= sqlsrv_connect($serverName, $connectionInfo);

?>	