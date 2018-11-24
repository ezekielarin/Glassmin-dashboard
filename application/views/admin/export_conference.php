
		<?php 
		$this->load->dbutil();

		$query = $this->db->query("SELECT name,email,phone,institution FROM conference");
		$delimiter = ",";
        $newline = "\r\n";
        $enclosure = '"';      
        $members = $this->dbutil->csv_from_result($query, $delimiter, $newline, $enclosure);
        force_download('members.csv', $members);
		
		?>
		