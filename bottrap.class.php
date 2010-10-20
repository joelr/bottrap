<?php
class Bottrap {
    var $urls;  
	var $loose = false;
	var $remove_path = "";

	function Bottrap($file) {
		$this->load_data($file);
		$this-> clean_data();		
	}
	
	
	//grab the URLs
    function load_data($file) {
      	$this->urls = file($file);
    }

	//cleanup data
	function clean_data() {
		foreach ($this->urls as $index => $val)	{
			$this->urls[$index] = trim($val);
		}
	}
	
	//check if we think it's a bot hit
	function is_bot($url) {
		$url = str_replace($this->remove_path, "", $url);
		if ($this->loose)
			return $this->is_bot_loose($url);
		else
			return (in_array($url, $this->urls));	
	}
	
	//check for a partial match
	function is_bot_loose($url) {
		foreach ($this->urls as $val) {
			if (strpos($url, $val) !== false)
				return true;
		}
		return false;
	}
	
}
?>