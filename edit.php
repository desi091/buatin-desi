<?php ini_set('display_errors', 0);
include "config.php";

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM Hewan WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $nama   = $_POST['nama'];
    $jenis  = $_POST['jenis'];
    $asal   = $_POST['asal'];
    $jumlah = $_POST['jumlah'];

    mysqli_query($conn, "UPDATE hewan SET 
        nama='$nama', jenis='$jenis', asal='$asal', jumlah='$jumlah' WHERE id=$id");

    header("Location: index.php");
}
?>

<form method="post">
    <h2>Edit Data Hewan</h2>
    Nama Hewan: <input type="text" name="Nama_hewan" value="<?= $data['nama']; ?>"><br><br>
    Jenis: <input type="text" name="Jenis_hewan" value="<?= $data['jenis']; ?>"><br><br>
    Asal Hewan: <input type="text" name="Asal" value="<?= $data['asal']; ?>"><br><br>
    Jumlah: <input type="number" name="Jumlah" value="<?= $data['jumlah']; ?>"><br><br>
    <button type="submit" name="update">Simpan</button>
</form>