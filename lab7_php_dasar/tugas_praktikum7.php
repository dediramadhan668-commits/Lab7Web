<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas Praktikum 7 PHP Dasar</title>
</head>
<body>
    <h2>Form Data Diri</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama" required><br><br>

        <label>Tanggal Lahir: </label>
        <input type="date" name="tgl_lahir" required><br><br>

        <label>Pekerjaan: </label>
        <select name="pekerjaan" required>
            <option value="">-- Pilih Pekerjaan --</option>
            <option value="Programmer">Programmer</option>
            <option value="Designer">Designer</option>
            <option value="Guru">Guru</option>
            <option value="Dokter">Dokter</option>
            <option value="Pengusaha">Pengusaha</option>
        </select><br><br>

        <input type="submit" name="submit" value="Kirim">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        $tanggal_lahir = new DateTime($tgl_lahir);
        $sekarang = new DateTime();
        $umur = $sekarang->diff($tanggal_lahir)->y;

        switch ($pekerjaan) {
            case "Programmer":
                $gaji = 10000000;
                break;
            case "Designer":
                $gaji = 8000000;
                break;
            case "Guru":
                $gaji = 6000000;
                break;
            case "Dokter":
                $gaji = 15000000;
                break;
            case "Pengusaha":
                $gaji = 20000000;
                break;
            default:
                $gaji = 0;
                break;
        }

        echo "<hr>";
        echo "<h3>Hasil Data</h3>";
        echo "Nama: $nama<br>";
        echo "Tanggal Lahir: $tgl_lahir<br>";
        echo "Umur: $umur tahun<br>";
        echo "Pekerjaan: $pekerjaan<br>";
        echo "Gaji: Rp " . number_format($gaji, 0, ',', '.');
    }
    ?>
</body>
</html>
