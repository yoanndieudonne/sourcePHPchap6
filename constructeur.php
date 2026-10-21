<html>
<body>
<?php
class Chien {
    public $nom;
    public $race;

    // Constructeur : appele automatiquement par new
    public function __construct($nom, $race) {
        $this->nom = $nom;
        $this->race = $race;
    }

    public function sePresenter() {
        return "Je suis " . $this->nom . ", un " . $this->race;
    }
}

// Creation d'objets avec initialisation immediate
$chien1 = new Chien("Rex", "Berger allemand");
$chien2 = new Chien("Bella", "Labrador");

echo $chien1->sePresenter() . "<br>";
echo $chien2->sePresenter() . "<br>";
?>
</body>
</html>
