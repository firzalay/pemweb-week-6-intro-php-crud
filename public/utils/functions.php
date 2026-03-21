<?php

require_once "./config.php";

function getDataMahasiswa($pdo)
{
    $stmt = $pdo->query("SELECT * FROM mahasiswa");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getDataMahasiswaByNPM($pdo, $npm)
{
    $stmt = $pdo->prepare("SELECT * FROM mahasiswa WHERE NPM = ?");
    $stmt->execute([$npm]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function addDataMahasiswa($pdo, $dataMahasiswa)
{
    try {
        $stmt = $pdo->prepare("INSERT INTO mahasiswa VALUES (?, ?, ?, ?)");
        $stmt->execute([
            $dataMahasiswa["npm"],
            $dataMahasiswa["nama"],
            $dataMahasiswa["jurusan"],
            $dataMahasiswa["no_telp"],
        ]);

        echo "<script>alert('Berhasil menambahkan data!'); window.location.href='index.php'</script> ";
    } catch (PDOException $e) {
        echo "<script>alert('Gagal menambahkan data: " .
            $e->getMessage() .
            "');</script>";
    }
}

?>
