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
Chaque instruction se termine par un `;`.
 
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



Étape 7
------

__Objectif__ : Récupérer la valeur des cases à cocher

__Exemple__ : [code](step7.php) | [résultat](http://php.baddum.com/jour1/step7.php)

__Ce que l'on retient__ :

Je peux récupérer l'état du formulaire HTML en PHP, après sa validation. Pour cela, je vais utiliser la variable `$_GET`.
Il s'agit d'une variable réservé par PHP, nous n'avons pas besoin de la déclarer.
On peut trouver sa documentation ici : http://php.net/manual/fr/reserved.variables.get.php

La variable `$_GET` contient un tableau. On peut l'afficher à l'aide de l'instruction `print_r($_GET)`.
L'instruction `echo` utilisé précédement pour afficher du texte, est peu utile pour visualiser le contenu d'un tableau. 

Les tableaux en PHP associent des valeurs à des noms (aussi appeler clés).
Par exemple, un tableau de notes d'élèves ressemblerait à ça : `Array ( [Markus] => 12 [Chaïma] => 18 )`.
On associe alors des notes (les valeurs) aux noms des élèves (les clés). 

Dans notre TP, on associe la valeur du dé au numéro du dé.
Par exemple, on associe 5 (la valeur du dé) à la clé `dice1` dans le tableau suivant :  
`Array ( [dice1] => 5 [dice2] => 6 [dice3] => 5 [dice4] => 5 )`.



Étape 8
------

__Objectif__ : Conserver la valeur des dés dont les cases ont été cochées

__Exemple__ : [code](step8.php) | [résultat](http://php.baddum.com/jour1/step8.php)

__Ce que l'on retient__ :

Les instructions `if` / `else` permet d'ajouter des conditions.

```php
if (condition) {
    faire ceci si la condition est vrai;
} else {
    sinon faire cela;
}
```

Pour accéder à une valeur dans un tableau j'utilise la notation suivante `$tableau['clé']`.
Dans notre cas, pour accéder à la valeur du dé numéro 4 nous devons écrire `$_GET['dice4']`.

Pour savoir si une clé existe dans un tableau, on peut utiliser la fonction `isset($tableau['clé'])`.
Cette fonction renvoie vrai si la clé existe dans le tableau et faux si elle n'existe pas.

La condition `if ( isset($_GET['dice4']) )` revient à tester si la case du dé numéro 4 a été cochée.
Cette condition revient donc à tester si l'on souhaite conserver le dé numéro 4 au prochain lancé.



Étape 9
------

__Objectif__ : Conserver la valeur des case à cocher entre chaque lancé

__Exemple__ : [code](step9.php) | [résultat](http://php.baddum.com/jour1/step9.php)

__Ce que l'on retient__ :

La structure du HTML généré en PHP est importante.

Il est important de régulièrement regarder la source des pages HTML que l'on produit



Étape 10
------

__Objectif__ : Utiliser un tableau pour conserver la valeur de nos dés

__Exemple__ : [code](step10.php) | [résultat](http://php.baddum.com/jour1/step10.php)

__Ce que l'on retient__ :

Si l'on souhaite ajouter un numéro à notre variable, comme dans le cas de `dice2`, c'est potentiellement un signe qu'utiliser un tableau serait plus pratique.

Pour déclarer un nouveau tableau, on écrit : `$variable = array();`.

Pour déclarer une nouvelle paire de clé et valeur dans un tableau existant, on écrit : `$variable['clé'] = 'valeur';`. 



Étape 11
------

__Objectif__ : Utiliser une boucle pour générer l'affichage du lancé de dé.

__Exemple__ : [code](step11.php) | [résultat](http://php.baddum.com/jour1/step11.php)

__Ce que l'on retient__ :

L'instruction `foreach()` permet de boucler sur un tableau, c'est à dire d'exécuter certaines instructions pour chaque clé et valeur d'un tableau.

Par exemple : 

```php
foreach ($tableau as $clé => $valeur) {
    // L'instruction ci-dessous va être exécutée plusieurs fois
    // A chaque fois la variable $valeur contiendra une valeur différente contenu dans le tableau
    echo $valeur;
}
// Ce code affiche donc toutes les valeurs contenu dans le tableau $tableau 
``` 