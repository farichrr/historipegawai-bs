<div class="tab-pane" id="tab2">
    <br><br>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <h3 class="text-primary text-ultra-bold">Foto</h3>
                <input name="user_image" class="form-control" id="foto" type="file" accept="image/*">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <h3 class="text-primary text-ultra-bold">Biodata</h3>
                <input name="file" class="form-control" id="biodata" type="file" accept="application/pdf">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group floating-label">
                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                    <option value="">&nbsp;</option>
                    <option value="Laki - laki">Laki - laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <label for="jenis_kelamin">Jenis Kelamin</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group floating-label">
                <select id="agama" name="agama" class="form-control">
                    <option value="">&nbsp;</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
                <label for="agama">Agama</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-map-marker fa-2x"></i></span>
                    <div class="input-group-content">
                        <input name="tempat_lahir" class="form-control" id="tempat_lahir" type="text">
                        <label class="control-label" for="tempat_lahir">Tempat Lahir</label>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group date" id="tanggal-lahir">
                    <div class="input-group-content">
                        <input type="text" name="tanggal_lahir" class="form-control">
                        <label>Tanggal Lahir</label>
                        <p class="help-block">yyyy-mm-dd</p>
                    </div>
                    <span class="input-group-addon"><i class="fa fa-calendar fa-2x"></i></span>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa-2x"></i></span>
                    <div class="input-group-content">
                        <input name="email1" class="form-control" id="email1" type="email">
                        <label class="control-label" for="email1">Email 1</label>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <div class="input-group">

                    <div class="input-group-content">
                        <input name="email2" class="form-control" id="email2" type="email">
                        <label class="control-label" for="email2">Email 2</label>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone fa-2x"></i></span>
                    <div class="input-group-content">
                        <input name="tel1" class="form-control" id="tel1" type="tel">
                        <label class="control-label" for="tel1">Telepon 1</label>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-content">
                        <input name="tel2" class="form-control" id="tel2" type="tel">
                        <label class="control-label" for="tel2">Telepon 2</label>
                    </div>
                </div>


            </div>
        </div>


    </div>
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-location-arrow fa-2x"></i></span>
                    <div class="input-group-content">
                        <input name="alamat" class="form-control" id="alamat" type="text">
                        <label class="control-label" for="alamat">Alamat Malang</label>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <input name="kodepos_malang" class="form-control" id="kodepos_malang" type="text">
                <label class="control-label" for="kodepos_malang">Kode Pos Malang</label>


            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-location-arrow fa-2x"></i></span>
                    <div class="input-group-content">
                        <input name="alamat_asal" class="form-control" id="alamat_asal" type="text">
                        <label class="control-label" for="alamat_asal">Alamat Asal</label>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <input name="kodepos" class="form-control" id="kodepos" type="text">
                <label class="control-label" for="kodepos">Kode Pos</label>


            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <input name="negara" class="form-control" id="negara" type="text">
                <label class="control-label" for="negara">Negara</label>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <input name="provinsi" class="form-control" id="provinsi" type="text">
                <label class="control-label" for="provinsi">Provinsi</label>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <input name="kota" class="form-control" id="kota" type="text">
                <label class="control-label" for="kota">Kota</label>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group floating-label">
                <select id="status_perkawinan" name="status_perkawinan" class="form-control">
                    <option value="">&nbsp;</option>
                    <option value="Kawin">Kawin</option>
                    <option value="Belum Kawin">Belum Kawin</option>
                    <option value="Janda">Janda</option>
                    <option value="Duda">Duda</option>
                </select>
                <label for="status_perkawinan">Status Perkawinan</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group floating-label">
                <select id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control">
                    <option value="">&nbsp;</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="Diploma">Diploma</option>
                    <option value="Sarjana S1">Sarjana S1</option>
                    <option value="Sarjana S2">Sarjana S2</option>
                    <option value="Sarjana S3">Sarjana S3</option>
                    <option value="Informal">Informal</option>
                    <option value="Lainnya">Lainnya</option>

                </select>
                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group floating-label">
                <select id="golongan_darah" name="golongan_darah" class="form-control">
                    <option value="">&nbsp;</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="O">O</option>
                    <option value="AB">AB</option>

                </select>
                <label for="golongan_darah">Golongan Darah</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input name="no_pengenal" class="form-control" id="no_pengenal" type="text">
                <label class="control-label" for="no_pengenal">No Tanda Pengenal</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group floating-label">
                <select id="tanda_pengenal" name="tanda_pengenal" class="form-control">
                    <option value="">&nbsp;</option>
                    <option value="KTP">KTP</option>
                    <option value="SIM">SIM</option>
                    <option value="PASPOR">Pasport</option>


                </select>
                <label for="tanda_pengenal">Tanda Pengenal</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input name="no_bpjs" class="form-control" id="no_bpjs" type="text">
                <label class="control-label" for="no_bpjs">No BPJS Ketenagakerjaan</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input name="no_bpjs_kesehatan" class="form-control" id="no_bpjs_kesehatan" type="text">
                <label class="control-label" for="no_bpjs_kesehatan">No BPJS Kesehatan</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input name="no_bpjs_pensiun" class="form-control" id="no_bpjs_pensiun" type="text">
                <label class="control-label" for="no_bpjs_pensiun">No BPJS Pensiun</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input name="no_askes" class="form-control" id="no_askes" type="text">
                <label class="control-label" for="no_askes">No Askes Tambahan</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input name="npwp" class="form-control" id="npwp" type="text">
                <label class="control-label" for="npwp">NPWP</label>
            </div>
        </div>
    </div>
</div>