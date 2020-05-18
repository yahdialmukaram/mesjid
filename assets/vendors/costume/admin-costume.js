$(document).ready(function () {
	let link = document.URL;
	let split = link.split("/");
	// check url aplikasi
	if (split[5] == "v_infak") {
		table_infak();
	}
});
// fungsi simpan
$(".tambah-infak").click(function (e) {
	bersihkan();
	$("#modal-crud").modal("show");
});
// fungsi store data
$(".simpan-data").click(function (e) {
	let data = get_value();
	$.ajax({
		type: "POST",
		url: url + "api/store_data_infak/save",
		data: data,
		dataType: "JSON",
		success: function (response) {
			console.log(response);

		}
	});
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


function table_infak() {
	table = $('#table_infak').DataTable({ 

		"processing": true, 
		"serverSide": true, 
		"order": [], 
		
		"ajax": {
			"url": url+"api/get_data_infak",
			"type": "POST"
		},

		
		"aoColumnDefs": [
			{
				"aTargets":[5],
				"mRender":function () { 
					return `<a href="#"
					class="btn btn-info btn-xs"> <i class="fa fa-edit"></i> </a>
				<a href="#"	class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> </a>`
				 }
			}
		],

	});

}
