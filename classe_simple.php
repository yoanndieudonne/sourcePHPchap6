<html>
<body>
<?php
class Chien {
    // Proprietes
    public $nom;
    public $race;

    // Methode
    public function sePresenter() {
        return "Je suis " . $this->nom . ", un " . $this->race;
    }
}

// Creation de deux objets (instances) de la classe Chien
$chien1 = new Chien();
$chien1->nom = "Rex";
$chien1->race = "Berger allemand";

$chien2 = new Chien();
$chien2->nom = "Bella";
$chien2->race = "Labrador";

// Appel des methodes
echo $chien1->sePresenter() . "<br>";
echo $chien2->sePresenter() . "<br>";

// Les deux objets sont independants
echo "chien1 et chien2 sont-ils le meme objet ? ";
echo ($chien1 === $chien2) ? "oui" : "non";
?>
</body>
</html>
