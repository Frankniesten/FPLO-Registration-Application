<?php
	
	// Function: get config params.
	function getConfig($config = array (), $variable = NULL, $required = FALSE, $default = NULL) {
		if (!is_array($config)) {
			throw new Exception("no usable configuration array, broken or missing config file?");
		}
		if ($variable === NULL || empty ($variable)) {
			throw new Exception("no variable specified or empty");
		}
		if ($required) {
			if (!isset ($config[$variable])) {
				throw new Exception("$variable not available while required");
			}
			return $config[$variable];
		}
		if (isset ($config[$variable])) {
			return $config[$variable];
		}
		return $default;
	}
	
?>
