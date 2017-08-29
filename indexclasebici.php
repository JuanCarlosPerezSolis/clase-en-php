<?php

require("clasebicicletas.php");

$bici = new clasebicicletas("Negra","Carrera","Grande","Negras","Si","Gomas","Normal","Piel");

echo "BICICLETA";
echo "<br>";
echo "Color:".$bici->getColordebici();
echo "<br>";
echo "Tipo:".$bici->getTipodebici();
echo "<br>";
echo "Tamaño:".$bici->getTamaño();
echo "<br>";
echo "Color de llantas:".$bici->getColorllantas();
echo "<br>";
echo "Tiene cambios:".$bici->getTienecambios();
echo "<br>";
echo "Tipo de frenado:".$bici->getTipodefreno();
echo "<br>";
echo "Tipo de manubio:".$bici->getTipodemanubio();
echo "<br>";
echo "Material de asiento:".$bici->getMaterialdelasiento();


?>