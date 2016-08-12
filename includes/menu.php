<div id="menubar" class="menubar-inverse ">
    <div class="menubar-fixed-panel">
        <div>
            <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar"
               href="javascript:void(0);">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="expanded">
            <a href="../../html/dashboards/dashboard.html">
                <span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
            </a>
        </div>
    </div>
    <div class="menubar-scroll-panel">

        <!-- BEGIN MAIN MENU -->
        <ul id="main-menu" class="gui-controls">

            <!-- BEGIN DASHBOARD -->
            <li>
                <a href="dashboard/" class="<? if ($_GET['page']=="dashboard") echo "active"?>">
                    <div class="gui-icon"><i class="md md-home"></i></div>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="daftar-pegawai/" class="<? if ($_GET['page']=="daftar-pegawai") echo "active"?>">
                    <div class="gui-icon"><i class="md md-group"></i></div>
                    <span class="title">Daftar Pegawai</span>
                </a>
            </li>
            <li>
                <a href="tambah-pegawai/" class="<? if ($_GET['page']=="tambah-pegawai") echo "active"?>">
                    <div class="gui-icon"><i class="md md-person-add"></i></div>
                    <span class="title">Tambah Pegawai</span>
                </a>
            </li>
            <li>
                <a href="tambah-detail/" class="<? if ($_GET['page']=="tambah-detail") echo "active"?>">
                    <div class="gui-icon"><i class="md md-assignment"></i></div>
                    <span class="title">Tambah Detail</span>
                </a>
            </li>
            <!--end /menu-li -->
            <!-- END DASHBOARD -->

            <!-- BEGIN EMAIL -->
            <li class="gui-folder">
                <a>
                    <div class="gui-icon"><i class="md md-assignment-ind"></i></div>
                    <span class="title">Attribut Pegawai</span>
                </a>
                <!--start submenu -->
                <ul>
                    <li><a href="tipe-pegawai/" class="<? if ($_GET['page']=="tipe-pegawai") echo "active"?>"><span class="title">Tipe Pegawai</span></a></li>
                    <li><a href="unit-pegawai/" class="<? if ($_GET['page']=="unit-pegawai") echo "active"?>"><span class="title">Unit Pegawai</span></a></li>
                    <li><a href="status-pegawai/" class="<? if ($_GET['page']=="status-pegawai") echo "active"?>"><span class="title">Status Pegawai</span></a></li>
                    <li><a href="jabatan-pegawai/" class="<? if ($_GET['page']=="jabatan-pegawai") echo "active"?>"><span class="title">Jabatan Pegawai</span></a></li>
                    <li><a href="jabatan-akademik/" class="<? if ($_GET['page']=="jabatan-akademik") echo "active"?>"><span class="title">Jabatan Akademik Pegawai</span></a></li>
                </ul><!--end /submenu -->
            </li><!--end /menu-li -->
            <!-- END EMAIL -->

        </ul><!--end .main-menu -->
        <!-- END MAIN MENU -->

        <div class="menubar-foot-panel">
            <small class="no-linebreak hidden-folded">
                <span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
            </small>
        </div>
    </div><!--end .menubar-scroll-panel-->
</div>