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

function updateDataMahasiswa($pdo, $dataMahasiswa)
{
    try {
        $stmt = $pdo->prepare(
            "UPDATE mahasiswa SET NPM=?, nama=?, jurusan=?, no_telp=? WHERE NPM=? ",
        );
        $stmt->execute([
            $dataMahasiswa["npm"],
            $dataMahasiswa["nama"],
            $dataMahasiswa["jurusan"],
            $dataMahasiswa["no_telp"],
            $dataMahasiswa["npm"],
        ]);

        echo "<script>alert('Berhasil mengupdate data!'); window.location.href='index.php'</script> ";
    } catch (PDOException $e) {
        echo "<script>alert('Gagal mengupdate data: " .
            $e->getMessage() .
            "');</script>";
    }
}

function deleteDataMahasiswa($pdo, $npm)
{
    try {
        $stmt = $pdo->prepare("DELETE FROM mahasiswa WHERE NPM = ?");
        $stmt->execute([$npm]);

        $rowCount = $stmt->rowCount();

        if ($rowCount > 0) {
            echo "<script>alert('Berhasil delete data!'); window.location.href='index.php'</script> ";
        }
    } catch (PDOException $e) {
        echo "<script>alert('Gagal delete data: " .
            $e->getMessage() .
            "');</script>";
    }
}

?>
