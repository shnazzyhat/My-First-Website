<?php

$google = file_get_contents("http://google.com");

echo str_ireplace("google", "liam", $google);

?>