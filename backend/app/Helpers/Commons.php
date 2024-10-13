<?php
	function format_number_pretty($value, $precision = 2) {
		$val = number_format($value, $precision);
		while ((substr($val, -1) == '0' || substr($val, -1) == '.') && strpos($val, '.') > 0) {
    		$val = substr($val, 0, -1);
    	}
    	return $val;
	}

	function format_value_odds($odd) {
	    if (!isset($odd['handicap_value']) || empty($odd['handicap_value'])) {
	        return $odd['handicap_value'];
        }
        return ($odd['handicap_team'] == 'home' ? -1: 1) * ($odd['handicap_value']);
    }

	function get_client_ip() {
		$ipaddress = null;
		if (getenv('HTTP_CLIENT_IP'))
			$ipaddress = getenv('HTTP_CLIENT_IP');
		else if(getenv('HTTP_X_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		else if(getenv('HTTP_X_FORWARDED'))
			$ipaddress = getenv('HTTP_X_FORWARDED');
		else if(getenv('HTTP_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		else if(getenv('HTTP_FORWARDED'))
			$ipaddress = getenv('HTTP_FORWARDED');
		else if(getenv('REMOTE_ADDR'))
			$ipaddress = getenv('REMOTE_ADDR');
		else
			$ipaddress = null;
		if (validIp($ipaddress)) {
			return $ipaddress;
		}
		return null;
	}

	function format_date_pretty($date){
		return date('m/d/Y h:i A', strtotime($date));
	}

	function format_number_if_not_empty($value) {
        if (!isset($value) || empty($value)) {
            return $value;
        }

        return (float) $value;
    }

	function validIp($ipaddress) {
		if (!$ipaddress) return false;
		if(preg_match("/[a-z]/i", strtolower($ipaddress))){
			return false;
		}
		return true;
	}