<?php
class Chien {
    private $nom;
    private $race;

    const ESPECE = "Canis lupus familiaris";

    public function __construct($nom, $race) {
        $this->nom = $nom;
        $this->race = $race;
    }

    public function sePresenter() {
        return "Je suis " . $this->nom . ", un " . $this->race;
    }
}
?>
