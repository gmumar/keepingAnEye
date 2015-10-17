<?php

Class Entry_model extends CI_Model {


	function insert_entry($entry){
		$query = "SELECT * FROM entries WHERE user_id=\"" . $entry->user_id . "\";";
		$check = $this->db->query($query);
		if( $check->num_rows()!=0 ){
			return 0;
		}

		return $this->db->insert('entries', $entry);
	}

}



?>
