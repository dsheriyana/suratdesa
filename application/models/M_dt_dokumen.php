<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_dt_dokumen extends CI_Model
{

	var $table = 't_surat a';
	var $column_order      = array('b.nama_surat', 'a.no_surat', 'a.isi_surat', 'a.nik', 'a.tgl_dibuat');
	var $column_search     = array('a.nik', 'a.no_surat', 'a.id_jenissurat');
	var $order             = array('a.tgl_dibuat' => 'asc'); // default order

	private function _get_datatables_query()
	{
		$this->db->from($this->table);
		$this->db->join('t_jenissurat b', 'a.id_jenissurat=b.id_jenissurat', 'left');
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

	public function getSurat()
    {
        $this->db->select('*');
        $this->db->from('t_surat');
        $this->db->join('t_jenissurat', 't_surat.id_jenissurat = t_jenissurat.id_jenissurat');
        $datasurat = $this->db->get();         
        return $datasurat->result_array();

    }
}

/* End of file M_dt_dokumen.php */
