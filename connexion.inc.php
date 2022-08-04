<?php

$cnx;
$user='le1ou0';
$pass='le1ou0';





$host ='mysql:host=localhost;dbname=f';
$user ='le1ou0';
$password ='le1ou0';

try {

    $cnx = new PDO('mysql:host=localhost;dbname=lfp_fbf', $user, $password);

 /*    $cnx = new PDO($host,$user,$password);

    foreach($cnx->query('SELECT * from joueurs') as $row) {
        print_r($row);
    } */

} catch (PDOException  $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}