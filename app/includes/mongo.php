<?php
$servidor = '192.168.20.10:27017';
$usuario = getenv('MONGO_INITDB_ROOT_USERNAME');
$password = getenv('MONGO_INITDB_ROOT_PASSWORD');
$manager = new MongoDB\Driver\Manager("mongodb://$usuario:$password@$servidor");
