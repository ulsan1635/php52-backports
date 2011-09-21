--TEST--
SPL: spl_autoload() with static methods
--SKIPIF--
<?php if (!extension_loaded("spl")) print "skip"; ?>
--INI--
include_path=.
--FILE--
<?php

class MyAutoLoader {

        static function autoLoad($className) {
        	echo __METHOD__ . "($className)\n";
        }
}

spl_autoload_register(array('MyAutoLoader', 'autoLoad'));

// and

$myAutoLoader = new MyAutoLoader();

spl_autoload_register(array($myAutoLoader, 'autoLoad'));

var_dump(spl_autoload_functions());

// check
var_dump(class_exists("TestClass", true));

?>
===DONE===
<?php exit(0); ?>
--EXPECTF--
array(1) {
  [0]=>
  array(2) {
    [0]=>
    string(12) "MyAutoLoader"
    [1]=>
    string(8) "autoLoad"
  }
}
MyAutoLoader::autoLoad(TestClass)
bool(false)
===DONE===
