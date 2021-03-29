<!doctype html>
<html>
<body>
<?php
$mois=array("janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre");
$arrlength = count($mois);
for($x = 0; $x < $arrlength; $x++) {
    echo $mois[$x];
    echo "</br>";
}

?>
</body>
</html>