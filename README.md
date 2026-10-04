# Projet Quiz

<p align="center">
  <img src="https://img.shields.io/badge/PHP-CLI-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
</p>

Projet d'exercices PHP en ligne de commande autour d'un système de quiz, du calcul de score et du calcul d'un taux de réussite.

## Fonctionnement

Le dépôt contient deux quiz distincts :

- `Projetquiz.php` : 5 questions de culture générale ;
- `Projetquiz2.php` : 20 questions sur les mangas et les animes ;
- chaque bonne réponse ajoute 10 points ;
- le score final et le pourcentage de réussite sont affichés en fin de partie ;
- `Projetquiz.php` enregistre le dernier pourcentage dans `Pourcentage.txt`.

## Structure

```text
Projet-Quiz/
├── Projetquiz.php
├── Projetquiz2.php
├── Pourcentage.txt
└── README.md
```

## Lancement

Prérequis : PHP avec accès à la ligne de commande.

```bash
git clone https://github.com/loic31000/Projet-Quiz.git
cd Projet-Quiz
php Projetquiz.php
```

Pour lancer le quiz manga :

```bash
php Projetquiz2.php
```

Les réponses sont saisies directement dans le terminal avec leur numéro.

## État du projet

Projet pédagogique centré sur les tableaux PHP, les boucles, les conditions, la lecture depuis `STDIN`, les calculs et une première écriture dans un fichier texte.
