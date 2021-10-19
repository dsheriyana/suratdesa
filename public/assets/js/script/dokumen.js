let btnTambah = document.querySelector("#btnTambah");
let modalAdd = document.querySelector("#modalAdd");
let formTambah = document.querySelector("#formTambah");
let tabel;
let modalLihat = document.querySelector("#modalLihat");

document.addEventListener("DOMContentLoaded", () => {
	tabel = $("#datatable").DataTable(config_tb)

	$("#modalLihat").on("hidden.bs.modal", function (e) {
		modalLihat.querySelector("#obj").removeAttribute("data");
	});
})

config_tb = {
	dom: "<'row'<'col-sm-12 col-md-6'B><'col-sm-12 col-md-6'f>>" +
		"<'row'<'col-sm-12'tr>>" +
		"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
	buttons: [{
		extend: 'pageLength',
		text: "<i class='fas fa-arrow-down'></i> Tampilkan",
		className: ' btn-primary',
	}, ],
	processing: true,
	responsive: true,
	serverSide: true,
	ajax: {
		url: `${base_url}operator/dt_dokumen`,
		type: "POST"
	},
	language: {
		url: `${base_url}public/assets/lang.json`

	},
	columns: [{
			data:"no"
		},
		{
			data: "jenis_surat"
		},
		{
			data: "nik"
		},
		{
			data: "file_surat",
			render: (data) => {
				stringData = String(`${base_url}public/berkas/riwayat_surat/${data}`);
				return `<button type="button" id="upload" class="btn btn-primary" onclick=upload_dokumen('${stringData}')>Lihat</button>
				<button type="button" id="lihat" class="btn btn-primary" onclick=lihat_dokumen('${stringData}')>Lihat</button>
				<a class="btn btn-success" href="${stringData}" download="File Dokumen">Download</a>`
			}
		},
		{
			data: "tgl_dibuat"
		}
	]


}

lihat_dokumen = (file_surat) => {
	document.querySelector("#iframe").src = file_surat;

	$("#modalLihat").modal('show');
}
