<html>
<body>
<?php
class CompteurObjets {
    // Propriete statique : commune a toutes les instances
    private static $nombreInstances = 0;

    // Constante de classe
    const MAX_INSTANCES = 100;

    public function __construct() {
        self::$nombreInstances++;
        if (self::$nombreInstances > self::MAX_INSTANCES) {
            echo "Limite depassee !<br>";
        }
    }

    // Methode statique : accessible sans instance
    public static function getNombreInstances() {
        return self::$nombreInstances;
    }
}

echo "Avant creation : " . CompteurObjets::getNombreInstances() . "<br>";

$obj1 = new CompteurObjets();
$obj2 = new CompteurObjets();
$obj3 = new CompteurObjets();

echo "Apres creation de 3 objets : " . CompteurObjets::getNombreInstances() . "<br>";
echo "Maximum autorise : " . CompteurObjets::MAX_INSTANCES . "<br>";
?>
</body>
</html>
