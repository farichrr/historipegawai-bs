

<div id="content">
    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li>Home</li>
                <li>Attribut Pegawai</li>
                <li class="active"><?= ucwords(str_replace("-", " ", $_GET['page'])) ?></li>
            </ol>
        </div>
        <div class="section-body contain-lg">

            <!-- BEGIN INTRO -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-primary"><?= ucwords(str_replace("-", " ", $_GET['page'])) ?></h1>
                </div><!--end .col -->
                <div class="col-lg-8">
                    <article class="margin-bottom-xxl">
                        <p class="lead">
                            Kelola data <? str_replace("-", " ", $_GET['page']) ?>. Tambah, ubah, hapus.
                        </p>
                    </article>
                </div><!--end .col -->
            </div><!--end .row -->
            <!-- END INTRO -->

            <!-- BEGIN STRIPED TABLE -->
            <div class="row">
                <div class=" col-lg-offset-2 col-md-8">
                    <div class="card">
                        <div class="card-head">
                            <div class="tools">
                                <div class="btn-group">
                                    <a href="javascript:void(0)" type="button"
                                       class="tambah-tipe btn ink-reaction btn-floating-action btn-primary"><i
                                            class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover no-margin" id="tipe-pegawai">
                                <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Keterangan</th>
                                    <th style="width: 130px;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                $sql = "SELECT * FROM jabatan_akademik ";
                                $result = mysqli_query($db, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>
                    <td>".@$row['kode_jabatanakademik']."</td>
                    <td>".@$row['keterangan']."</td>
                    <td>
                    <input type='hidden' id='kode' value='".@$row['kode_jabatanakademik']."'>
                    <input type='hidden' id='keterangan' value='".@$row['keterangan']."'>
                    <button class='btn btn-primary ubah' data-toggle='modal' data-target='#formModal'><i class='fa fa-pencil'></i></button>&nbsp;<a href='javascript:void()' class='btn btn-danger delete'><i class='fa fa-close'></i></a></td>
                    </tr>";
                                    }
                                } else {
                                    echo "Data Kosong";
                                } ?>

                                </tbody>
                            </table>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
            </div><!--end .row -->
            <!-- END STRIPED TABLE -->


        </div><!--end .section-body -->
    </section>


</div>
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="formModalLabel">Ubah data</h4>
            </div>
            <form class="form-horizontal" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label for="kode-modal" class="control-label">Kode</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="kode" id="kode-modal" class="form-control" placeholder="Kode" readonly><div class="form-control-line"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label for="keterangan-modal" class="control-label">Keterangan</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="keterangan-modal" id="keterangan-modal" class="form-control" placeholder="Keterangan"><div class="form-control-line"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<? include "includes/js.php"?>
<script>
    $(".delete").click(function(){
        var kode = $(this).closest('td').find('#kode').val();
        var keterangan = $(this).closest('td').find('#keterangan').val();
        sweetAlert({
                title: "Warning!",
                text: "Apakah anda yakin akan menghapus status '"+keterangan+"' ?",
                type: "warning",
                showCancelButton: true,
                cancelButtonText: "Tidak",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya",
                closeOnConfirm: false
            },
            function () {
                $.ajax({
                    url: "service.php?action=delete-produk&id="+kode+"",
                    dataType: "text",
                    success: function (data) {
                        if (data=='error'){
                            swal("Warning", "Data produk tidak bisa di hapus!", "error");
                        }else {
                            swal("Deleted!", "Data Produk telah di hapus", "success");
                        }
                        //location.reload();
                    }
                });
            });
    });
    $(document).on("click", ".ubah", function () {
        var kode = $(this).closest('td').find('#kode').val();
        var keterangan = $(this).closest('td').find('#keterangan').val();
        $("#kode-modal").val( kode );
        $("#keterangan-modal").val( keterangan );
    });
</script>
