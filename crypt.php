<?php
require_once 'CryptPass.php'

$p = $_POST['password'];
$v = $_POST['valor'];

$cryptPass = new CryptPass();
echo $cryptPass->hashPassword($p, $v);
