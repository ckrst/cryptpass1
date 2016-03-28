<?php
require_once 'CryptPass.php';
require_once 'vendor/autoload.php';

class CryptTest extends PHPUnit_Framework_TestCase {
    function testHashPassword() {
      $cryptPass = new CryptPass();

      $password = "123456";
      $ourNumber = '123456789';
      $hashed = '337498b31c94d5bc5c1b68873923fe14';

      $this->assertEquals($hashed, $cryptPass->hashPassword($password, $ourNumber));
    }
}
