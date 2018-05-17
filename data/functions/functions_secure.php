<?php 
	
	function secure_input ($str) {
		
		return strip_tags ($str);
	}
	
	//Niet nodig voor PDO
	function secure_sql ($str) {
		
		return mysql_real_escape_string($str);
	}
	
	function secure_output ($str) {
		
		return htmlspecialchars($str, ENT_QUOTES);
	}
	
	function secure_input_array ($arr) {
		
		$out = array();
		
		foreach ($arr as $key => $val) {
			
			$out[$key] = secure_input ($val);
		}
		return $out;
	}
?>