<?php
$file = fopen("register.xml", 'a') or die("Error");
fwrite($file, "<tr><td>".$_POST["name"]."</td>");
fwrite($file, "<td>".$_POST["roll"]."</td>");
fwrite($file, "<td>".$_POST["room"]."</td>");
fwrite($file, "<td>".$_POST["complain"]."</td></tr>");
fclose($file);

header("Location: thank.htm");
?>


