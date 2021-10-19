let btnTambah = document.querySelector("#btnTambah");
let modalAdd = document.querySelector("#modalAdd");
let formTambah = document.querySelector("#formTambah");
let tabel;

document.addEventListener("DOMContentLoaded", () => {
	tabel = $("#datatable").DataTable(config_tb)
})

edit_data = async (id_penduduk) => {
let url = `${base_url}operator/get_penduduk_by_id/${id_penduduk}`;
const response = await request_xhr(url, "POST");
console.log(response.pesan);
if (response.status) {
	formTambah.reset();
	modalAdd.querySelector(".modal-title").innerHTML = "Edit Data Penduduk";
	formTambah.querySelector("#id_penduduk").value = response.data.id_penduduk;
	formTambah.querySelector("#kk").value = response.data.kk;
	formTambah.querySelector("#nik").value = response.data.nik;
	formTambah.querySelector("#nama").value = response.data.nama;
	formTambah.querySelector("#tmp_lahir").value = response.data.tmp_lahir;
	formTambah.querySelector("#tgl_lahir").value = response.data.tgl_lahir;
	formTambah.querySelector("#blok").value = response.data.blok;
	formTambah.querySelector("#rt").value = response.data.rt;
	formTambah.querySelector("#rw").value = response.data.rw;
	formTambah.querySelector("#jk").value = response.data.jk;
	formTambah.querySelector("#gol_darah").value = response.data.gol_darah;
	formTambah.querySelector("#agama").value = response.data.agama;
	formTambah.querySelector("#status_kawin").value = response.data.status;
	formTambah.querySelector("#pendidikan_terakhir").value = response.data.pendidikan;
	formTambah.querySelector("#pekerjaan").value = response.data.pekerjaan;
	formTambah.querySelector("#kepala_keluarga").value = response.data.kepala_keluarga;
	formTambah.querySelector("#nama_ayah").value = response.data.nama_ayah;
	formTambah.querySelector("#nama_ibu").value = response.data.nama_ibu;
	$("#modalAdd").modal("show");
} else {
	Swal.fire({
		icon: "error",
		title: `${response.pesan}`,
		showConfirmButton: false,
		timer: 1500,
	});
}
}

hapus_data = async(id_penduduk) => {
	let url = `${base_url}operator/hapus_penduduk/${id_penduduk}`;
	Swal.fire({
		icon: 'question',
		title: 'Apakah anda akan menghapus data ini?',
		customClass: {
			confirmButton: "btn btn-success",
			cancelButton: "btn btn-dark",
		},
		showCancelButton: true,
		confirmButtonText: `Ya, hapus`,
		cancelButtonText: `Batal`,
	}).then(async (result) => {
		if (result.isConfirmed) {
			const response = await request_xhr(url);
			console.log(response.pesan);
			if (response.status) {
				Swal.fire({
					icon: "success",
					title: `${response.pesan}`,
					showConfirmButton: false,
					timer: 1500,
				});
				tabel.ajax.reload(null, false);
			} else {
				Swal.fire({
					icon: "warning",
					title: `${response.pesan}`,
					showConfirmButton: false,
					timer: 3500,
				});
				tabel.ajax.reload(null, false);
			}
		}
	})
}
formTambah.addEventListener("submit", (e)=>{
	e.preventDefault();
	let formData = new FormData(e.currentTarget);
	simpan_data(formData);
})

simpan_data = async (formData) => {
	let url=`${base_url}operator/simpan_penduduk`;
	const response = await request_xhr(url, "POST", formData);
	console.log(response.pesan);
	if(response.status)
	{
		Swal.fire({
			icon: "success",
			title: `${response.pesan}`,
			showConfirmButton: false,
			timer: 1500
		});
		tabel.ajax.reload(null, false);
		$("#modalAdd").modal('hide');
	} else {
		Swal.fire({
			icon: "error",
			title: `Gagal tambah data`,
			showConfirmButton: false,
			timer: 1500
		});
		tabel.ajax.reload(null, false);
		$("#modalAdd").modal('hide');
	}
}


config_tb = {
		dom: "<'row'<'col-sm-12 col-md-6'B><'col-sm-12 col-md-6'f>>" +
			"<'row'<'col-sm-12'tr>>" +
			"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
		buttons: [{
				extend: 'pageLength',
				text: "<i class='fas fa-arrow-down'></i> Tampilkan",
				className: ' btn-primary',
			},
			{
				
				text: "<i class='ri ri-refresh-line'></i> Reload",
				className: ' btn-success',
				action: function() {
					tabel.ajax.reload(null, false);
					toastr.success("Berhasil memuat ulang data", "Informasi", {
						showMethod: "slideDown",
						hideMethod: "slideUp",
						timeOut: 1500,
					});
				}
			},
			{

				text: "<i class='fas fa-plus'></i> Tambah Data",
				className: ' btn-danger',
				action: function() {
					$("#modalAdd").modal('show')
				}
			},

		],
		processing: true,
		serverSide: true,
		responsive: true,
		ajax: {
			url: `${base_url}operator/dt_penduduk`,
			type: "POST"
		},
		language: {
			url: `${base_url}public/assets/lang.json`

		},
		columns: [{
				data: "no_kk"
			},
			{
				data: "nik"
			},
			{
				data: "nama"
			},
			{
				data: "alamat"
			},
			{
				data: "ttl"
			},
			{
				data: "jk"
			},
			{
				data: "gol_darah"
			},
			{
				data: "agama"
			},
			{
				data: "status"
			},
			{
				data: "pendidikan"
			},
			{
				data: "pekerjaan"
			},
			{
				data: "kepala_keluarga"
			},
			{
				data: "nama_ayah"
			},
			{
				data: "nama_ibu"
			},
			{
				data: "aksi"
			},
		],
}
