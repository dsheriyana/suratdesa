let formKades;
let formCamat;
let formCamatNIP;
let formKapolsek;
let formUbahSandi;

formKades = document.querySelector("#formKades");
formCamat = document.querySelector("#formCamat");
formCamatNIP = document.querySelector("#formCamatNIP");
formKapolsek = document.querySelector("#formKapolsek");
formUbahSandi = document.querySelector("#formUbahSandi");


window.addEventListener("DOMContentLoaded", () => {
	document.querySelector("#ubah_sandi").style.display = 'none';
	document.querySelector(".msg").style.display = 'none';
	document.querySelector(".msg2").style.display = 'none';
	formUbahSandi.querySelector("[type='submit']").setAttribute('disabled', 'disabled');
})
document.querySelector(".btn-yes").addEventListener('click', () => {
	document.querySelector("#ubah_sandi").style.display = 'block';
})
document.querySelector(".btn-no").addEventListener('click', () => {
	document.querySelector("#ubah_sandi").style.display = 'none';
})

formKades.addEventListener("submit", (e) => {
e.preventDefault()
let formData = new FormData(e.currentTarget);
update_kades(formData);
})

update_kades = async (formData) => {
let url = `${base_url}operator/update_kades`;
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
	
} else {
	Swal.fire({
		icon: "error",
		title: `${response.pesan}`,
		showConfirmButton: false,
		timer: 1500
	});
	
}
}

formCamat.addEventListener("submit", (e)=>{
e.preventDefault();
let formData = new FormData(e.currentTarget);
update_camat(formData);
});

update_camat = async (formData) => {
	let url = `${base_url}operator/update_camat`;
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
		
	} else {
		Swal.fire({
			icon: "error",
			title: `${response.pesan}`,
			showConfirmButton: false,
			timer: 1500
		});
		
	}
	}

	
formCamatNIP.addEventListener("submit", (e)=>{
	e.preventDefault();
	let formData = new FormData(e.currentTarget);
	update_camat(formData);
	});
	
	update_camat = async (formData) => {
		let url = `${base_url}operator/update_camatnip`;
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
			
		} else {
			Swal.fire({
				icon: "error",
				title: `${response.pesan}`,
				showConfirmButton: false,
				timer: 1500
			});
			
		}
		}

formKapolsek.addEventListener("submit", (e)=>{
		e.preventDefault();
		let formData = new FormData(e.currentTarget);
		update_kapolsek(formData);
});
		
update_kapolsek = async (formData) => {
let url = `${base_url}operator/update_kapolsek`;
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
	
} else {
	Swal.fire({
		icon: "error",
		title: `${response.pesan}`,
		showConfirmButton: false,
		timer: 1500
	});
	
}
}

formUbahSandi.addEventListener("keyup", (e)=>{
	let pass_old = document.querySelector("#password_old").value;
	if(pass_old != ''){
	e.preventDefault();
	let formData = new FormData(e.currentTarget);
	cek_pwd(formData);
	} else {
		$('.msg').hide()
	}
})

cek_pwd = async (formData) => {
let url = `${base_url}operator/cek_pwd`;
const response = await request_xhr(url, "POST", formData);
if(response.status)
{

	$('.msg').html('<p class="badge-success block-tag text-center"><small class="block-area white">Kata Sandi Benar</small></p>');
	$('.msg').show()
}
else {
	$('.msg').html('<p class="badge-danger block-tag text-center"><small class="block-area white">Kata Sandi Salah</small></p>');
	$('.msg2').show()
}
}

$("#password_conf").on('keyup', function() {
	let passNew = $("#password_new").val();
	let passConf = $(this).val()
if(passConf.length === 0){
	$('.msg2').hide()
} else {
	if(passNew == passConf)
	{
		$('.msg2').html('<p class="badge-success block-tag text-center"><small class="block-area white">Kata Sandi Cocok</small></p>');
		$('.msg2').show()
		formUbahSandi.querySelector("[type='submit']").removeAttribute('disabled', 'disabled');
	}
	else {
		$('.msg2').html('<p class="badge-danger block-tag text-center"><small class="block-area white">Kata Sandi Tidak Cocok</small></p>');
		$('.msg2').show()
	}
}
})

formUbahSandi.addEventListener("submit", (e) => {
e.preventDefault();
let formData = new FormData(e.currentTarget);
update_pwd(formData);
})

update_pwd = async (formData) => {
	let url = `${base_url}operator/update_pwd`;
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
		location.href = `${base_url}auth/logout`
		
	} else {
		Swal.fire({
			icon: "error",
			title: `${response.pesan}`,
			showConfirmButton: false,
			timer: 1500
		});
		
	}
	}


