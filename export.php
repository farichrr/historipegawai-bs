<?php
require_once "config/connect.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=export.xls");
?>
<table border="1">
    <thead>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>

<?
$sql = "SELECT * FROM detail_pegawai";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {

    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['nip']."</td>";
        echo "<td>".$row['nama']."</td>";
        echo "<td>".$row['tipe_pegawai']."</td>";
        echo "<td>".$row['nidn']."</td>";
        echo "<td>".$row['unit']."</td>";
        echo "<td>".$row['status_aktif']."</td>";
        echo "<td>".$row['tanggal_masuk']."</td>";
        echo "<td>".$row['tanggal_keluar']."</td>";
        echo "<td>".$row['keterangan_alasan']."</td>";
        echo "<td>".$row['status_pegawai']."</td>";
        echo "<td>".$row['pangkat_internal']."</td>";
        echo "<td>".$row['golongan_internal']."</td>";
        echo "<td>".$row['ruang_internal']."</td>";
        echo "<td>".$row['pangkat_inpassing']."</td>";
        echo "<td>".$row['golongan_inpassing']."</td>";
        echo "<td>".$row['ruang_inpassing']."</td>";
        echo "<td>".$row['fingerprint_id']."</td>";
        echo "<td>".$row['jabatan']."</td>";
        echo "<td>".$row['jabatan_akademik']."</td>";
        echo "<td>".$row['status_mengajar']."</td>";
        echo "<td>".$row['rekening_bank']."</td>";
        echo "<td>".$row['foto']."</td>";
        echo "<td>".$row['file']."</td>";
        echo "<td>".$row['type']."</td>";
        echo "<td>".$row['size']."</td>";
        echo "<td>".$row['jenis_kelamin']."</td>";
        echo "<td>".$row['agama']."</td>";
        echo "<td>".$row['tempat']."</td>";
        echo "<td>".$row['tanggal_lahir']."</td>";
        echo "<td>".$row['email1']."</td>";
        echo "<td>".$row['email2']."</td>";
        echo "<td>".$row['telepon1']."</td>";
        echo "<td>".$row['telepon2']."</td>";
        echo "<td>".$row['alamat_malang']."</td>";
        echo "<td>".$row['kodepos_malang']."</td>";
        echo "<td>".$row['alamat_asal']."</td>";
        echo "<td>".$row['kodepos_asal']."</td>";
        echo "<td>".$row['negara']."</td>";
        echo "<td>".$row['propinsi']."</td>";
        echo "<td>".$row['kota']."</td>";
        echo "<td>".$row['status_pernikahan']."</td>";
        echo "<td>".$row['pendidikan_terakhir']."</td>";
        echo "<td>".$row['golongan_darah']."</td>";
        echo "<td>".$row['no_tanda_pengenal']."</td>";
        echo "<td>".$row['tanda_pengenal']."</td>";
        echo "<td>".$row['no_bpjs_ketenagakerjaan']."</td>";
        echo "<td>".$row['no_bpjs_kesehatan']."</td>";
        echo "<td>".$row['no_bpjs_pensiun']."</td>";
        echo "<td>".$row['no_askes_tambahan']."</td>";
        echo "<td>".$row['npwp']."</td>";
        echo "<td>".$row['perubahan_nip']."</td>";
        echo "<td>".$row['pindah_unit']."</td>";
        echo "<td>".$row['pindah_program_studi']."</td>";
        echo "<td>".$row['perubahan_status_aktif']."</td>";
        echo "<td>".$row['perubahan_status_pegawai']."</td>";
        echo "<td>".$row['perubahan_golongan']."</td>";
        echo "<td>".$row['perubahan_jabatan']."</td>";
        echo "<td>".$row['perubahan_jabatan_akademik']."</td>";
        echo "<td>".$row['perubahan_tipe_pegawai']."</td>";
        echo "<td>".$row['perubahan_finger_id']."</td>";
        echo "</tr>";


    }
}
?>
    </tr>
    </tbody>
</table>
