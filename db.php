<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=db_login_integrador", "hngsrl_admin", "kVp4?`]138f7");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
