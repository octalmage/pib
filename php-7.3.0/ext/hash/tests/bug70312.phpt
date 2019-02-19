--TEST--
Bug #70312 HAVAL gives wrong hashes in specific cases
--SKIPIF--
<?php if(!extension_loaded("hash")) print "skip"; ?>
--FILE--
<?php
var_dump(hash('haval128,5', '1234567890123456789012345678901234567890123456789012345678901234'));
var_dump(hash('haval160,5', '1234567890123456789012345678901234567890123456789012345678901234'));
var_dump(hash('haval192,5', '1234567890123456789012345678901234567890123456789012345678901234'));
var_dump(hash('haval224,5', '1234567890123456789012345678901234567890123456789012345678901234'));
var_dump(hash('haval256,5', '1234567890123456789012345678901234567890123456789012345678901234'));
?>
--EXPECT--
string(32) "f3f0d23819b87228b4b70ee350afaa9d"
string(40) "aded6485e137f11d7292212ba3fa961714df0564"
string(48) "e53da2b16269fe732e9a898a96707a9f28404d7333b02286"
string(56) "c574fb307f0817b514b9bb2e7c4bfaffb7ad667aca3c8b523fefcf10"
string(64) "fb73c19300b14d5cb393d929bf005e6c2d459a4c9c009e9813af1d2d3637ee8f"