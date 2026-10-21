<html>
<body>
<?php
interface Affichable {
    public function afficher();
}

interface Serialisable {
    public function serialiser();
}

class Article implements Affichable, Serialisable {
    private $titre;
    private $contenu;

    public function __construct($titre, $contenu) {
        $this->titre = $titre;
        $this->contenu = $contenu;
    }

    // Implementation de Affichable::afficher()
    public function afficher() {
        return "Titre : " . $this->titre;
    }

    // Implementation de Serialisable::serialiser()
    public function serialiser() {
        return json_encode(["titre" => $this->titre, "contenu" => $this->contenu]);
    }
}

$article = new Article("Introduction a la POO", "Le contenu de l'article...");
echo $article->afficher() . "<br>";
echo $article->serialiser() . "<br>";
?>
</body>
</html>
