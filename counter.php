<?php

$file = fopen("./count.txt";"r");
$count = fgets($file,1000);

$count=$count+1;
echo "$count"
fwrite($file,$count);
fclose($file);

?>
