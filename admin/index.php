<!DOCTYPE html>
<html>
<head>
    <title>Form Undangan Nikah</title>
</head>
<body>
    <h2>Form Undangan Nikah</h2>
    <form method="post">
        <label for="nama_tamu">Masukkan Nama Tamu (pisahkan dengan koma):</label><br>
        <textarea name="nama_tamu" id="nama_tamu" rows="4" cols="50"></textarea><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Memeriksa apakah form sudah disubmit
    if (isset($_POST['submit'])) {
        // Mendapatkan input nama tamu dari textarea
        $input_nama_tamu = $_POST['nama_tamu'];

        // Memeriksa apakah input_nama_tamu kosong
        if (!empty($input_nama_tamu)) {
            // Memisahkan nama-nama tamu menjadi array berdasarkan koma dan menghapus spasi ekstra
            $nama_tamu_array = array_map('trim', explode(',', $input_nama_tamu));

            // Menampilkan data tamu dalam bentuk list dengan tautan
            echo "<h2>Daftar Tamu Undangan:</h2>";
            echo "<ul>";
            foreach ($nama_tamu_array as $nama_tamu) {
                // Mengganti spasi dengan tanda '-' pada nama tamu untuk tautan
                $tamu_link = str_replace(' ', '+', $nama_tamu);
                echo "<li><a href='/undangan-nikah-v1/?to=$tamu_link'>$nama_tamu</a></li>";
            }
            echo "</ul>";
        } else {
            // Tampilkan pesan jika tidak ada data nama tamu yang dimasukkan
            echo "<p>Tidak ada nama tamu yang dimasukkan.</p>";
        }
    }
    ?>
</body>
</html>
