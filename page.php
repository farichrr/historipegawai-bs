<? require_once "config/connect.php" ;
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= ucwords(str_replace("-", " ", $_GET['page'])) ?> | Histori Pegawai - Universitas Ma Chung</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <base href="/historipegawai-bs/">
    <? include "includes/css.php" ?>
    <![endif]-->
</head>
<body class=" header-fixed menubar-pin menubar-visible">

<!-- BEGIN HEADER-->
<? include "includes/header.php" ?>
<!-- END HEADER-->

<!-- BEGIN BASE-->
<div id="base">

    <!-- BEGIN OFFCANVAS LEFT -->
    <div class="offcanvas">
    </div><!--end .offcanvas-->
    <!-- END OFFCANVAS LEFT -->

    <!-- BEGIN CONTENT-->
    <? if ($_GET['page'] == "daftar-pegawai")
        include "pages/daftar-pegawai.php";
    elseif ($_GET['page'] == "tipe-pegawai")
        include "pages/tipe-pegawai.php";
    elseif ($_GET['page'] == "unit-pegawai")
        include "pages/unit-pegawai.php";
    elseif ($_GET['page'] == "status-pegawai")
        include "pages/status-pegawai.php";
    elseif ($_GET['page'] == "jabatan-pegawai")
        include "pages/jabatan-pegawai.php";
    elseif ($_GET['page'] == "jabatan-akademik")
        include "pages/jabatan-akademik.php";
    elseif ($_GET['page'] == "tambah-detail")
        include "pages/tambah-detail.php";
    elseif ($_GET['page'] == "edit-detail")
        include "pages/edit-detail.php";

    ?><!--end #content-->
    <!-- END CONTENT -->

    <!-- BEGIN MENUBAR-->
    <? include "includes/menu.php" ?>
    <!--end #menubar-->
    <!-- END MENUBAR -->

</div><!--end #base-->
<!-- END BASE -->




</body>
</html>
