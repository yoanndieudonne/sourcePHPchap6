<html>
<body>
<?php
require 'Chien.php';

$chien = new Chien("Rex", "Berger allemand");
echo $chien->sePresenter() . "<br>";
echo "Espece : " . Chien::ESPECE . "<br>";
?>
</body>
</html>
