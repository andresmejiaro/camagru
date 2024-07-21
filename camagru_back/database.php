<?php

function connect_db(){
    $db_host = getenv('DB_HOST');
    $db_user = getenv('MARIADB_USER');
    $db_pass = getenv('MARIADB_PASSWORD');
    $db_name = getenv('MARIADB_DATABASE');

    try {
        $dsn = "mysql:host=$db_host;dbname=$db_name";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new PDO($dsn, $db_user, $db_pass, $options);
        return $pdo;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return NULL;
    };
}
?>
