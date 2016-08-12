<div class="tab-pane" id="tab3">
    <br><br>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input value="<?= $row['perubahan_nip'] ?>" name="ubah_nip" class="form-control" id="ubah_nip" type="text">
                <label class="control-label" for="ubah_nip">Perubahan NIP</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input value="<?= $row['pindah_unit'] ?>" name="pindah_unit" class="form-control" id="pindah_unit" type="text">
                <label class="control-label" for="pindah_unit">Pindah Unit</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input name="pindah_prodi" value="<?= $row['pindah_program_studi'] ?>" class="form-control" id="pindah_prodi" type="text">
                <label class="control-label" for="pindah_prodi">Pindah Prodi</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input value="<?= $row['perubahan_status_aktif'] ?>" name="ubah_status_aktif" class="form-control" id="ubah_status_aktif" type="text">
                <label class="control-label" for="ubah_status_aktif">Perubahan Status Aktif</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input value="<?= $row['perubahan_golongan'] ?>" name="ubah_golongan" class="form-control" id="ubah_golongan" type="text">
                    <label class="control-label" for="ubah_golongan">Perubahan Golongan</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input value="<?= $row['perubahan_jabatan'] ?>" name="ubah_jabatan" class="form-control" id="ubah_jabatan" type="text">
                <label class="control-label" for="ubah_jabatan">Perubahan Jabatan</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input value="<?= $row['perubahan_jabatan_akademik'] ?>" name="ubah_jabatan_akademik" class="form-control" id="ubah_jabatan_akademik" type="text">
                <label class="control-label" for="ubah_jabatan_akademik">Perubahan Jabatan Akademik</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input value="<?= $row['perubahan_tipe_pegawai'] ?>" name="ubah_tipe_pegawai" class="form-control" id="ubah_tipe_pegawai" type="text">
                <label class="control-label" for="ubah_tipe_pegawai">Perubahan Tipe Pegawai</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group pull-right">
                <button class="btn btn-primary" type="submit">Simpan</button>
                <button class="btn btn-danger" type="reset">Batal</button>
            </div>
        </div>
    </div>
</div>