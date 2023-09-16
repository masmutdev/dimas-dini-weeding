<?php
    // Konfigurasi database
    $host = "localhost"; // Ganti dengan nama host database Anda
    $dbname = "db_dimas_dina"; // Ganti dengan nama database Anda
    $username = "root"; // Ganti dengan nama pengguna database Anda
    $password = ""; // Ganti dengan kata sandi database Anda

try {
    // Buat koneksi PDO ke database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Set mode error PDO menjadi exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query untuk mengambil data komentar dari tabel daftar_tamu
    $sql = "SELECT * FROM daftar_tamu";
    $stmt = $pdo->query($sql);

    // Fetch semua data komentar sebagai array assosiatif
    $komentar = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Mengembalikan data komentar dalam format JSON
    header('Content-Type: application/json');
    echo json_encode($komentar);
} catch (PDOException $e) {
    // Tangani error jika terjadi kesalahan pada koneksi atau query
    echo "Error: " . $e->getMessage();
}
?>
