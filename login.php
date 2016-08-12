<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS  -->
    <script src="assets/js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="assets/css/sweetalert.css">
</head>
<body>

<?php

require_once "config/connect.php";
require_once "config/function.php";
$username = $_POST["user"];
$password = $_POST["pass"];
$query = 'SELECT * FROM admin';
$data = $db->query($query);

$row = $data->fetch_assoc();
foreach ($data as $row) {
    if ($username == $row['user'] && $password == $row['pass']) {
        session_start();
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['level'] = $row['level'];

    }
}
if ($_SESSION['level'] == 1) {
    echo "<script>
                        swal({
                            title: \"Login Sukses!\",
                            text: \"Selamat Datang $username\",
                            type: \"success\"
                         },
                    function () {
                        window.location.href = 'dashboard/';
                    });
                        </script>";
} elseif ($_SESSION['level'] > 1) {
    echo "<script>
                         swal({
                            title: \"Login Sukses!\",
                            text: \"Selamat Datang $username\",
                            type: \"success\"
                        },
                    function () {
                        window.location.href = 'home_pegawai.php';
                    });
                        </script>";
} else {echo "<script>
                        swal({
                            title: \"Gagal!\",
                            text: \"Username atau Password Salah\",
                            type: \"error\"
                        },
                    function () {
                        window.location.href = '';
                    });
                    </script>";}
?>
</body>
</html>