<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
	<a data-toggle="tooltip" data-placement="top" title="Settings">
		<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
	</a>
	<a data-toggle="tooltip" data-placement="top" title="FullScreen">
		<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
	</a>
	<a data-toggle="tooltip" data-placement="top" title="Lock">
		<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
	</a>
	<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
		<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
	</a>
</div>
<!-- /menu footer buttons -->
</div>
</div>

<!-- top navigation -->
<div class="top_nav">
	<div class="nav_menu">
		<nav>
			<div class="nav toggle">
				<a id="menu_toggle"><i class="fa fa-bars"></i></a>
			</div>

			<ul class="nav navbar-nav navbar-right">
				<li class="">
					<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
						aria-expanded="false">
						<img src="images/img.jpg" alt="">John Doe
						<span class=" fa fa-angle-down"></span>
					</a>
					<ul class="dropdown-menu dropdown-usermenu pull-right">
						<li><a href="javascript:;"> Profile</a></li>
						<li>
							<a href="javascript:;">
								<span class="badge bg-red pull-right">50%</span>
								<span>Settings</span>
							</a>
						</li>
						<li><a href="javascript:;">Help</a></li>
						<li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
					</ul>
				</li>

				<li role="presentation" class="dropdown">
					<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
						aria-expanded="false">
						<i class="fa fa-envelope-o"></i>
						<span class="badge bg-green">6</span>
					</a>
					<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
						<li>
							<a>
								<span class="image"><img src="<?=base_url();?>assets/images/img.jpg"
										alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<a>
								<span class="image"><img src="<?=base_url();?>assets/images/img.jpg"
										alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<a>
								<span class="image"><img src="<?=base_url();?>assets/images/img.jpg"
										alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<a>
								<span class="image"><img src="<?=base_url();?>assets/images/img.jpg"
										alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<div class="text-center">
								<a>
									<strong>See All Alerts</strong>
									<i class="fa fa-angle-right"></i>
								</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</div>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
			</div>
		</div>

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Data Infaq</h2>

						<div class="clearfix"></div>
					</div>
					<div class="alert alert-info" role="alert">
						<h4 class="alert-heading"><i class="fa fa-info"></i> Pemberitahuan</h4>
						<p>Manajemen kas masuk Dan anggaran</p>
					</div>
					<div id="show-alert"></div>
					<!-- Button trigger modal -->

					<button type="button" class="btn btn-primary fa fa-plus " data-toggle="modal"
						data-target="#exampleModal">
						Tambah Data Kas
					</button>
								<a href="<?php echo base_url();?>c_admin/laporan_masuk"class="btn btn-warning btn-sm"><i class="fa fa-print"></i> Cetak Keuangan Masuk</a>
								<!-- <div class="x_content"> -->
								<!-- <a href="#" data-toggle="modal" data-target="#modal_per_bulan"
 									class="btn btn-warning btn-sm"><i class="fa fa-print"></i> Cetak Data 
 									Perbulan</a>
 						
 								<a href="#" data-toggle="modal" data-target="#modal_per_tahun"
 									class="btn btn-warning btn-sm"><i class="fa fa-print"></i> Cetak Data 
 									Pertahun</a> -->
 							


					<!-- alert simpan data -->
					<?php if ($this->session->flashdata('success')):?>
					<div id="pesan" class="alert alert-success" role="alert">
						<strong><?=$this->session->flashdata('success');
						?></strong>
					</div>
					<?php endif;?>
					<!-- aler hapus data -->
					<?php if ($this->session->flashdata('danger')):?>
					<div id="pesan" class="alert alert-danger" role="alert">
						<strong><?=$this->session->flashdata('danger');
						?></strong>
					</div>
					<?php endif; ?>

					<div class="x_content">

						<table id="datatable" class="table table-striped table-bordered">
							<thead>
								<tr style="background-color: rgba(5, 24, 24, 0.205);">
									<th>No</th>
									<th>Name</th>
									<th>Keterangan</th>
									<th>Tanggal</th>
									<th>Jumlah</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
                                $no = 1;
                                foreach ($tb_infak as $key => $value):?>
								<tr>
									<td><?=$no++;?></td>
									<td><?=$value['nama'];?></td>
									<td><?=$value['keterangan'];?></td>
									<td><?=$value['tanggal'];?></td>
									<td><?="Rp. ".number_format($value['jumlah']);?></td>

									<td>
										<a href="<?php echo base_url(); ?>c_admin/edit_infak/<?php echo $value['id_infak']; ?>"
											class="btn btn-info btn-xs"> <i class="fa fa-wrench"></i> </a>
										<a href="<?php echo base_url(); ?>c_admin/delete_infak/<?php echo $value['id_infak'];; ?>"
											class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> </a>
									</td>
								</tr>
								<?php endforeach; ?>
							<tfoot>
								<tr>
									<td colspan="3"> </td>

									<td style="background-color: rgb(226, 241, 11);">Total :</td>
									<td style="background-color: rgb(226, 241, 11);" colspan="0">
										<?= 'Rp.' . number_format($total);?></td>
								</tr>

								<tr>
									<td colspan="3"> </td>

									<td style="background-color: rgb(226, 241, 11);">Pengeluaran :</td>
									<td style="background-color: rgb(226, 241, 11);" colspan="0">
										<?= 'Rp. ' . number_format($pengeluaran);?></td>
								</tr>

								<tr>
									<td colspan="3"> </td>

									<td style="background-color: rgb(226, 241, 11);">Sisa Kas :</td>
									<td style="background-color: rgb(226, 241, 11);" colspan="0">
										<?= 'Rp. ' . number_format($sisa);?></td>
								</tr>
							</tfoot>

							</tbody>
						</table>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /page content -->

<!-- Modal tambah infak-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">

				<h5 class="modal-title" id="exampleModalLabel">Tambah kas</h5>

			</div>
			<div class="modal-body">

				<form action="<?=base_url();?>c_admin/save_infak" method="POST">
					<div class="form-group">
						<label for="exampleInputEmail1">Nama</label>
						<input type="text" name="nama" id="nama" class="form-control" placeholder="Input nama" required>

					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Keterangan</label>
						<input type="text" name="keterangan" id="keterangan" class="form-control"
							placeholder="Input keterangan" required>
					</div>

					<div class="form-group">
						<label for="exampleInputPassword1">Jumlah</label>
						<input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="Input jumlah"
							required>
					</div>

					<div class="form-group">
						<label for="exampleInputPassword1">Tanggal</label>
						<div class='input-group date' id='myDatepicker'>
							<input type='text' name="tanggal" id="tanggal" placeholder="Masukan tanggal" required
								class="form-control" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal laporan per tahun-->
<div class="modal fade" id="modal_per_tahun" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
 	aria-hidden="true">
 	<div class="modal-dialog" role="document">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h5 class="modal-title">Cetak Laporan</h5>
 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</button>
 			</div>
 			<div class="modal-body">
 				<form class="horizontal-form" action="<?php echo base_url();?>controller/cari_laporan_tahunan"
 					method="post">
 					<div class="form-group">
 						<div id="" class="alert alert-warning alert-dismissible">
 							<button type="button" class="close" data-dismiss="alert"
 								aria-hidden="true">&times;</button>
 							<h4><i class="icon fa fa-info"></i> Pemberitahuan !</h4>
 							Pilih Tahun laporan !!
 						</div>
 						<div class="col-md-4 col-sm-3 col-xs-12">

 							<label for="">Pilih Tahun</label>
 						</div>
 						<div class="col-md-4 col-sm-9 col-xs-12">
 							<select name="tahun" id="" class="form-control">
 								<?php for ($i=2005; $i < 2030 ; $i++):?>
 								<option value="<?php echo $i;?>"><?php echo $i;?></option>
 								<?php endfor;?>
 							</select>
 						</div>
 						<small id="helpId" class="text-muted"></small>
 					</div>
 			</div>
 			<div class="modal-footer">
 				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 				<button type="submit" class="btn btn-primary">Cetak</button>
 			</div>
 			</form>
 		</div>
 	</div>
 </div>

<!-- Modal pilih laporan per bulan -->
<div class="modal fade" id="modal_per_bulan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
 	aria-hidden="true">
 	<div class="modal-dialog" role="document">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h5 class="modal-title">Cetak Laporan</h5>
 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</button>
 			</div>
 			<div class="modal-body">
 				<form class="horizontal-form" action="<?php echo base_url();?>controller/cari_laporan_bulanan"
 					method="post">
 					<div class="form-group">
 						<div id="" class="alert alert-warning alert-dismissible">
 							<button type="button" class="close" data-dismiss="alert"
 								aria-hidden="true">&times;</button>
 							<h4><i class="icon fa fa-info"></i> Pemberitahuan !</h4>
 							Pilih Bulan dan tahun laporan !!
 						</div>
 						<div class="col-md-4 col-sm-3 col-xs-12">

 							<label for="">Pilih Bulan dan tahun</label>
 						</div>

 						<div class="col-md-4 col-sm-9 col-xs-12">
 							<select name="bulan" id="" class="form-control">
 								<option value="01">Januari</option>
 								<option value="02">Februari</option>
 								<option value="03">Maret</option>
 								<option value="04">April</option>
 								<option value="05">Mei</option>
 								<option value="06">Juni</option>
 								<option value="07">Juli</option>
 								<option value="08">Agustus</option>
 								<option value="09">September</option>
 								<option value="10">Oktober</option>
 								<option value="11">November</option>
 								<option value="12">Desember</option>
 							</select>
 						</div>
 						<div class="col-md-4 col-sm-9 col-xs-12">
 							<select name="tahun" id="" class="form-control">
 								<?php for ($i=2005; $i < 2030 ; $i++):?>
 								<option value="<?php echo $i;?>"><?php echo $i;?></option>
 								<?php endfor;?>
 							</select>
 						</div>
 						<small id="helpId" class="text-muted"></small>
 					</div>
 			</div>
 			<div class="modal-footer">
 				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 				<button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button>
 			</div>
 			</form>
 		</div>
 	</div>
 </div>
