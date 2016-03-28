<?php

class CryptPass {
    function hashPassword($senha, $cpfCnpj) {
    	$s = "{$senha}{$cpfCnpj}";
    	for ($i = 0; $i < 100; $i++) {
    		$s = md5($s);
    	}
    	return $s;
    }
}
