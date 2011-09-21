--TEST--
Bug #50772 (mysqli constructor without parameters does not return a working mysqli object)
--SKIPIF--
<?php
require_once('skipif.inc');
require_once('skipifconnectfailure.inc');
?>
--FILE--
<?php
	include "connect.inc";
	$db1 = new mysqli();

	// These calls fail
	$db1->options(MYSQLI_OPT_CONNECT_TIMEOUT, 3);
	$db1->real_connect($host, $user, $passwd);
	if(mysqli_connect_error()) {
		echo "error 1\n";
	} else {
		echo "ok 1\n";
	}

	$db2 = mysqli_init();

	$db2->options(MYSQLI_OPT_CONNECT_TIMEOUT, 3);
	$db2->real_connect($host, $user, $passwd);
	if(mysqli_connect_error()) {
		echo "error 2\n";
	} else {
		echo "ok 2\n";
	}
	echo "done\n";
?>
--EXPECTF--
ok 1
ok 2
done