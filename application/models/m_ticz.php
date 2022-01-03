<?php

class m_ticz extends CI_Model{
	public function tampil_data(){
        return $this->db->get('mr_tickets');
    }
	function get_data($table){
		return $this->db->get($table);
	}
	public function get_data_order_by($table, $column, $con)
	{
		return $this->db->order_by($column, $con)->get($table);
	}

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function insert_data($data,$table){
		$this->db->insert($table,$data);
	}

	function update_data($data,$table,$where){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	 public function detail_barang($id_barang){
        $result = $this->db->where('mrt_id', $id_barang)->get('mr_tickets'); 
        if($result->num_rows() > 0 ){
            return $result->result();
        } else {
            return false;
        }
    }
    public function get_data_where($table, $where)
	{
		return $this->db->get_where($table, $where);
	}
}
?>