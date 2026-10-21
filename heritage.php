<html>
<body>
<?php
class Animal {
    protected $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function sePresenter() {
        return "Je suis " . $this->nom;
    }

    public function parler() {
        return "Je fais un bruit d'animal";
    }
}

class Chien extends Animal {
    private $race;

    public function __construct($nom, $race) {
        // Appel du constructeur de la classe mere
        parent::__construct($nom);
        $this->race = $race;
    }

    // Redefinition (override) de la methode parler()
    public function parler() {
        return "Je fais Wouf ! Wouf !";
    }

    // Nouvelle methode specifique a Chien
    public function allerChercher() {
        return $this->nom . " va chercher la balle !";
    }
}

class Chat extends Animal {
    public function parler() {
        return "Je fais Miaou !";
    }
}

$chien = new Chien("Rex", "Berger allemand");
$chat = new Chat("Minou");

echo $chien->sePresenter() . "<br>";   // Methode heritee de Animal
echo $chien->parler() . "<br>";        // Methode redefinie dans Chien
echo $chien->allerChercher() . "<br>"; // Methode specifique a Chien
echo "<br>";
echo $chat->sePresenter() . "<br>";    // Methode heritee de Animal
echo $chat->parler() . "<br>";         // Methode redefinie dans Chat
?>
</body>
</html>
