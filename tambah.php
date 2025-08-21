<?php include "config.php"; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Hewan</title>
    <style>
        body { font-family: Arial; background: #f5f6fa; text-align: center; }
        form { margin: 20px auto; padding: 20px; width: 40%; background: white; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        input, select { width: 90%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 5px; }
        button { background: #1d4ed8; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <h2>➕ Tambah Hewan</h2>
    <form method="POST">
        <input type="text" name="Nama_hewan" placeholder="Nama Hewan" required><br>
        <select name="Jenis_hewan" required>
            <option value="">-- Pilih Jenis --</option>
            <option value="Herbivora">Herbivora</option>
            <option value="Karnivora">Karnivora</option>
            <option value="Omnivora">Omnivora</option>
        </select><br>
        <input type="text" name="Asal" placeholder="Asal Hewan" required><br>
        <input type="number" name="Jumlah" placeholder="Jumlah" required><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['Nama_hewan'];
    $jenis = $_POST['Jenis_hewan'];
    $asal = $_POST['Asal'];
    $jumlah = $_POST['Jumlah'];

    $sql = "INSERT INTO db_hewan (Nama_hewan, Jenis_hewan, Asal, Jumlah) VALUES ('$nama','$jenis','$asal','$jumlah')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
</body>
</html>