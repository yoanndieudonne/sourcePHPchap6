<html>
<body>
<?php
class CompteBancaire {
    private $titulaire;
    private $solde;

    public function __construct($titulaire, $soldeInitial) {
        $this->titulaire = $titulaire;
        // Validation : le solde initial ne peut pas etre negatif
        if ($soldeInitial < 0) {
            $this->solde = 0;
        } else {
            $this->solde = $soldeInitial;
        }
    }

    // Getter pour le titulaire
    public function getTitulaire() {
        return $this->titulaire;
    }

    // Getter pour le solde
    public function getSolde() {
        return $this->solde;
    }

    // Setter avec validation
    public function deposer($montant) {
        if ($montant > 0) {
            $this->solde += $montant;
        } else {
            echo "Montant invalide !<br>";
        }
    }

    public function retirer($montant) {
        if ($montant > 0 && $montant <= $this->solde) {
            $this->solde -= $montant;
        } else {
            echo "Retrait impossible !<br>";
        }
    }
}

$compte = new CompteBancaire("Dupont", 1000);
echo "Titulaire : " . $compte->getTitulaire() . "<br>";
echo "Solde initial : " . $compte->getSolde() . "<br>";

$compte->deposer(500);
echo "Apres depot de 500 : " . $compte->getSolde() . "<br>";

$compte->retirer(200);
echo "Apres retrait de 200 : " . $compte->getSolde() . "<br>";

// Tentative d'acces direct : impossible !
// echo $compte->solde;  // ERREUR : Cannot access private property
$compte->deposer(-100);  // Affiche : Montant invalide !
$compte->retirer(5000);  // Affiche : Retrait impossible !
?>
</body>
</html>
