<?php
$host = "mysql-motostats.alwaysdata.net";
$dbname = "motostats_db";
$user = "motostats";
$password = "Acqua!03tSQLProj";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $user,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
