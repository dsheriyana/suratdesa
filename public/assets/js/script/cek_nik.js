let formLogin;
		let modalData;
		formLogin = document.querySelector("#formLogin");
		modalData = document.querySelector("#modalData");
		formLogin.addEventListener('submit', async (e) => {
			e.preventDefault();
			const formData = new FormData(e.currentTarget);
			let url = `${base_url}auth/cek_nik`;
			const response = await request_xhr(url, "POST", formData);
			if (response.status) {
				modalData.querySelector(".modal-title").innerHTML = `Data Penduduk: ${response.data_nik.nama}`;
				modalData.querySelector("#nik").value = response.data_nik.nik;
				modalData.querySelector("#nama").value = response.data_nik.nama;
				modalData.querySelector("#ttl").value = `${response.data_nik.tmp_lahir}, ` + new Date(response.data_nik.tgl_lahir).toLocaleString('id-ID', {
					dateStyle: "long"
				});
				modalData.querySelector("#jk").value = (response.data_nik.jk == "L") ? "Laki-laki" : "Perempuan";
				modalData.querySelector("#alamat").value = `${response.data_nik.blok} RT: ${response.data_nik.rt} RW: ${response.data_nik.rw}`;
				modalData.querySelector("#agama").value = `${response.data_nik.agama}`;
				modalData.querySelector("#status_perkawinan").value = `${response.data_nik.status}`;
				modalData.querySelector("#pekerjaan").value = `${response.data_nik.pekerjaan}`;
				modalData.querySelector("#pendidikan_terakhir").value = `${response.data_nik.pendidikan}`;
				$("#modalData").modal("show");
			} else {
				Swal.fire({
					icon: "error",
					title: "Tidak ada data",
					showCancelButton: false,
					showConfirmButton: false,
					timer: 1500
				})
			}

		})
