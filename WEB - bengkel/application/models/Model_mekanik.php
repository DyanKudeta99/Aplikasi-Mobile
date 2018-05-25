<?php
class Model_mekanik extends CI_Model {
	function show_mekanik(){
		$hasil=$this->db->query("SELECT * FROM mekanik");
		return $hasil;
		}
	}
?>