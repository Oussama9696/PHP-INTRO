<!doctype html>
<html>
<body>
<?php
function ex6( string $nom, string $prenom, string $age) : string {
return "Bonjour $nom $prenom, tu as $age ans.";
}
echo ex6("oussama","hammouri","24");
?>
</body>
</html>