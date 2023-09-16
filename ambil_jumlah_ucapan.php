<?php
    // Konfigurasi database
    $host = "localhost"; // Ganti dengan nama host database Anda
    $database = "db_dimas_dina"; // Ganti dengan nama database Anda
    $username = "root"; // Ganti dengan nama pengguna database Anda
    $password = ""; // Ganti dengan kata sandi database Anda

try {
    // Membuat koneksi PDO
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    // Set mode error untuk PDO ke Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query untuk mengambil jumlah ucapan dalam setiap kategori
    $query = "SELECT
                SUM(CASE WHEN konfirmasi = 'Hadir' THEN 1 ELSE 0 END) AS hadir,
                SUM(CASE WHEN konfirmasi = 'Tidak Hadir' THEN 1 ELSE 0 END) AS tidak_hadir,
                SUM(CASE WHEN konfirmasi = 'Masih Ragu' THEN 1 ELSE 0 END) AS masih_ragu
              FROM daftar_tamu"; // Ganti nama_tabel dengan nama tabel yang sesuai

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    // Mengambil hasil query
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Mengembalikan hasil dalam format JSON
    header('Content-Type: application/json');
    echo json_encode($result);
} catch (PDOException $e) {
    // Tangani kesalahan jika koneksi atau query gagal
    echo "Error: " . $e->getMessage();
}
?>
