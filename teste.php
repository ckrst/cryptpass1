<?php
require_once 'CryptPass.php';

$p = '121212';
$v = '409.463.712-53';

$cryptPass = new CryptPass();
echo $cryptPass->hashPassword($p, $v);
