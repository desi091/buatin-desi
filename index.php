<?php 
ini_set('display_errors', 0); 
include "config.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Hewan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f6fa;
            text-align: center;
        }
        h2 {
            margin-top: 20px;
            color: #1e3a8a;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            background: white;
        }
        th, td {
            border: 2px solid #000; 
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #111827; 
            color: white;
        }
        td {
            background-color: #ffffff;
            color: black;
        }
        
        table tr:hover td {
            background-color: #e5e7eb;
        }
        a.btn {
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            margin: 2px;
        }
        .edit { background: #facc15; }
        .hapus { background: #ef4444; }
        .tambah { 
            background: black; 
            padding: 8px 15px;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 15px;
        }
        a.btn:hover {
            opacity: 0.8;
        }
        
        td.aksi {
            background-color: white;
        }
    </style>
</head>
<body>
    <h2>Data Hewan</h2>

    <!-- Tombol Tambah -->
    <a href="tambah.php" class="btn tambah">+ Tambahkan Data</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama Hewan</th>
            <th>Jenis</th>
            <th>Asal Hewan</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php
        $query = mysqli_query($conn, "SELECT * FROM db_hewan");
        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>
                    <td>".$row['Id']."</td>
                    <td>".$row['Nama_hewan']."</td>
                    <td>".$row['Jenis_hewan']."</td>
                    <td>".$row['Asal']."</td>
                    <td>".$row['Jumlah']."</td>
                    <td class='aksi'>
                        <a href='edit.php?id=".$row['Id']."' class='btn edit'>Edit</a>
                        <a href='hapus.php?id=".$row['Id']."' class='btn hapus' onclick='return confirm(\"Yakin hapus data?\")'>Hapus</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>