<?php

define('DBNAME', 'biomedicina'); //Nome do banco de dados
define('DBUSER', 'root'); //Usuario do banco de dados
define('DBPASS', ''); //Senha do banco de dados
define('DBHOST', 'localhost'); //Host do banco de dados

try {
    $conn = new PDO(        'mysql:host=' . DBHOST . ';dbname=' . DBNAME, DBUSER, DBPASS    );
} catch ( PDOException $e) {
    echo "Erro: " . $e->getMessage() . "<br>";
    die();
    }

/**
 * Inicia uma conexão com o banco de dados via PDO
 * Configure o banco de dados no arquivo api/database_api.php
 * @global type $conn
 * @return \PDO
 */
function getConnection() {
    global $conn;

    return $conn;
}
