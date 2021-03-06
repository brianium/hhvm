<?php

/* Integer */
$data = "-123";   var_dump(filter_var($data, FILTER_VALIDATE_INT));
$data = "0";      var_dump(filter_var($data, FILTER_VALIDATE_INT));
$data = "-0";     var_dump(filter_var($data, FILTER_VALIDATE_INT));
$data = "+0";     var_dump(filter_var($data, FILTER_VALIDATE_INT));
$data = "123";    var_dump(filter_var($data, FILTER_VALIDATE_INT));
$data = -123;     var_dump(filter_var($data, FILTER_VALIDATE_INT));
$data = 0;        var_dump(filter_var($data, FILTER_VALIDATE_INT));
$data = -0;        var_dump(filter_var($data, FILTER_VALIDATE_INT));
$data = +0;        var_dump(filter_var($data, FILTER_VALIDATE_INT));
$data = 123;      var_dump(filter_var($data, FILTER_VALIDATE_INT));
$data = "";       var_dump(filter_var($data, FILTER_VALIDATE_INT));
echo "\n";

/* Float */
$data = "-0.123"; var_dump(filter_var($data, FILTER_VALIDATE_FLOAT));
$data = "0.00";   var_dump(filter_var($data, FILTER_VALIDATE_FLOAT));
$data = "1.23";   var_dump(filter_var($data, FILTER_VALIDATE_FLOAT));
$data = -1.23;    var_dump(filter_var($data, FILTER_VALIDATE_FLOAT));
$data = 0.0;      var_dump(filter_var($data, FILTER_VALIDATE_FLOAT));
$data = 1.23;     var_dump(filter_var($data, FILTER_VALIDATE_FLOAT));
$data = "";       var_dump(filter_var($data, FILTER_VALIDATE_FLOAT));
echo "\n";

/* Boolean */
$data = "on";     var_dump(filter_var($data, FILTER_VALIDATE_BOOLEAN));
$data = "off";    var_dump(filter_var($data, FILTER_VALIDATE_BOOLEAN));
$data = "yes";    var_dump(filter_var($data, FILTER_VALIDATE_BOOLEAN));
$data = "no";     var_dump(filter_var($data, FILTER_VALIDATE_BOOLEAN));
$data = "true";   var_dump(filter_var($data, FILTER_VALIDATE_BOOLEAN));
$data = "false";  var_dump(filter_var($data, FILTER_VALIDATE_BOOLEAN));
$data = "1";      var_dump(filter_var($data, FILTER_VALIDATE_BOOLEAN));
$data = "0";      var_dump(filter_var($data, FILTER_VALIDATE_BOOLEAN));
$data = 1;        var_dump(filter_var($data, FILTER_VALIDATE_BOOLEAN));
$data = 0;        var_dump(filter_var($data, FILTER_VALIDATE_BOOLEAN));
$data = true;     var_dump(filter_var($data, FILTER_VALIDATE_BOOLEAN));
$data = false;    var_dump(filter_var($data, FILTER_VALIDATE_BOOLEAN));
$data = "";       var_dump(filter_var($data, FILTER_VALIDATE_BOOLEAN));

?>