<div class="tab-pane" id="tab2">
    <br><br>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
            	<img class="img-circle width-4" src="assets/user_image/<? echo $row['foto'];?>" >
                <h3 class="text-primary text-ultra-bold">Foto</h3>
                <input name="user_image" class="form-control" id="foto" type="file" accept="image/*">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <h3 class="text-primary text-ultra-bold">Biodata</h3>
                <h1 class="text-primary"><a target="_blank" href="uploads/<? echo $row['file'];?>"><?= $row['file'];?></a></h1>
                <input name="file" class="form-control" id="biodata" type="file" accept="application/pdf">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group floating-label">
                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                    <option value="">&nbsp;</option>
                    <option <? if ($row['jenis_kelamin'] == 'Laki - laki') echo 'selected' ?> value="Laki - laki">Laki - laki</option>
                    <option <? if ($row['jenis_kelamin'] == 'Perempuan') echo 'selected' ?> value="Perempuan">Perempuan</option>
                </select>
                <label for="jenis_kelamin">Jenis Kelamin</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group floating-label">
                <select id="agama" name="agama" class="form-control">
                    <option value="">&nbsp;</option>
                    <option <? if ($row['agama'] == 'Islam') echo 'selected' ?> value="Islam">Islam</option>
                    <option <? if ($row['agama'] == 'Kristen') echo 'selected' ?> value="Kristen">Kristen</option>
                    <option <? if ($row['agama'] == 'Katolik') echo 'selected' ?> value="Katolik">Katolik</option>
                    <option <? if ($row['agama'] == 'Hindu') echo 'selected' ?> value="Hindu">Hindu</option>
                    <option <? if ($row['agama'] == 'Budha') echo 'selected' ?> value="Budha">Budha</option>
                    <option <? if ($row['agama'] == 'Konghucu') echo 'selected' ?> value="Konghucu">Konghucu</option>
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
                        <input value="<?= $row['tempat'] ?>" name="tempat_lahir" class="form-control" id="tempat_lahir" type="text">
                        <label class="control-label" for="tempat_lahir">Tempat Lahir</label>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group date" id="tanggal-lahir">
                    <div class="input-group-content">
                        <input value="<?= $row['tanggal_lahir'] ?>" type="text" name="tanggal_lahir" class="form-control">
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
                        <input value="<?= $row['email1'] ?>" name="email1" class="form-control" id="email1" type="email">
                        <label class="control-label" for="email1">Email 1</label>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <div class="input-group">

                    <div class="input-group-content">
                        <input value="<?= $row['email2'] ?>" name="email2" class="form-control" id="email2" type="email">
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
                        <input value="<?= $row['telepon1'] ?>" name="tel1" class="form-control" id="tel1" type="tel">
                        <label class="control-label" for="tel1">Telepon 1</label>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-content">
                        <input value="<?= $row['telepon2'] ?>" name="tel2" class="form-control" id="tel2" type="tel">
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
                        <input value="<?= $row['alamat_malang'] ?>" name="alamat" class="form-control" id="alamat" type="text">
                        <label class="control-label" for="alamat">Alamat Malang</label>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <input value="<?= $row['kodepos_malang'] ?>" name="kodepos_malang" class="form-control" id="kodepos_malang" type="text">
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
                        <input value="<?= $row['alamat_asal'] ?>" name="alamat_asal" class="form-control" id="alamat_asal" type="text">
                        <label class="control-label" for="alamat_asal">Alamat Asal</label>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <input name="kodepos" class="form-control" value="<?= $row['kodepos_asal'] ?>" id="kodepos" type="text">
                <label class="control-label" for="kodepos">Kode Pos</label>


            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <input name="negara" class="form-control" id="negara" type="text" value="<?= $row['negara'] ?>">
                <label class="control-label" for="negara">Negara</label>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <input name="provinsi" class="form-control" id="provinsi" type="text" value="<?= $row['propinsi'] ?>">
                <label class="control-label" for="provinsi">Provinsi</label>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <input name="kota" class="form-control" id="kota" type="text" value="<?= $row['kota'] ?>">
                <label class="control-label" for="kota">Kota</label>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group floating-label">
                <select id="status_perkawinan" name="status_perkawinan" class="form-control">
                    <option value="">&nbsp;</option>
                    <option <? if ($row['status_pernikahan'] == 'Kawin') echo 'selected' ?> value="Kawin">Kawin</option>
                    <option <? if ($row['status_pernikahan'] == 'Belum Kawin') echo 'selected' ?> value="Belum Kawin">Belum Kawin</option>
                    <option <? if ($row['status_pernikahan'] == 'Janda') echo 'selected' ?> value="Janda">Janda</option>
                    <option <? if ($row['status_pernikahan'] == 'Duda') echo 'selected' ?> value="Duda">Duda</option>
                </select>
                <label for="status_perkawinan">Status Perkawinan</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group floating-label">
                <select id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control">
                    <option value="">&nbsp;</option>
                    <option <? if ($row['pendidikan_terakhir'] == 'SD') echo 'selected' ?> value="SD">SD</option>
                    <option <? if ($row['pendidikan_terakhir'] == 'SMP') echo 'selected' ?> value="SMP">SMP</option>
                    <option <? if ($row['pendidikan_terakhir'] == 'SMA') echo 'selected' ?> value="SMA">SMA</option>
                    <option <? if ($row['pendidikan_terakhir'] == 'Diploma') echo 'selected' ?> value="Diploma">Diploma</option>
                    <option <? if ($row['pendidikan_terakhir'] == 'Sarjana S1') echo 'selected' ?> value="Sarjana S1">Sarjana S1</option>
                    <option <? if ($row['pendidikan_terakhir'] == 'Sarjana S2') echo 'selected' ?> value="Sarjana S2">Sarjana S2</option>
                    <option <? if ($row['pendidikan_terakhir'] == 'Sarjana S3') echo 'selected' ?> value="Sarjana S3">Sarjana S3</option>
                    <option <? if ($row['pendidikan_terakhir'] == 'Informal') echo 'selected' ?> value="Informal">Informal</option>
                    <option <? if ($row['pendidikan_terakhir'] == 'Lainnya') echo 'selected' ?> value="Lainnya">Lainnya</option>

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
                    <option <? if ($row['golongan_darah'] == 'A') echo 'selected' ?> value="A">A</option>
                    <option <? if ($row['golongan_darah'] == 'B') echo 'selected' ?> value="B">B</option>
                    <option <? if ($row['golongan_darah'] == 'Lainnya') echo 'O' ?> value="O">O</option>
                    <option <? if ($row['golongan_darah'] == 'Lainnya') echo 'AB' ?> value="AB">AB</option>

                </select>
                <label for="golongan_darah">Golongan Darah</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input value="<?= $row['no_tanda_pengenal'] ?>" name="no_pengenal" class="form-control" id="no_pengenal" type="text">
                <label class="control-label" for="no_pengenal">No Tanda Pengenal</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group floating-label">
                <select id="tanda_pengenal" name="tanda_pengenal" class="form-control">
                    <option value="">&nbsp;</option>
                    <option <? if ($row['tanda_pengenal'] == 'Lainnya') echo 'KTP' ?> value="KTP">KTP</option>
                    <option <? if ($row['tanda_pengenal'] == 'Lainnya') echo 'SIM' ?> value="SIM">SIM</option>
                    <option <? if ($row['tanda_pengenal'] == 'Lainnya') echo 'PASPOR' ?> value="PASPOR">Pasport</option>


                </select>
                <label for="tanda_pengenal">Tanda Pengenal</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input value="<?= $row['no_bpjs_ketenagakerjaan'] ?>" name="no_bpjs" class="form-control" id="no_bpjs" type="text">
                <label class="control-label" for="no_bpjs">No BPJS Ketenagakerjaan</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input value="<?= $row['no_bpjs_kesehatan'] ?>" name="no_bpjs_kesehatan" class="form-control" id="no_bpjs_kesehatan" type="text">
                <label class="control-label" for="no_bpjs_kesehatan">No BPJS Kesehatan</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input value="<?= $row['no_bpjs_pensiun'] ?>" name="no_bpjs_pensiun" class="form-control" id="no_bpjs_pensiun" type="text">
                <label class="control-label" for="no_bpjs_pensiun">No BPJS Pensiun</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input value="<?= $row['no_askes_tambahan'] ?>" name="no_askes" class="form-control" id="no_askes" type="text">
                <label class="control-label" for="no_askes">No Askes Tambahan</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input value="<?= $row['npwp'] ?>" name="npwp" class="form-control" id="npwp" type="text">
                <label class="control-label" for="npwp">NPWP</label>
            </div>
        </div>
    </div>
</div>