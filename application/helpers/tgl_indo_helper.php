<?php

function bulan_tahun($date)
{

	$Bulan = array(
		"Januari", "Februari", "Maret", "April", "Mei", "Juni",
		"Juli", "Agustus", "September", "Oktober", "November", "Desember"
	);

	$tahun = substr($date, 0, 4);
	$bulan = substr($date, 5, 2);
	$result = $Bulan[(int)$bulan - 1] . " " . $tahun;
	return $result;
}

function tgl_default($date)
{
	$Bulan = array(
		"Januari", "Februari", "Maret", "April", "Mei", "Juni",
		"Juli", "Agustus", "September", "Oktober", "November", "Desember"
	);

	// pemisahan tahun, bulan, hari, dan waktu
	$tahun = substr($date, 0, 4);
	$bulan = substr($date, 5, 2);
	$tgl = substr($date, 8, 2);
	

	$result = $tgl . " " . $Bulan[(int)$bulan - 1] . " " . $tahun;
	return $result;
}
function tgl_ubah($date)
{
	$pecah = explode(" ", $date);
	$tanggal = $pecah[0];
	$bulan = bulan($pecah[1]);
	$tahun = $pecah[2];
	return $tahun.'-'.$bulan.'-'.$tanggal;
}
function tgl_string($date)
{
	$pecah = explode("-", $date);
	$tanggal = $pecah[2];
	$bulan = bulan_sort($pecah[1]);
	$tahun = $pecah[0];
	return $tanggal.' '.$bulan.' '.$tahun;
}
function bulan($bln)
        {
            switch ($bln)
            {
                case "Januari":
                    return "01";
                    break;
                case "Februari":
                    return "02";
                    break;
                case "Maret":
                    return "03";
                    break;
                case "April":
                    return "04";
                    break;
                case "Mei":
                    return "05";
                    break;
                case "Juni":
                    return "06";
                    break;
                case "Juli":
                    return "07";
                    break;
                case "Agustus":
                    return "08";
                    break;
                case "September":
                    return "09";
                    break;
                case "Oktober":
                    return "10";
                    break;
                case "November":
                    return "11";
                    break;
                case "Desember":
                    return "12";
                    break;
            }
        }

		function bulan_sort($bln)
        {
            switch ($bln)
            {
                case "01":
                    return "Januari";
                    break;
                case "02":
                    return "Februari";
                    break;
                case "03":
                    return "Maret";
                    break;
                case "04":
                    return "April";
                    break;
                case "05":
                    return "Mei";
                    break;
                case "06":
                    return "Juni";
                    break;
                case "07":
                    return "Juli";
                    break;
                case "08":
                    return "Agustus";
                    break;
                case "09":
                    return "September";
                    break;
                case "10":
                    return "Oktober";
                    break;
                case "11":
                    return "November";
                    break;
                case "12":
                    return "Desember";
                    break;
            }
        }
function getRomawi($bln){
                switch ($bln){
                    case 1: 
                        return "I";
                        break;
                    case 2:
                        return "II";
                        break;
                    case 3:
                        return "III";
                        break;
                    case 4:
                        return "IV";
                        break;
                    case 5:
                        return "V";
                        break;
                    case 6:
                        return "VI";
                        break;
                    case 7:
                        return "VII";
                        break;
                    case 8:
                        return "VIII";
                        break;
                    case 9:
                        return "IX";
                        break;
                    case 10:
                        return "X";
                        break;
                    case 11:
                        return "XI";
                        break;
                    case 12:
                        return "XII";
                        break;
                }
}


function nama_hari($date)
{
	$Hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
	$hari = date("w", strtotime($date));
	$result = $Hari[$hari];
	return $result;
}

function tgl_indo($date)
{

	// array hari dan bulan
	$Hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
	$Bulan = array(
		"Januari", "Februari", "Maret", "April", "Mei", "Juni",
		"Juli", "Agustus", "September", "Oktober", "November", "Desember"
	);

	// pemisahan tahun, bulan, hari, dan waktu
	$tahun = substr($date, 0, 4);
	$bulan = substr($date, 5, 2);
	$tgl = substr($date, 8, 2);
	$waktu = substr($date, 11, 5);
	$hari = date("w", strtotime($date));
	$result = $Hari[$hari] . ", " . $tgl . " " . $Bulan[(int)$bulan - 1] . " " . $tahun;
	return $result;
}

function waktu_indo($date)
{
	$waktu = substr($date, 11, 5);
	return $waktu . " WIB";
}

function nama_bulan()
{
	$bulan = [
		"Januari", "Februari", "Maret", "April", "Mei", "Juni",
		"Juli", "Agustus", "September", "Oktober", "November", "Desember"
	];
	return $bulan;
}
