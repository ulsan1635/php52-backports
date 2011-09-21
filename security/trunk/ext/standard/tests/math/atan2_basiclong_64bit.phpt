--TEST--
Test atan2 function : 64bit long tests
--SKIPIF--
<?php
if (PHP_INT_SIZE != 8) die("skip this test is for 64bit platform only");
?>
--FILE--
<?php
 
define("MAX_64Bit", 9223372036854775807);
define("MAX_32Bit", 2147483647);
define("MIN_64Bit", -9223372036854775807 - 1);
define("MIN_32Bit", -2147483647 - 1);

$longVals = array(
    MAX_64Bit, MIN_64Bit, MAX_32Bit, MIN_32Bit, MAX_64Bit - MAX_32Bit, MIN_64Bit - MIN_32Bit,
    MAX_32Bit + 1, MIN_32Bit - 1, MAX_32Bit * 2, (MAX_32Bit * 2) + 1, (MAX_32Bit * 2) - 1,
    MAX_64Bit -1, MAX_64Bit + 1, MIN_64Bit + 1, MIN_64Bit - 1
);

$otherVals = array(0, 1, -1, 7, 9, 65, -44, MAX_32Bit, MIN_32Bit, MAX_64Bit, MIN_64Bit);


foreach ($longVals as $longVal) {
   foreach($otherVals as $otherVal) {
	   echo "--- testing: $longVal, $otherVal ---\n";   
      var_dump(atan2($longVal, $otherVal));
   }
}
   
?>
===DONE===
--EXPECT--
--- testing: 9223372036854775807, 0 ---
float(1.5707963267949)
--- testing: 9223372036854775807, 1 ---
float(1.5707963267949)
--- testing: 9223372036854775807, -1 ---
float(1.5707963267949)
--- testing: 9223372036854775807, 7 ---
float(1.5707963267949)
--- testing: 9223372036854775807, 9 ---
float(1.5707963267949)
--- testing: 9223372036854775807, 65 ---
float(1.5707963267949)
--- testing: 9223372036854775807, -44 ---
float(1.5707963267949)
--- testing: 9223372036854775807, 2147483647 ---
float(1.5707963265621)
--- testing: 9223372036854775807, -2147483648 ---
float(1.5707963270277)
--- testing: 9223372036854775807, 9223372036854775807 ---
float(0.78539816339745)
--- testing: 9223372036854775807, -9223372036854775808 ---
float(2.3561944901923)
--- testing: -9223372036854775808, 0 ---
float(-1.5707963267949)
--- testing: -9223372036854775808, 1 ---
float(-1.5707963267949)
--- testing: -9223372036854775808, -1 ---
float(-1.5707963267949)
--- testing: -9223372036854775808, 7 ---
float(-1.5707963267949)
--- testing: -9223372036854775808, 9 ---
float(-1.5707963267949)
--- testing: -9223372036854775808, 65 ---
float(-1.5707963267949)
--- testing: -9223372036854775808, -44 ---
float(-1.5707963267949)
--- testing: -9223372036854775808, 2147483647 ---
float(-1.5707963265621)
--- testing: -9223372036854775808, -2147483648 ---
float(-1.5707963270277)
--- testing: -9223372036854775808, 9223372036854775807 ---
float(-0.78539816339745)
--- testing: -9223372036854775808, -9223372036854775808 ---
float(-2.3561944901923)
--- testing: 2147483647, 0 ---
float(1.5707963267949)
--- testing: 2147483647, 1 ---
float(1.5707963263292)
--- testing: 2147483647, -1 ---
float(1.5707963272606)
--- testing: 2147483647, 7 ---
float(1.5707963235353)
--- testing: 2147483647, 9 ---
float(1.5707963226039)
--- testing: 2147483647, 65 ---
float(1.5707962965269)
--- testing: 2147483647, -44 ---
float(1.570796347284)
--- testing: 2147483647, 2147483647 ---
float(0.78539816339745)
--- testing: 2147483647, -2147483648 ---
float(2.3561944904252)
--- testing: 2147483647, 9223372036854775807 ---
float(2.3283064354545E-10)
--- testing: 2147483647, -9223372036854775808 ---
float(3.141592653357)
--- testing: -2147483648, 0 ---
float(-1.5707963267949)
--- testing: -2147483648, 1 ---
float(-1.5707963263292)
--- testing: -2147483648, -1 ---
float(-1.5707963272606)
--- testing: -2147483648, 7 ---
float(-1.5707963235353)
--- testing: -2147483648, 9 ---
float(-1.5707963226039)
--- testing: -2147483648, 65 ---
float(-1.5707962965269)
--- testing: -2147483648, -44 ---
float(-1.570796347284)
--- testing: -2147483648, 2147483647 ---
float(-0.78539816363028)
--- testing: -2147483648, -2147483648 ---
float(-2.3561944901923)
--- testing: -2147483648, 9223372036854775807 ---
float(-2.3283064365387E-10)
--- testing: -2147483648, -9223372036854775808 ---
float(-3.141592653357)
--- testing: 9223372034707292160, 0 ---
float(1.5707963267949)
--- testing: 9223372034707292160, 1 ---
float(1.5707963267949)
--- testing: 9223372034707292160, -1 ---
float(1.5707963267949)
--- testing: 9223372034707292160, 7 ---
float(1.5707963267949)
--- testing: 9223372034707292160, 9 ---
float(1.5707963267949)
--- testing: 9223372034707292160, 65 ---
float(1.5707963267949)
--- testing: 9223372034707292160, -44 ---
float(1.5707963267949)
--- testing: 9223372034707292160, 2147483647 ---
float(1.5707963265621)
--- testing: 9223372034707292160, -2147483648 ---
float(1.5707963270277)
--- testing: 9223372034707292160, 9223372036854775807 ---
float(0.78539816328103)
--- testing: 9223372034707292160, -9223372036854775808 ---
float(2.3561944903088)
--- testing: -9223372034707292160, 0 ---
float(-1.5707963267949)
--- testing: -9223372034707292160, 1 ---
float(-1.5707963267949)
--- testing: -9223372034707292160, -1 ---
float(-1.5707963267949)
--- testing: -9223372034707292160, 7 ---
float(-1.5707963267949)
--- testing: -9223372034707292160, 9 ---
float(-1.5707963267949)
--- testing: -9223372034707292160, 65 ---
float(-1.5707963267949)
--- testing: -9223372034707292160, -44 ---
float(-1.5707963267949)
--- testing: -9223372034707292160, 2147483647 ---
float(-1.5707963265621)
--- testing: -9223372034707292160, -2147483648 ---
float(-1.5707963270277)
--- testing: -9223372034707292160, 9223372036854775807 ---
float(-0.78539816328103)
--- testing: -9223372034707292160, -9223372036854775808 ---
float(-2.3561944903088)
--- testing: 2147483648, 0 ---
float(1.5707963267949)
--- testing: 2147483648, 1 ---
float(1.5707963263292)
--- testing: 2147483648, -1 ---
float(1.5707963272606)
--- testing: 2147483648, 7 ---
float(1.5707963235353)
--- testing: 2147483648, 9 ---
float(1.5707963226039)
--- testing: 2147483648, 65 ---
float(1.5707962965269)
--- testing: 2147483648, -44 ---
float(1.570796347284)
--- testing: 2147483648, 2147483647 ---
float(0.78539816363028)
--- testing: 2147483648, -2147483648 ---
float(2.3561944901923)
--- testing: 2147483648, 9223372036854775807 ---
float(2.3283064365387E-10)
--- testing: 2147483648, -9223372036854775808 ---
float(3.141592653357)
--- testing: -2147483649, 0 ---
float(-1.5707963267949)
--- testing: -2147483649, 1 ---
float(-1.5707963263292)
--- testing: -2147483649, -1 ---
float(-1.5707963272606)
--- testing: -2147483649, 7 ---
float(-1.5707963235353)
--- testing: -2147483649, 9 ---
float(-1.5707963226039)
--- testing: -2147483649, 65 ---
float(-1.5707962965269)
--- testing: -2147483649, -44 ---
float(-1.570796347284)
--- testing: -2147483649, 2147483647 ---
float(-0.78539816386311)
--- testing: -2147483649, -2147483648 ---
float(-2.3561944899595)
--- testing: -2147483649, 9223372036854775807 ---
float(-2.3283064376229E-10)
--- testing: -2147483649, -9223372036854775808 ---
float(-3.141592653357)
--- testing: 4294967294, 0 ---
float(1.5707963267949)
--- testing: 4294967294, 1 ---
float(1.5707963265621)
--- testing: 4294967294, -1 ---
float(1.5707963270277)
--- testing: 4294967294, 7 ---
float(1.5707963251651)
--- testing: 4294967294, 9 ---
float(1.5707963246994)
--- testing: 4294967294, 65 ---
float(1.5707963116609)
--- testing: 4294967294, -44 ---
float(1.5707963370394)
--- testing: 4294967294, 2147483647 ---
float(1.1071487177941)
--- testing: 4294967294, -2147483648 ---
float(2.034443935982)
--- testing: 4294967294, 9223372036854775807 ---
float(4.656612870909E-10)
--- testing: 4294967294, -9223372036854775808 ---
float(3.1415926531241)
--- testing: 4294967295, 0 ---
float(1.5707963267949)
--- testing: 4294967295, 1 ---
float(1.5707963265621)
--- testing: 4294967295, -1 ---
float(1.5707963270277)
--- testing: 4294967295, 7 ---
float(1.5707963251651)
--- testing: 4294967295, 9 ---
float(1.5707963246994)
--- testing: 4294967295, 65 ---
float(1.5707963116609)
--- testing: 4294967295, -44 ---
float(1.5707963370394)
--- testing: 4294967295, 2147483647 ---
float(1.1071487178872)
--- testing: 4294967295, -2147483648 ---
float(2.0344439358888)
--- testing: 4294967295, 9223372036854775807 ---
float(4.6566128719932E-10)
--- testing: 4294967295, -9223372036854775808 ---
float(3.1415926531241)
--- testing: 4294967293, 0 ---
float(1.5707963267949)
--- testing: 4294967293, 1 ---
float(1.5707963265621)
--- testing: 4294967293, -1 ---
float(1.5707963270277)
--- testing: 4294967293, 7 ---
float(1.5707963251651)
--- testing: 4294967293, 9 ---
float(1.5707963246994)
--- testing: 4294967293, 65 ---
float(1.5707963116609)
--- testing: 4294967293, -44 ---
float(1.5707963370394)
--- testing: 4294967293, 2147483647 ---
float(1.107148717701)
--- testing: 4294967293, -2147483648 ---
float(2.0344439360751)
--- testing: 4294967293, 9223372036854775807 ---
float(4.6566128698248E-10)
--- testing: 4294967293, -9223372036854775808 ---
float(3.1415926531241)
--- testing: 9223372036854775806, 0 ---
float(1.5707963267949)
--- testing: 9223372036854775806, 1 ---
float(1.5707963267949)
--- testing: 9223372036854775806, -1 ---
float(1.5707963267949)
--- testing: 9223372036854775806, 7 ---
float(1.5707963267949)
--- testing: 9223372036854775806, 9 ---
float(1.5707963267949)
--- testing: 9223372036854775806, 65 ---
float(1.5707963267949)
--- testing: 9223372036854775806, -44 ---
float(1.5707963267949)
--- testing: 9223372036854775806, 2147483647 ---
float(1.5707963265621)
--- testing: 9223372036854775806, -2147483648 ---
float(1.5707963270277)
--- testing: 9223372036854775806, 9223372036854775807 ---
float(0.78539816339745)
--- testing: 9223372036854775806, -9223372036854775808 ---
float(2.3561944901923)
--- testing: 9.2233720368548E+18, 0 ---
float(1.5707963267949)
--- testing: 9.2233720368548E+18, 1 ---
float(1.5707963267949)
--- testing: 9.2233720368548E+18, -1 ---
float(1.5707963267949)
--- testing: 9.2233720368548E+18, 7 ---
float(1.5707963267949)
--- testing: 9.2233720368548E+18, 9 ---
float(1.5707963267949)
--- testing: 9.2233720368548E+18, 65 ---
float(1.5707963267949)
--- testing: 9.2233720368548E+18, -44 ---
float(1.5707963267949)
--- testing: 9.2233720368548E+18, 2147483647 ---
float(1.5707963265621)
--- testing: 9.2233720368548E+18, -2147483648 ---
float(1.5707963270277)
--- testing: 9.2233720368548E+18, 9223372036854775807 ---
float(0.78539816339745)
--- testing: 9.2233720368548E+18, -9223372036854775808 ---
float(2.3561944901923)
--- testing: -9223372036854775807, 0 ---
float(-1.5707963267949)
--- testing: -9223372036854775807, 1 ---
float(-1.5707963267949)
--- testing: -9223372036854775807, -1 ---
float(-1.5707963267949)
--- testing: -9223372036854775807, 7 ---
float(-1.5707963267949)
--- testing: -9223372036854775807, 9 ---
float(-1.5707963267949)
--- testing: -9223372036854775807, 65 ---
float(-1.5707963267949)
--- testing: -9223372036854775807, -44 ---
float(-1.5707963267949)
--- testing: -9223372036854775807, 2147483647 ---
float(-1.5707963265621)
--- testing: -9223372036854775807, -2147483648 ---
float(-1.5707963270277)
--- testing: -9223372036854775807, 9223372036854775807 ---
float(-0.78539816339745)
--- testing: -9223372036854775807, -9223372036854775808 ---
float(-2.3561944901923)
--- testing: -9.2233720368548E+18, 0 ---
float(-1.5707963267949)
--- testing: -9.2233720368548E+18, 1 ---
float(-1.5707963267949)
--- testing: -9.2233720368548E+18, -1 ---
float(-1.5707963267949)
--- testing: -9.2233720368548E+18, 7 ---
float(-1.5707963267949)
--- testing: -9.2233720368548E+18, 9 ---
float(-1.5707963267949)
--- testing: -9.2233720368548E+18, 65 ---
float(-1.5707963267949)
--- testing: -9.2233720368548E+18, -44 ---
float(-1.5707963267949)
--- testing: -9.2233720368548E+18, 2147483647 ---
float(-1.5707963265621)
--- testing: -9.2233720368548E+18, -2147483648 ---
float(-1.5707963270277)
--- testing: -9.2233720368548E+18, 9223372036854775807 ---
float(-0.78539816339745)
--- testing: -9.2233720368548E+18, -9223372036854775808 ---
float(-2.3561944901923)
===DONE===
