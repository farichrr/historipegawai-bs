<div id="content">
    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li>Home</li>
                <li class="active"><?= ucwords(str_replace("-", " ", $_GET['page'])) ?></li>
            </ol>
        </div>
        <div class="section-body contain-lg">


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body ">
                            <div class="form-wizard form-wizard-horizontal" id="rootwizard1">
                                <form class="form floating-label" method="post" action="action/edit-detail"
                                      enctype="multipart/form-data">
                                    <div class="form-wizard-nav">
                                        <div class="progress" style="width: 75%;">
                                            <div class="progress-bar progress-bar-primary" style="width: 0%;"></div>
                                        </div>
                                        <ul class="nav nav-justified nav-pills">
                                            <li class="active"><a href="#tab1" data-toggle="tab"><span
                                                        class="step">1</span> <span class="title"></span></a>
                                            </li>
                                            <li><a href="#tab2" data-toggle="tab"><span class="step">2</span> <span
                                                        class="title"></span></a></li>
                                            <li><a href="#tab3" data-toggle="tab"><span class="step">3</span> <span
                                                        class="title"></span></a></li>
                                        </ul>
                                    </div><!--end .form-wizard-nav -->
                                    <?
                                    $sql = "SELECT * FROM detail_pegawai WHERE id = '" . $_GET['id'] . "' ";
                                    $result = mysqli_query($db, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <input type="hidden" value="<?= $row['id'] ?>" name="id_detail">
                                            <div class="tab-content clearfix">
                                                <? include "pages/form-tab/tab1-edit.php" ?>
                                                <!--end #tab1 -->
                                                <? include "pages/form-tab/tab2-edit.php" ?>
                                                <!--end #tab2 -->
                                                <? include "pages/form-tab/tab3-edit.php" ?>
                                                <!--end #tab3 -->
                                            </div><!--end .tab-content -->
                                            <?
                                        }
                                    } else
                                        echo "Data Kosong";
                                    ?>
                                    <ul class="pager wizard">
                                        <li class="next last"><a class="btn-raised" href="javascript:void(0);">Last</a>
                                        </li>
                                        <li class="next"><a class="btn-raised" href="javascript:void(0);">Next</a></li>
                                    </ul>
                                </form>
                            </div><!--end #rootwizard -->
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
            </div>


        </div><!--end .section-body -->
    </section>


</div>
<? include "includes/js.php" ?>