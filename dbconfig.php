<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
->withServiceAccount('phpcrud-9b7e1-firebase-adminsdk-ogt57-19d4df229d.json')
->withDatabaseUri('https://phpcrud-9b7e1-default-rtdb.firebaseio.com');

$database = $factory->createDatabase();
?>