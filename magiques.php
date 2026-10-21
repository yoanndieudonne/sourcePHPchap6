<html>
<body>
<?php
class Livre {
    private $titre;
    private $auteur;
    private $anneeParution;

    public function __construct($titre, $auteur, $anneeParution) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->anneeParution = $anneeParution;
        echo "Le livre \"$titre\" a ete cree.<br>";
    }

    // Appelee quand on utilise l'objet comme une chaine
    public function __toString() {
        return "$this->titre de $this->auteur ($this->anneeParution)";
    }

    // Appelee quand l'objet est detruit
    public function __destruct() {
        echo "Le livre \"$this->titre\" a ete detruit.<br>";
    }
}

$livre = new Livre("1984", "George Orwell", 1949);

// __toString() est appelee automatiquement par echo
echo $livre . "<br>";

// Le destructeur sera appele a la fin du script
?>
</body>
</html>
