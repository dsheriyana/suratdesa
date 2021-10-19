<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_dt_penduduk extends CI_Model
{

	var $table = 't_penduduk';
	var $column_order      = array('kk', 'nik', 'nama', null, null, 'jk', 'gol_darah', 'agama', 'status', 'pendidikan', 'pekerjaan', 'kepala_keluarga', 'nama_ayah', 'nama_ibu');
	var $column_search     = array('kk', 'nik', 'nama', 'kepala_keluarga');
	var $order             = array('kk' => 'asc'); // default order

	private function _get_datatables_query()
	{
		$this->db->from($this->table);

		$i = 0;
		foreach ($this->column_search as $item) // looping awal
		{
			if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
			{
				if ($i === 0) // looping awal
				{
					$this->db->group_start();
					$this->db->like($item, $_POST['search']['value']);
				} else {
					$this->db->or_like($item, $_POST['search']['value']);
				}
				if (count($this->column_search) - 1 == $i)
					$this->db->group_end();
			}
			$i++;
		}
		if (isset($_POST['order'])) {
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} else if (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_compiled_select()
	{
		$this->_get_datatables_query();
		if ($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get_compiled_select();
		echo $query;
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if ($_POST['length'] != -1) {
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			if ($query) {
				return $query->result();
			}
		} else {
			$query = $this->db->get();
			if ($query) {
				return $query->result();
			}
		}
	}

	function count_filtered()
	{

		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	function count_all()
	{
		$this->db->from($this->table);


		return $this->db->count_all_results();
	}

	function cari($id){
        $query= $this->db->get_where('t_penduduk',array('nik'=>$id));
        return $query;
    }
	function carikk($id){
        $query= $this->db->get_where('t_penduduk',array('kk'=>$id));
        return $query;
    }

	function tampil_data(){
        return $this->db->get('t_penduduk');
    }
}

/* End of file M_dt_penduduk.php */
