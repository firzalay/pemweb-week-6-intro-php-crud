<?php

require_once "./config.php";

function getDataMahasiswa($pdo)
{
    $stmt = $pdo->query("SELECT * FROM mahasiswa");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>
