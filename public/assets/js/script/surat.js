let btnLihat;
let btnBuat;
let modalLihat = document.querySelector("#modalLihat");

lihat_surat = (url) => {
	modalLihat.querySelector("#obj").src = url;
	$("#modalLihat").modal("show");
}
