<html>
<body>
<?php
// Classe abstraite : ne peut pas etre instanciee
abstract class Forme {
    protected $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function getNom() {
        return $this->nom;
    }

    // Methode abstraite : les classes filles DOIVENT l'implementer
    abstract public function aire();
}

class Rectangle extends Forme {
    private $largeur;
    private $hauteur;

    public function __construct($largeur, $hauteur) {
        parent::__construct("Rectangle");
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    // Implementation de la methode abstraite
    public function aire() {
        return $this->largeur * $this->hauteur;
    }
}

class Cercle extends Forme {
    private $rayon;

    public function __construct($rayon) {
        parent::__construct("Cercle");
        $this->rayon = $rayon;
    }

    public function aire() {
        return M_PI * $this->rayon ** 2;
    }
}

$rect = new Rectangle(4, 5);
$cercle = new Cercle(3);

echo $rect->getNom() . " : aire = " . $rect->aire() . "<br>";
echo $cercle->getNom() . " : aire = " . round($cercle->aire(), 2) . "<br>";

// Impossible : Forme est abstraite
// $forme = new Forme("test"); // ERREUR
?>
</body>
</html>
