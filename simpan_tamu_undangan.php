<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fungsi untuk mendapatkan waktu sekarang dalam zona waktu Asia/Jakarta
    function getWaktuSekarang() {
        $timezone = new DateTimeZone('Asia/Jakarta');
        $waktuSekarang = new DateTime('now', $timezone);
        return $waktuSekarang->format('Y-m-d H:i:s');
    }

    // Tangkap data dari formulir
    $nama = $_POST["nama"];
    $ucapan = $_POST["ucapan"];
    $konfirmasi = $_POST["konfirmasi"];
    
    // Menyiapkan array untuk menyimpan data
    $data = array(
        "nama" => $nama,
        "ucapan" => $ucapan,
        "konfirmasi" => $konfirmasi,
        "waktu" => getWaktuSekarang()
    );

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

        // Memulai transaksi
        $pdo->beginTransaction();

        // Menyimpan data ke database dalam satu transaksi
        $query = "INSERT INTO daftar_tamu (nama, ucapan, konfirmasi, waktu) VALUES (:nama, :ucapan, :konfirmasi, :waktu)";
        $stmt = $pdo->prepare($query);
        $stmt->execute($data);

        // Commit transaksi
        $pdo->commit();

        // Respon sukses
        echo "Data berhasil disimpan.";

    } catch (PDOException $e) {
        // Rollback transaksi jika terjadi kesalahan
        $pdo->rollback();

        // Tangani kesalahan jika ada masalah dengan koneksi atau penyimpanan data
        echo "Koneksi database gagal atau terjadi kesalahan: " . $e->getMessage();
    }
} else {
    // Tangani jika tidak ada data yang dikirimkan via POST
    echo "Tidak ada data yang dikirimkan.";
}
?>
