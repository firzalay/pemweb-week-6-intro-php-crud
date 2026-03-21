<?php 

$npm = $_GET["npm"];

if ($_GET["page"] == "delete") {
    deleteDataMahasiswa($pdo, $npm);
}

?>