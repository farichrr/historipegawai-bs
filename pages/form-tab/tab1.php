<div class="tab-pane active" id="tab1">
    <br><br>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <input name="nip" class="form-control" id="nip" type="text">
                <label class="control-label" for="nip">NIP</label>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group">
                <input name="nama" class="form-control" id="Nama" type="text">
                <label class="control-label" for="Nama">Nama</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group floating-label">
                <select id="tipe_pegawai" name="tipe_pegawai" class="form-control">
                    <option value="">&nbsp;</option>
                    <?php
                    $query = "select * from tipe_pegawai";
                    $hasil = mysqli_query($db,$query);
                    if (mysqli_num_rows($hasil) > 0) {
                        while($data=mysqli_fetch_array($hasil)){
                            echo "<option value=$data[kode_tipepegawai]>$data[keterangan]</option>";
                        }
                    }else{
                        echo "<option value=0>Tidak Ada</option>";
                    }
                    ?>
                </select>
                <label for="tipe_pegawai">Tipe Pegawai</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input name="nidn" class="form-control" id="nidn" type="text">
                <label class="control-label" for="nidn">NIDN</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group floating-label">
                <select id="unit_pegawai" name="unit_pegawai" class="form-control">
                    <option value="">&nbsp;</option>
                    <?php
                    $query = "select * from unit";
                    $hasil = mysqli_query($db,$query);
                    if (mysqli_num_rows($hasil) > 0) {
                        while($data=mysqli_fetch_array($hasil)){
                            echo "<option value=$data[kode_unit]>$data[keterangan]</option>";
                        }
                    }else{
                        echo "<option value=0>Data Kendaraan Tidak Ada</option>";
                    }
                    ?>
                </select>
                <label for="unit_pegawai">Unit Pegawai</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group floating-label">
                <select id="status_aktif" name="status_aktif" class="form-control">
                    <option value="">&nbsp;</option>
                    <option value="1">Aktif</option>
                    <option value="Non Aktif/Keluar">Non Aktif/Keluar</option>
                </select>
                <label for="status_aktif">Status Aktif</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <div class="input-group date" id="tanggal-masuk">
                    <div class="input-group-content">
                        <input type="text" name="tanggal_masuk" class="form-control">
                        <label>Tanggal Masuk</label>
                        <p class="help-block">yyyy-mm-dd</p>
                    </div>
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <div class="input-group date" id="tanggal-keluar">
                    <div class="input-group-content">
                        <input type="text" name="tanggal_keluar" class="form-control">
                        <label>Tanggal Keluar</label>
                        <p class="help-block">yyyy-mm-dd</p>
                    </div>
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input name="keterangan" class="form-control" id="keterangan" type="text">
                <label class="control-label" for="keterangan">Keterangan</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-ultra-bold text-primary">Pangkat/Golongan/Ruang Internal</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group floating-label">
                <select id="pangkat_internal" name="pangkat_internal" class="form-control">
                    <option value="">&nbsp;</option>
                    <?php
                    $query = "select * from pangkat_internal";
                    $hasil = mysqli_query($db,$query);
                    if (mysqli_num_rows($hasil) > 0) {
                        while($data=mysqli_fetch_array($hasil)){
                            echo "<option value=$data[kode_pangkatinternal]>$data[keterangan]</option>";
                        }
                    }else{
                        echo "<option value=0>Data Kendaraan Tidak Ada</option>";
                    }
                    ?>
                </select>
                <label for="pangkat_internal">Pangkat Internal</label>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group floating-label">
                <select id="golongan_internal" name="golongan_internal" class="form-control">
                    <option value="">&nbsp;</option>
                    <?php
                    $query = "select * from golongan_internal";
                    $hasil = mysqli_query($db,$query);
                    if (mysqli_num_rows($hasil) > 0) {
                        while($data=mysqli_fetch_array($hasil)){
                            echo "<option value=$data[kode_golonganinternal]>$data[keterangan]</option>";
                        }
                    }else{
                        echo "<option value=0>Data Kendaraan Tidak Ada</option>";
                    }
                    ?>
                </select>
                <label for="golongan_internal">Golongan Internal</label>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group floating-label">
                <select id="ruang_internal" name="ruang_internal" class="form-control">
                    <option value="">&nbsp;</option>
                    <?php
                    $query = "select * from ruang_internal";
                    $hasil = mysqli_query($db,$query);
                    if (mysqli_num_rows($hasil) > 0) {
                        while($data=mysqli_fetch_array($hasil)){
                            echo "<option value=$data[kode_ruanginternal]>$data[keterangan]</option>";
                        }
                    }else{
                        echo "<option value=0>Data Kendaraan Tidak Ada</option>";
                    }
                    ?>
                </select>
                <label for="ruang_internal">Unit Pegawai</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-ultra-bold text-primary">Pangkat/Golongan/Ruang Inpassing</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group floating-label">
                <select id="pangkat_inpassing" name="pangkat_inpassing" class="form-control">
                    <option value="">&nbsp;</option>
                    <?php
                    $query = "select * from pangkat_inpassing";
                    $hasil = mysqli_query($db,$query);
                    if (mysqli_num_rows($hasil) > 0) {
                        while($data=mysqli_fetch_array($hasil)){
                            echo "<option value=$data[kode_pangkatinpassing]>$data[keterangan]</option>";
                        }
                    }else{
                        echo "<option value=0>Data Kendaraan Tidak Ada</option>";
                    }
                    ?>
                </select>
                <label for="pangkat_inpassing">Pangkat Inpassing</label>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group floating-label">
                <select id="golongan_inpassing" name="golongan_inpassing" class="form-control">
                    <option value="">&nbsp;</option>
                    <?php
                    $query = "select * from golongan_inpassing";
                    $hasil = mysqli_query($db,$query);
                    if (mysqli_num_rows($hasil) > 0) {
                        while($data=mysqli_fetch_array($hasil)){
                            echo "<option value=$data[kode_golonganinpassing]>$data[keterangan]</option>";
                        }
                    }else{
                        echo "<option value=0>Data Kendaraan Tidak Ada</option>";
                    }
                    ?>
                </select>
                <label for="golongan_inpassing">Golongan Inpassing</label>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group floating-label">
                <select id="ruang_inpassing" name="ruang_inpassing" class="form-control">
                    <option value="">&nbsp;</option>
                    <?php
                    $query = "select * from ruang_inpassing";
                    $hasil = mysqli_query($db,$query);
                    if (mysqli_num_rows($hasil) > 0) {
                        while($data=mysqli_fetch_array($hasil)){
                            echo "<option value=$data[kode_ruanginpassing]>$data[keterangan]</option>";
                        }
                    }else{
                        echo "<option value=0>Data Kendaraan Tidak Ada</option>";
                    }
                    ?>
                </select>
                <label for="ruang_inpassing">Ruang Inpassing</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-ultra-bold text-primary">Fingerprint ID</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <input name="fingerprint_id" class="form-control" id="fingerprint_id" type="text">
                <label class="control-label" for="fingerprint_id">Fingerprint ID</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-ultra-bold text-primary">Jabatan</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group floating-label">
                <select id="jabatan" name="jabatan" class="form-control">
                    <option value="">&nbsp;</option>
                    <?php
                    $query = "select * from jabatan";
                    $hasil = mysqli_query($db,$query);
                    if (mysqli_num_rows($hasil) > 0) {
                        while($data=mysqli_fetch_array($hasil)){
                            echo "<option value=$data[kode_jabatan]>$data[keterangan]</option>";
                        }
                    }else{
                        echo "<option value=0>Data Kendaraan Tidak Ada</option>";
                    }
                    ?>
                </select>
                <label for="jabatan">Jabatan</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group floating-label">
                <select id="jabatan_akademik" name="jabatan_akademik" class="form-control">
                    <option value="">&nbsp;</option>
                    <?php
                    $query = "select * from jabatan_akademik";
                    $hasil = mysqli_query($db,$query);
                    if (mysqli_num_rows($hasil) > 0) {
                        while($data=mysqli_fetch_array($hasil)){
                            echo "<option value=$data[kode_jabatanakademik]>$data[keterangan]</option>";
                        }
                    }else{
                        echo "<option value=0>Data Kendaraan Tidak Ada</option>";
                    }
                    ?>
                </select>
                <label for="jabatan_akademik">Jabatan Akademik</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group floating-label">
                <select id="status_aktif1" name="status_aktif1" class="form-control">
                    <option value="">&nbsp;</option>
                    <option value="Aktif">Aktif</option>
                    <option value="Inaktif">Inaktif</option>
                </select>
                <label for="status_aktif1">Status Aktif</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input name="bank" class="form-control" id="bank" type="text">
                <label class="control-label" for="bank">Rekening Bank CIMB Niaga</label>
            </div>
        </div>
    </div>

</div>

