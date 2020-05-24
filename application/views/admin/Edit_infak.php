
<!-- Modal edit infak-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
<?php foreach ($edit as $key => $value):?>

				<form action="<?=base_url();?>c_admin/update_infak" method="POST">
					<div class="form-group">
						<label for="exampleInputEmail1">Nama</label>
						<input type="text" name="nama" class="form-control" placeholder="Input nama" required>

					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Keterangan</label>
						<input type="text" name="keterangan" class="form-control" placeholder="Input keterangan"
							required>
					</div>

					<div class="form-group">
						<label for="exampleInputPassword1">Jumlah</label>
						<input type="text" name="jumlah" class="form-control" placeholder="Input jumlah" required>
					</div>

					<div class="form-group">
						<label for="exampleInputPassword1">Tanggal</label>
						<div class='input-group date' id='myDatepicker'>
							<input type='text' name="tanggal" placeholder="Masukan tanggal" required
								class="form-control" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
					</div>
            </div>
<?php endforeach; ?>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			</form>
		</div>
	</div>
</div>



