<?php

$questions = [
    "Dans quel manga trouve-t-on Monkey D. Luffy ?\n1. Naruto\n2. One Piece\n3. Bleach\n",
    "Qui est le rival principal de Naruto Uzumaki ?\n1. Gaara\n2. Sasuke\n3. Kakashi\n",
    "Quel est le pouvoir principal de Goku dans Dragon Ball ?\n1. Rasengan\n2. Kamehameha\n3. Sharingan\n",
    "Quel est le sport dans Haikyuu!! ?\n1. Football\n2. Volley-ball\n3. Basket-ball\n",
    "Qui est le tueur dans Death Note ?\n1. L\n2. Light Yagami\n3. Misa Amane\n",
    "Dans quel manga trouve-t-on les Titans ?\n1. One Piece\n2. Dragon Ball\n3. L’Attaque des Titans\n",
    "Quel est le démon scellé en Naruto ?\n1. Kurama\n2. Ryuk\n3. Zoro\n",
    "Dans My Hero Academia, le héros principal s'appelle ?\n1. Izuku Midoriya\n2. Asta\n3. Tanjiro Kamado\n",
    "Quel manga parle d’un gamin devenu roi des pirates ?\n1. Naruto\n2. One Piece\n3. Fairy Tail\n",
    "Dans quel manga les personnages utilisent des cartes ?\n1. Yu-Gi-Oh!\n2. Bleach\n3. One Punch Man\n",
    "Qui est l'auteur de Berserk ?\n1. Akira Toriyama\n2. Kentaro Miura\n3. Masashi Kishimoto\n",
    "Quel manga parle de chasseurs et de nen ?\n1. Hunter x Hunter\n2. Death Note\n3. Dragon Ball\n",
    "Dans Demon Slayer, qui est la sœur de Tanjiro ?\n1. Misa\n2. Mikasa\n3. Nezuko\n",
    "Quel manga suit un détective surdoué et un carnet de mort ?\n1. One Piece\n2. Death Note\n3. Jujutsu Kaisen\n",
    "Dans One Punch Man, quel est le pouvoir de Saitama ?\n1. Vitesse\n2. Télékinésie\n3. Force illimitée\n",
    "Quel manga a des Shinigamis comme personnages centraux ?\n1. Bleach\n2. Naruto\n3. One Piece\n",
    "Quel est le nom du village de Naruto ?\n1. Suna\n2. Konoha\n3. Kyoto\n",
    "Qui est le capitaine du vaisseau Bebop dans Cowboy Bebop ?\n1. Jet Black\n2. Spike Spiegel\n3. Vicious\n",
    "Dans quel manga les stands apparaissent ?\n1. JoJo’s Bizarre Adventure\n2. Bleach\n3. Fairy Tail\n",
    "Quel personnage a une cicatrice en forme de croix sur la joue ?\n1. Levi\n2. Gintoki\n3. Kenshin Himura\n"
];

$reponses = [2, 2, 2, 2, 2, 3, 1, 1, 2, 1, 2, 1, 3, 2, 3, 1, 2, 1, 1, 3];
$score = 0;
$NB_QUESTIONS = count($questions);

for ($i = 0; $i < $NB_QUESTIONS; $i++) { 
    echo "====================================================\n";
    echo "              Quiz Culture Mangas ?!                 \n";
    echo "====================================================\n\n";
    echo "Score actuel : $score\n\n";

    echo $questions[$i];
    echo "Votre réponse (entrez le numéro) : ";
    $choix = trim(fgets(STDIN)); 

    if ((int)$choix === $reponses[$i]) { 
        echo " Bonne réponse ! +10 points\n\n";
        $score += 10;
    } else {
        echo " Mauvaise réponse. La bonne réponse était : " . $reponses[$i] . "\n\n";
    }
}

echo "=======================================================\n";
echo "                    FIN DU QUIZ                        \n";
echo "=======================================================\n\n";

echo "Score final : $score / " . ($NB_QUESTIONS * 10) . "\n"; 
$pourcentage = ($score / ($NB_QUESTIONS * 10)) * 100; 
echo "Taux de réussite : " . round($pourcentage, 2) . "%\n"; // Affiche le pourcentage avec % (round : arrondit à 2 chiffres après la virgule.

if ($pourcentage > 50) {
    echo " Bravo ! Vous avez gagné !\n";
} else {
    echo " Dommage, vous avez perdu...\n";
}

round($pourcentage,2);