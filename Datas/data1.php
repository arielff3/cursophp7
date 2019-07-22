<?php

// echo date("d/M/Y H:i:s F e ");
// echo"<br>";

// echo time();

// $ts = strtotime("2001-09-11");
$ts = strtotime("+1 day");

echo date("l, d/m/Y", $ts);