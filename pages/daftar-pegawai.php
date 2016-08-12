<div id="content">
	<section>
		<div class="section-header">
			<ol class="breadcrumb">
				<li class="active">Daftar Pegawai</li>
			</ol>
		</div>
	</section>

	<!-- BEGIN TABLE HOVER -->
	<section class="style-default-bright">
		<div class="section-body">
			<div class="btn-group pull-right">
				<a href="export/excel"
				   class="tambah-tipe btn ink-reaction btn-primary"><i
						class="fa fa-file-o"></i> Export Excel</a>
			</div>
			<table class="table table-hover">
				<thead>
				<tr>
					<th style="width: 150px">Foto</th>
					<th>NIP</th>
					<th>Nama</th>
					<th class="text-right">Actions</th>
				</tr>
				</thead>
				<tbody>
				<?php
				$sql = "SELECT `id`, `nip`, `nama`,`foto`,`file` FROM `detail_pegawai`";
				$result = mysqli_query($db, $sql);
				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr>
                    <td><img class=\"img-circle width-4\" src=\"assets/user_image/".@$row['foto']."\" alt=\"\" /></td>
                    <td>".@$row['nip']."</td>
                    <td>".@$row['nama']."</td>
                    <td class=\"text-right\">
						<a href='edit-detail/".@$row['id']."' type=\"button\" class=\"btn btn-icon-toggle\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"Edit row\"><i class=\"fa fa-pencil\"></i></a>
						<button type=\"button\" class=\"btn btn-icon-toggle\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"Delete row\"><i class=\"fa fa-trash-o\"></i></button>
					</td>
                    </tr>";
					}
				} else {
					echo "Data Kosong";
				} ?>

				</tbody>
			</table>
		</div><!--end .section-body -->
	</section>
	<!-- END TABLE HOVER -->

</div>
<? include "includes/js.php" ?>