$(document).ready(function () {
	let link = document.URL;
	let replace = link.replace('#', '');
	let split = replace.split("/");
	// check url aplikasi
	if (split[5] == "v_infak") {
		table_infak();
	}
});
// fungsi server side data
function table_infak() {
	table = $('#table_infak').DataTable({

		"processing": true,
		"serverSide": true,
		"destroy": true,
		"order": [],

		"ajax": {
			"url": url + "api/get_data_infak",
			"type": "POST"
		},


		"aoColumnDefs": [{
			"aTargets": [5],
			"mRender": function (data, type, row) {
				return `<a href="#"
					class="btn btn-info btn-xs edit-infak" onclick="edit_data(` + row[5] + `)" > <i class="fa fa-edit"></i></a>
				<a href="#"	class="btn btn-danger btn-xs" onclick="delete_data(` + row[5] + `)"> <i class="fa fa-trash"></i> </a>`
			}
		}],

	});
}

// fungsi simpan
$(".tambah-infak").click(function (e) {
	bersihkan();
	$("#modal-crud").modal("show");
});
// fungsi edit
function edit_data(id) {
	$.ajax({
		type: "GET",
		url: url + "api/edit_data_infak",
		data: {
			id: id
		},
		dataType: "JSON",
		success: function (response) {
			view_data_edit(response);
		}
	});
}
//  fungsi delete data
function delete_data(id) {
	$("#konfirmasi_delete_data").modal("show");
	$(".ya-hapus-data").click(function (e) {
		$.ajax({
			type: "GET",
			url: url + "api/delete_data_infak",
			data: {
				id: id
			},
			dataType: "JSON",
			success: function (response) {
				if (response.status == 200) {
					$("#konfirmasi_delete_data").modal("hide");
					message_alert(response);
					table_infak();
				}
			}
		});
	});
}

//  fungsi view data edit
function view_data_edit(response) {
	$("#nama").val(response.data.nama);
	$("#keterangan").val(response.data.keterangan);
	$("#jumlah").val(response.data.jumlah);
	$("#tanggal").val(response.data.tanggal);
	$("#id").val(response.data.id);
	$("#modal-crud").modal("show");
}
// fungsi store data
$(".simpan-data").click(function (e) {

	// alert(alert);
	let data = get_value();
	console.log(data);

	if (data.nama == "" || data.keterangan == "" || data.jumlah == "" || data.tanggal == "") {
		$("#modal-crud").modal("hide");
		let alert = {
			status: 400,
			message: "inputan tidak boleh kosong"
		};
		message_alert(alert);
	} else {
		let jenis_store = '';
		if (data.id == "") {
			jenis_store = "save";
		} else {
			jenis_store = "edit";
		}
		$.ajax({
			type: "POST",
			url: url + "api/store_data_infak/" + jenis_store,
			data: data,
			dataType: "JSON",
			success: function (response) {
				if (response.status == 200) {
					$("#modal-crud").modal("hide");
					bersihkan();
					message_alert(response);
					table_infak();
				}
			}
		});
	}
});
// fungsi membersihkan kotak
function bersihkan() {
	$("#nama").val("");
	$("#keterangan").val("");
	$("#jumlah").val("");
	$("#tanggal").val("");
	$("#id").val("");

}

//  fungsi ambil value
function get_value() {
	let nama = $("#nama").val();
	let keterangan = $("#keterangan").val();
	let jumlah = $("#jumlah").val();
	let tanggal = $("#tanggal").val();
	let id = $("#id").val();
	let data = {
		nama: nama,
		keterangan: keterangan,
		jumlah: jumlah,
		tanggal: tanggal,
		id: id
	}
	return data;
}

// fungsi aler
function message_alert(data) {
	let class_alert = '';
	if (data.status == 200) {
		class_alert = `alert alert-success`;
	} else {
		class_alert = `alert alert-danger`;
	}
	let html = `<div id="pesan" class="` + class_alert + `" role="alert">
	<strong>` + data.message + `</strong>
</div>`;
	$("#show-alert").html(html);
}

// perintah untuk edit data
$(".edit-infak").click(function (e) {
	let id = $(this).attr('data-target');
	$.ajax({
		type: "GET",
		url: url + 'c_admin/edit_infak/' + id,
		data: {
			id: id
		},
		dataType: "JSON",
		success: function (response) {
			$("#nama").val(response.nama);
			$("#keterangan").val(response.keterangan);
			$("#jumlah").val(response.jumlah);
			$("#tanggal").val(response.tanggal);
			$("#form").attr('action', url + 'c_admin/save_infak_edit');
			$("#modal-crud").modal("show");
		}
	});
});

// mengembalikan fungsi tambah ke semula
$(".tambah-infak").click(function (e) {
	bersihkan();
	$("#form").attr('action', url + 'c_admin/save_infak');
	$("#modal-crud").modal("show");
});
