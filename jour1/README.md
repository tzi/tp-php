PHP - Jour 1
======

Pour découvrir comment fonctionne PHP, vous allez suivre la démarche d'un développeur pour développer un jeu de Yam's.

Les règles du jeu seront :

 * Le joueur a 5 dés
 * La somme de ses dés représente son score
 * Le joueur peut choisir de relancer les dés de son choix
 * Le joueur a 5 lancés pour réaliser le score le plus élevé



Étape 1
------

__Objectif__ : Afficher du texte simple

__Exemple__ : [code](step1.php) | [résultat](http://php.baddum.com/jour1/step1.php)

__Ce que l'on retient__ :

Un texte classique est déjà un code PHP valide.



Étape 2
------

__Objectif__ : Utiliser PHP pour construire ce texte

__Exemple__ : [code](step2.php) | [résultat](http://php.baddum.com/jour1/step2.php)

__Ce que l'on retient__ :

On peut utiliser PHP pour augmenter du texte simple.
Pour cela on utilise les balises :

 * `<?php` pour expliciter le début d'une zone de code PHP
 * `?>` pour expliciter la fin d'une sone de code PHP
 
Le code se trouvant dans une zone de code PHP ne sera pas affiché à l'utilisateur.
Il servira à donner des instructions.
 
Nos premières instructions sont :

 * `$variable = 'value'` pour déclarer une variable, ici on conserve le texte `'valeur'` dans la variable `$variable`
 * `echo $variable` permet d'afficher le contenu de la variable `$variable`, ici ce sera donc `valeur'.



Étape 3
------

__Objectif__ : Donner le résultat d'un lancé de dé

__Exemple__ : [code](step3.php) | [résultat](http://php.baddum.com/jour1/step3.php)

__Ce que l'on retient__ :

PHP vient avec de nombreuses fonctions pour nous simplifier le travail.
Il est difficile de les connaître toutes par coeur, mais on peut retrouver la liste complète ici : http://php.net/manual/fr/funcref.php

Il existe notament des fonctions pour choisir des nombres aléatoirement.
C'est ce qu'on a utilisé pour réaliser notre premier lancé de dé.



Étape 4
------

__Objectif__ : Ajouter un bouton pour recharger la page

__Exemple__ : [code](step4.php) | [résultat](http://php.baddum.com/jour1/step4.php)

__Ce que l'on retient__ :

Si PHP peut augmenter du texte, il est le plus souvent utilisé pour augmenter de l'HTML.

D'ailleurs PHP veut dire "PHP: Hypertext Preprocessor".

En ajoutant un formulaire HTML à notre page, on facilite le rechargement et donc le fait de relancer notre dé.



Étape 5
------

__Objectif__ : Lancer 5 dés

__Exemple__ : [code](step5.php) | [résultat](http://php.baddum.com/jour1/step5.php)

__Ce que l'on retient__ :

Avec nos connaissances actuelles, la méthode la plus simple est de créer 5 variables.



Étape 6
------

__Objectif__ : Ajouter des cases à cocher, elles serviront plus tard à déterminer quels dés conserver entre deux lancés

__Exemple__ : [code](step6.php) | [résultat](http://php.baddum.com/jour1/step6.php)

__Ce que l'on retient__ :

Les champs de formulaires HTML `<input>` vont permettre à l'utilisateur d'interagir avec la page.
Pour faire une case à cocher il faut que je précise le type de champs de formulaire à l'aide de l'attribut `type` : `<input type="checkbox" />`.

Je peux récupérer l'état du formulaire HTML en PHP, après sa validation. Pour cela, je vais utiliser la variable `$_GET`.
Il s'agit d'une variable réservé par PHP, nous n'avons pas besoin de la déclarer.
On peut trouver sa documentation ici : http://php.net/manual/fr/reserved.variables.get.php

La variable `$_GET` contient un tableau. On peut l'afficher à l'aide de l'instruction `print_r($_GET)`.
L'instruction `echo` est peu utile lorsque l'on souhaite afficher le contenu d'un tableau.


