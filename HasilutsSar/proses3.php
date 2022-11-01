<?php
if (isset($_POST['Tambah'])){
    $nama = $_POST['nama'];
    $posisi = $_POST['posisi'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];
    $kontak = $_POST['kontak'];
        echo "<table width = 100% border = 1>
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td>$nama</td>
    </tr>
    <tr>
    <td>posisi</td>
    <td>:</td>
    <td>$posisi</td>
    </tr>
    <tr>
    <td>Alamat</td>
    <td>:</td>
    <td>$alamat</td>
    </tr>
    <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>$umur</td>
    </tr>
    <tr>
    <td>Telp</td> 
    <td>:</td>
    <td>$kontak</td>
    </tr>
    </table>";
}
?>