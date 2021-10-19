<?php

defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @param array $join = ["table" => "namaTable", "cond" => "logic", "type" => "type join (left, right, other)"]
 */
class Model_global extends CI_Model
{

	public function get_data(string $table = null, array $where = [], array $join = [], array $like = [], array $or_like = [], string $limit = null, string $order = null, string $select = "*", array $group_by = [])
	{
		if (empty($join)) {
			return $this->db->select($select)->from($table)->where($where)->like($like)->or_like($or_like)->group_by($group_by)->limit($limit)->order_by($order)->get();
		} else {
			return $this->db->select($select)->from($table)->join($join['table'], $join['cond'], $join['type'])->where($where)->like($like)->or_like($or_like)->group_by($group_by)->limit($limit)->order_by($order)->get();
		}
	}

	public function simpan(string $table = null, array $data = [])
	{
		return $this->db->insert($table, $data);
	}

	public function update_data(string $table = null, array $data = [], array $where = [])
	{
		return $this->db->update($table, $data, $where);
	}

	public function hapus(string $table = null, array $where = [])
	{
		return $this->db->delete($table, $where);
	}

	public function ntf_swal($clr, $msg)
	{
		$newdata = array(
			'ntf_swal'      => true,
			'clr_swal'      => $clr,
			'msg_swal'     => $msg,
		);
		$this->session->set_flashdata($newdata);
	}
}

/* End of file Model_global.php */
