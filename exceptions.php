<html>
<body>
<?php
class CompteBancaire {
    private $titulaire;
    private $solde;

    public function __construct($titulaire, $soldeInitial) {
        if ($soldeInitial < 0) {
            // On leve une exception au lieu de mettre le solde a 0
            throw new Exception("Le solde initial ne peut pas etre negatif.");
        }
        $this->titulaire = $titulaire;
        $this->solde = $soldeInitial;
    }

    public function retirer($montant) {
        if ($montant <= 0) {
            throw new Exception("Le montant doit etre strictement positif.");
        }
        if ($montant > $this->solde) {
            throw new Exception("Solde insuffisant pour ce retrait.");
        }
        $this->solde -= $montant;
    }
}

// 1. Utilisation normale (tout se passe bien)
try {
    $compte = new CompteBancaire("Alice", 1000);
    $compte->retirer(200);
    echo "Retrait de 200 euros effectue avec succes.<br>";
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . "<br>";
}

// 2. Gestion d'une erreur (retrait superieur au solde)
try {
    $compte2 = new CompteBancaire("Bob", 50);
    $compte2->retirer(100); // Va lever une exception
    echo "Cette ligne ne sera jamais executee.<br>";
} catch (Exception $e) {
    echo "Erreur pour Bob : " . $e->getMessage() . "<br>";
}

// 3. Gestion d'une erreur a la creation
try {
    $compte3 = new CompteBancaire("Charlie", -50);
} catch (Exception $e) {
    echo "Erreur pour Charlie : " . $e->getMessage() . "<br>";
}
?>
</body>
</html>
