<?php
require 'db_conek.php';

// Ambil data dari tabel tbl_mhs
$sql = "SELECT * FROM tbl_mhs";
$result = $pdo->query($sql);

// Cek apakah data ditemukan
if ($stmt->rowCount() > 0) {
    echo '<table border="1">
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>';
    
    // Tampilkan data dalam tabel
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['nim'] . '</td>
                <td>' . $row['nama'] . '</td>
                <td>' . $row['email'] . '</td>
                <td>
                    <a href="edit.php?id=' . $row['id'] . '">Edit</a> | 
                    <a href="hapus.php?id=' . $row['id'] . '">Hapus</a>
                </td>
              </tr>';
    }

    echo '</table>';
} else {
    echo 'Tidak ada data.';
}
?>
