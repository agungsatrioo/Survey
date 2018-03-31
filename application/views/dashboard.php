<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.material.min.css">
<main class="mdl-layout__content mdl-color--grey-100">
	<div class="mdl-grid demo-content">
		<div class="mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--12-col">
			<table id="lihat" class="mdl-data-table mdl-js-data-table" width="100%">
				<thead>
					<tr>
						<th width="10%" style="text-align:center;">NO</th>
						<th width="30%" class="mdl-data-table__cell--non-numeric">Nama</th>
						<th width="15%" class="mdl-data-table__cell--non-numeric">Umur</th>
						<th width="15%" class="mdl-data-table__cell--non-numeric">Jenis Kelamin</th>
						<th width="10%" class="mdl-data-table__cell--non-numeric">Aksi</th>
					</tr>
				</thead>

				<tbody>
					<?php $i=1; foreach($data as $data) { ?>
					<tr>
						<td style="text-align:center;">
							<?php echo $i++?>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<?php echo $data['nama']?>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<?php echo $data['umur']?> tahun
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<?php echo $data['jk']?>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<a class="class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"" href="<?php echo base_url().'index.php/crud/detail_data/'.$data['id']?>">
								<i class="material-icons">launch</i>
							</a>
							<a class="class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"" href="<?php echo base_url().'index.php/crud/delete_data/'.$data['id']?>">
								<i class="material-icons">delete</i>
							</a>
						</td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.material.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#lihat').DataTable();
    });
</script>