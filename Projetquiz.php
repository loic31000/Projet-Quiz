<?php

$questions = [
    "Quelle est la couleur du cheval blanc d'Henri IV?\n1. Blanc\n2. Rouge\n3. Noir\n",
    "Date de la prise de la Bastille ?\n1. 1750\n2. 1789\n3. 1800\n",
    "Quel est le plus grand océan du monde ?\n1. Océan Atlantique\n2. Océan Indien\n3. Océan Pacifique\n",
    "Qui a écrit Les Misérables ?\n1. Victor Hugo\n2. Emile Zola\n3. Marcel Proust\n",
    "Quelle est la capitale de l'Australie ?\n1. Sydney\n2. Melbourne\n3. Canberra\n"
];

$reponses = [1, 2, 3, 1, 3]; 
$score = 0;
$NB_QUESTIONS = count($questions);

if (file_exists("Pourcentage.txt")) {
    echo "###########################################################\n";
    echo file_get_contents("Pourcentage.txt");
}

                                                              
                                                              
                                                              
for ($i = 0; $i < $NB_QUESTIONS; $i++) {  // Commence à la première question ($i = 0). Continue jusqu’à la dernière ($i < $NB_QUESTIONS). Incrémente $i avec $i++ à chaque tour pour passer à la suivante.
    echo "###########################################################\n"; 
    echo "######## Qui veut gagner des millions ?! ##################\n"; 
    echo "###########################################################\n\n";
    echo "##############  Score actuel : $score. #########################\n";
    echo "###########################################################\n";
    
    echo $questions[$i];
    echo "Votre réponse (entrez le numéro) : ";
    $choix = trim(fgets(STDIN));

    if ((int)$choix === $reponses[$i]) {  // fgets(STDIN) lit du texte, donc on doit le convertir en entier pour comparer à $reponses[$i], qui lui est un nombre.
        echo " Bonne réponse ! +10 points\n\n";
        $score += 10;
    } else {
        echo " Mauvaise réponse. La bonne réponse était : " . $reponses[$i] . "\n\n";
    }
}

echo "###################################################\n";
echo "################### FIN DU JEU ####################\n";
echo "###################################################\n\n";

echo "Score final : $score / " . ($NB_QUESTIONS * 10) . "\n"; // affiche le score final.
$pourcentage = ($score / ($NB_QUESTIONS * 10)) * 100; // Calcule le pourcentage.
echo "Taux de réussite : " . round($pourcentage, 2) . "%\n"; // Affiche le pourcentage avec % (round : arrondit à 2 chiffres après la virgule.

if ($pourcentage > 50) {
    echo " Bravo ! Vous avez gagné !\n";
} else {
    echo " Dommage, vous avez perdu...\n";
}

$fichier = fopen("Pourcentage.txt", "w+"); // Ouvre en écriture, crée le fichier s'il n'existe pas
fwrite( $fichier,"Votre dernier pourcentage de bonne réponse est de : $pourcentage\n");
fclose($fichier);

