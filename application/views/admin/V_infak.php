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
				<h3>Users <small>Some examples to get you started</small></h3>
			</div>

			<div class="title_right">
				<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">Go!</button>
						</span>
					</div>
				</div>
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
					<div id="show-alert"></div>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary fa fa-plus tambah-infak">
						Tambah Infaq
					</button>
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
										<a href="#" data-target="<?php echo $value['id_infak']; ?>"
											class="btn btn-info btn-xs edit-infak"> <i class="fa fa-edit"></i>
											<a href="<?php echo base_url(); ?>c_admin/delete_infak/<?php echo $value['id_infak']; ?>" data-target="<?php echo base_url(); ?>c_admin/delete_infak/<?php echo $value['id_infak']; ?>"
												class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> </a>
								</tr>
								<?php endforeach; ?>
							<tfoot>
								<th> </th>
								<th> </th>
								<th> </th>

								<th>Total :</th>
								<th><?= 'Rp.' . number_format($total);?></th>

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
<div class="modal fade" id="modal-crud" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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

				<form action="<?=base_url();?>c_admin/save_infak" method="POST">
					<div class="form-group">
						<label for="exampleInputEmail1">Nama</label>
						<input type="text" name="nama" id="nama" class="form-control" placeholder="Input nama" required>

					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Keterangan</label>
						<input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Input keterangan"
							required>
					</div>

					<div class="form-group">
						<label for="exampleInputPassword1">Jumlah</label>
						<input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="Input jumlah" required>
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
