<?php
date_default_timezone_set("Brazil/East");
$epoch = time();
$epoch = date("d-m-o G:i:s", $epoch);
echo $epoch;