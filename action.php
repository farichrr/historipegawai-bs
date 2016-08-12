<?php
$act = $_GET['act'];
$id = $_POST['id_detail'];
session_start();
require_once "config/connect.php";
require_once "config/autoId.php";
$id_detailpegawai = IdDetail(DetailID());
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tipe_pegawai = $_POST['tipe_pegawai'];
$nidn = $_POST['nidn'];
$unit = $_POST['unit_pegawai'];
$status_aktif = $_POST['status_aktif'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$tanggal_keluar = $_POST['tanggal_keluar'];
$keterangan_alasan = $_POST['keterangan'];
$pangkat_internal = $_POST['pangkat_internal'];
$golongan_internal = $_POST['golongan_internal'];
$ruang_internal = $_POST['ruang_internal'];
$pangkat_inpassing = $_POST['pangkat_inpassing'];
$golongan_inpassing = $_POST['golongan_inpassing'];
$ruang_inpassing = $_POST['ruang_inpassing'];
$fingerprint_id = $_POST['fingerprint_id'];
$jabatan = $_POST['jabatan'];
$jabatan_akademik = $_POST['jabatan_akademik'];
$status_mengajar = $_POST['status_aktif1'];
$bank = $_POST['bank'];


$imgFile = $_FILES['user_image']['name'];
$tmp_dir = $_FILES['user_image']['tmp_name'];
$imgSize = $_FILES['user_image']['size'];
$userpic = "";
if (empty($imgFile)) {
    $userpic = 'empty_image';
} else {
    $upload_dir = 'assets/user_image/'; // upload directory
    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
    $valid_extensions = array('jpeg', 'jpg', 'png');
    $userpic = rand(1000, 1000000) . "." . $imgExt;
    if (in_array($imgExt, $valid_extensions)) {
        // Check file size '5MB'
        if ($imgSize < 5000000) {
            move_uploaded_file($tmp_dir, $upload_dir . $userpic);
        } else {
            $errMSG = "Sorry, your file is too large.";
        }
    } else {
        $errMSG = "Sorry, only JPG, JPEG, PNG files are allowed.";
    }
}

//$lampiran_biodata = $_POST['lampiran_biodata'];
$file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
$folder = "uploads/";
move_uploaded_file($file_loc, $folder . $file);


$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$tempat_tanggal_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$email1 = $_POST['email1'];
$email2 = $_POST['email2'];
$telp1 = $_POST['tel1'];
$telp2 = $_POST['tel2'];
$alamat_malang = $_POST['alamat'];
$kodepos_malang = $_POST['kodepos_malang'];
$alamat_asal = $_POST['alamat_asal'];
$kodepos_asal = $_POST['kodepos'];
$negara_asal = $_POST['negara'];
$propinsi_asal = $_POST['provinsi'];
$kota_asal = $_POST['kota'];
$status_pernikahan = $_POST['status_perkawinan'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$golongan_darah = $_POST['golongan_darah'];
$no_tanda_pengenal = $_POST['no_pengenal'];
$tanda_pengenal = $_POST['tanda_pengenal'];
$no_bpjs_ketenagakerjaan = $_POST['no_bpjs'];
$no_bpjs_kesehatan = $_POST['no_bpjs_kesehatan'];
$no_bpjs_pensiun = $_POST['no_bpjs_pensiun'];
$no_askes_tambahan = $_POST['no_askes'];
$npwp = $_POST['npwp'];
$ubah_nip = $_POST['ubah_nip'];
$pindah_unit = $_POST['pindah_unit'];
$pindah_program_studi = $_POST['pindah_prodi'];
$perubahan_status_aktif = $_POST['ubah_status_aktif'];
$perubahan_golongan = $_POST['ubah_golongan'];
$perubahan_jabatan = $_POST['ubah_jabatan'];
$perubahan_jabatan_akademik = $_POST['ubah_jabatan_akademik'];
$perubahan_tipe_pegawai = $_POST['ubah_tipe_pegawai'];
switch ($act) {
    case "tambah-detail":
        $query = "INSERT INTO `detail_pegawai` (`id`, `nip`, `nama`, `tipe_pegawai`, `nidn`, `unit`, `status_aktif`, `tanggal_masuk`, `tanggal_keluar`, `keterangan_alasan`, `status_pegawai`, `pangkat_internal`, `golongan_internal`, `ruang_internal`, `pangkat_inpassing`, `golongan_inpassing`, `ruang_inpassing`, `fingerprint_id`, `jabatan`, `jabatan_akademik`, `status_mengajar`, `rekening_bank`, `foto`, `file`, `type`, `size`, `jenis_kelamin`, `agama`, `tempat`, `tanggal_lahir`, `email1`, `email2`, `telepon1`, `telepon2`, `alamat_malang`, `kodepos_malang`, `alamat_asal`, `kodepos_asal`, `negara`, `propinsi`, `kota`, `status_pernikahan`, `pendidikan_terakhir`, `golongan_darah`, `no_tanda_pengenal`, `tanda_pengenal`, `no_bpjs_ketenagakerjaan`, `no_bpjs_kesehatan`, `no_bpjs_pensiun`, `no_askes_tambahan`, `npwp`, `perubahan_nip`, `pindah_unit`, `pindah_program_studi`, `perubahan_status_aktif`, `perubahan_status_pegawai`, `perubahan_golongan`, `perubahan_jabatan`, `perubahan_jabatan_akademik`, `perubahan_tipe_pegawai`, `perubahan_finger_id`) VALUES (
'" . $id_detailpegawai . "',
'" . $nip . "',
'" . $nama . "',
'" . $tipe_pegawai . "',
'" . $nidn . "',
'" . $unit . "',
'" . $status_aktif . "',
'" . $tanggal_masuk . "',
'" . $tanggal_keluar . "',
'" . $keterangan_alasan . "',
'S0001',
'" . $pangkat_internal . "',
'" . $golongan_internal . "',
'" . $ruang_internal . "',
'" . $pangkat_inpassing . "',
'" . $golongan_inpassing . "',
'" . $ruang_inpassing . "',
'" . $fingerprint_id . "',
'" . $jabatan . "',
'" . $jabatan_akademik . "',
'" . $status_mengajar . "',
'" . $bank . "',
'" . $userpic . "',
'" . $file . "',
'" . $file_type . "',
'" . $file_size . "',
'" . $jenis_kelamin . "',
'" . $agama . "',
'" . $tempat_tanggal_lahir . "',
'" . $tanggal_lahir . "',
'" . $email1 . "',
'" . $email2 . "',
'" . $telp1 . "',
'" . $telp2 . "',
'" . $alamat_malang . "',
'" . $kodepos_malang . "',
'" . $alamat_asal . "',
'" . $kodepos_asal . "',
'" . $negara_asal . "',
'" . $propinsi_asal . "',
'" . $kota_asal . "',
'" . $status_pernikahan . "',
'" . $pendidikan_terakhir . "',
'" . $golongan_darah . "',
'" . $no_tanda_pengenal . "',
'" . $tanda_pengenal . "',
'" . $no_bpjs_ketenagakerjaan . "',
'" . $no_bpjs_kesehatan . "',
'" . $no_bpjs_pensiun . "',
'" . $no_askes_tambahan . "',
'" . $npwp . "',
'" . $ubah_nip . "',
'" . $pindah_unit . "',
'" . $pindah_program_studi . "',
'" . $perubahan_status_aktif . "',
'y',
'" . $perubahan_golongan . "',
'" . $perubahan_jabatan . "',
'" . $perubahan_jabatan_akademik . "',
'" . $perubahan_tipe_pegawai . "',
'11')";

        if (mysqli_query($db, $query)) {
            echo "<script>
            swal({
                title: \"Sukses!\",
                text: \"Tambah Detail Pegawai $nama sukses\",
                type: \"success\"
                },
            function () {
            window.location.href = 'attribut_pegawai.php';
                });
                </script>";
            exit();
        } else {
            echo mysqli_error($db);
            echo mysqli_errno($db);
            echo "<script>
            swal({
                title: \"Gagal!\",
                text: \" gagal\",
                type: \"error\"
                },
                function () {
                window.location.href = 'attribut_pegawai.php';
                });
                    </script>";

        }

        mysqli_close($db);
        break;
    case "edit-detail":
        if (isset($imgFile) && isset($file)) {
            $sql = "UPDATE `detail_pegawai` SET 
`nip`='" . $nip . "',
`nama`='" . $nama . "',
`tipe_pegawai`='" . $tipe_pegawai . "',
`nidn`='" . $nidn . "',
`unit`='" . $unit . "',
`status_aktif`='" . $status_aktif . "',
`tanggal_masuk`='" . $tanggal_masuk . "',
`tanggal_keluar`='" . $tanggal_keluar . "',`keterangan_alasan`='" . $keterangan_alasan . "',
`pangkat_internal`='" . $pangkat_internal . "',
`golongan_internal`='" . $golongan_internal . "',
`ruang_internal`='" . $ruang_internal . "',
`pangkat_inpassing`='" . $pangkat_inpassing . "',
`golongan_inpassing`='" . $golongan_inpassing . "',
`ruang_inpassing`='" . $ruang_inpassing . "',
`fingerprint_id`='" . $fingerprint_id . "',
`jabatan`='" . $jabatan . "',
`jabatan_akademik`='" . $jabatan_akademik . "',
`status_mengajar`='" . $status_mengajar . "',
`rekening_bank`='" . $bank . "',
`foto`='" . $userpic . "',
`file`='" . $file . "',
`type`='" . $file_type . "',
`size`='" . $file_size . "',
`jenis_kelamin`='" . $jenis_kelamin . "',
`agama`='" . $agama . "',
`tempat`='" . $tempat_tanggal_lahir . "',
`tanggal_lahir`='" . $tanggal_lahir . "',
`email1`='" . $email1 . "',
`email2`='" . $email2 . "',
`telepon1`='" . $telp1 . "',
`telepon2`='" . $telp2 . "',
`alamat_malang`='" . $alamat_malang . "',
`kodepos_malang`='" . $kodepos_malang . "',
`alamat_asal`='" . $alamat_asal . "',
`kodepos_asal`='" . $kodepos_asal . "',
`negara`='" . $negara_asal . "',
`propinsi`='" . $propinsi_asal . "',
`kota`='" . $kota_asal . "',
`status_pernikahan`='" . $status_pernikahan . "',
`pendidikan_terakhir`='" . $pendidikan_terakhir . "',
`golongan_darah`='" . $golongan_darah . "',
`no_tanda_pengenal`='" . $no_tanda_pengenal . "',
`tanda_pengenal`='" . $tanda_pengenal . "',
`no_bpjs_ketenagakerjaan`='" . $no_bpjs_ketenagakerjaan . "',
`no_bpjs_kesehatan`='" . $no_bpjs_kesehatan . "',
`no_bpjs_pensiun`='" . $no_bpjs_pensiun . "',
`no_askes_tambahan`='" . $no_askes_tambahan . "',
`npwp`='" . $npwp . "',
`perubahan_nip`='" . $ubah_nip . "',
`pindah_unit`='" . $pindah_unit . "',
`pindah_program_studi`='" . $pindah_program_studi . "',
`perubahan_status_aktif`='" . $perubahan_status_aktif . "',
`perubahan_golongan`='" . $perubahan_golongan . "',
`perubahan_jabatan`='" . $perubahan_jabatan . "',
`perubahan_jabatan_akademik`='" . $perubahan_jabatan_akademik . "',
`perubahan_tipe_pegawai`='" . $perubahan_tipe_pegawai . "' WHERE `id`='" . $id . "'";
            if (mysqli_query($db, $sql)) {
                echo "<script>
            swal({
                title: \"Sukses!\",
                text: \"Tambah Detail Pegawai $nama sukses\",
                type: \"success\"
                },
            function () {
            window.location.href = 'attribut_pegawai.php';
                });
                </script>";
                exit();
            } else {
                echo mysqli_error($db);
                echo mysqli_errno($db);
                echo "<script>
            swal({
                title: \"Gagal!\",
                text: \" gagal\",
                type: \"error\"
                },
                function () {
                window.location.href = 'attribut_pegawai.php';
                });
                    </script>";

            }

            mysqli_close($db);
        } else {
            $sql = "UPDATE `detail_pegawai` SET 
`nip`='" . $nip . "',
`nama`='" . $nama . "',
`tipe_pegawai`='" . $tipe_pegawai . "',
`nidn`='" . $nidn . "',
`unit`='" . $unit . "',
`status_aktif`='" . $status_aktif . "',
`tanggal_masuk`='" . $tanggal_masuk . "',
`tanggal_keluar`='" . $tanggal_keluar . "',`keterangan_alasan`='" . $keterangan_alasan . "',
`pangkat_internal`='" . $pangkat_internal . "',
`golongan_internal`='" . $golongan_internal . "',
`ruang_internal`='" . $ruang_internal . "',
`pangkat_inpassing`='" . $pangkat_inpassing . "',
`golongan_inpassing`='" . $golongan_inpassing . "',
`ruang_inpassing`='" . $ruang_inpassing . "',
`fingerprint_id`='" . $fingerprint_id . "',
`jabatan`='" . $jabatan . "',
`jabatan_akademik`='" . $jabatan_akademik . "',
`status_mengajar`='" . $status_mengajar . "',
`rekening_bank`='" . $bank . "',
`jenis_kelamin`='" . $jenis_kelamin . "',
`agama`='" . $agama . "',
`tempat`='" . $tempat_tanggal_lahir . "',
`tanggal_lahir`='" . $tanggal_lahir . "',
`email1`='" . $email1 . "',
`email2`='" . $email2 . "',
`telepon1`='" . $telp1 . "',
`telepon2`='" . $telp2 . "',
`alamat_malang`='" . $alamat_malang . "',
`kodepos_malang`='" . $kodepos_malang . "',
`alamat_asal`='" . $alamat_asal . "',
`kodepos_asal`='" . $kodepos_asal . "',
`negara`='" . $negara_asal . "',
`propinsi`='" . $propinsi_asal . "',
`kota`='" . $kota_asal . "',
`status_pernikahan`='" . $status_pernikahan . "',
`pendidikan_terakhir`='" . $pendidikan_terakhir . "',
`golongan_darah`='" . $golongan_darah . "',
`no_tanda_pengenal`='" . $no_tanda_pengenal . "',
`tanda_pengenal`='" . $tanda_pengenal . "',
`no_bpjs_ketenagakerjaan`='" . $no_bpjs_ketenagakerjaan . "',
`no_bpjs_kesehatan`='" . $no_bpjs_kesehatan . "',
`no_bpjs_pensiun`='" . $no_bpjs_pensiun . "',
`no_askes_tambahan`='" . $no_askes_tambahan . "',
`npwp`='" . $npwp . "',
`perubahan_nip`='" . $ubah_nip . "',
`pindah_unit`='" . $pindah_unit . "',
`pindah_program_studi`='" . $pindah_program_studi . "',
`perubahan_status_aktif`='" . $perubahan_status_aktif . "',
`perubahan_golongan`='" . $perubahan_golongan . "',
`perubahan_jabatan`='" . $perubahan_jabatan . "',
`perubahan_jabatan_akademik`='" . $perubahan_jabatan_akademik . "',
`perubahan_tipe_pegawai`='" . $perubahan_tipe_pegawai . "' WHERE `id`='" . $id . "'";
            if (mysqli_query($db, $sql)) {
                echo "<script>
            swal({
                title: \"Sukses!\",
                text: \"Tambah Detail Pegawai $nama sukses\",
                type: \"success\"
                },
            function () {
            window.location.href = 'attribut_pegawai.php';
                });
                </script>";
                exit();
            } else {
                echo mysqli_error($db);
                echo mysqli_errno($db);
                echo "<script>
            swal({
                title: \"Gagal!\",
                text: \" gagal\",
                type: \"error\"
                },
                function () {
                window.location.href = 'attribut_pegawai.php';
                });
                    </script>";

            }

            mysqli_close($db);
        }
        break;

}
