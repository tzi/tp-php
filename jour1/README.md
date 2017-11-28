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

Un texte classique, est déjà un code PHP valide.

Un exemple de "Hello world!" : [code](step1.php) | [résultat](http://php.baddum.com/jour1/step1.php)


Étape 2
------

On peut utiliser PHP pour augmenter le texte précédent.
Pour cela on utilise les balises :

 * `<?php` pour expliciter le début d'une zone de code PHP
 * `?>` pour expliciter la fin d'une sone de code PHP
 
Le code se trouvant dans une zone de code PHP ne sera pas affiché tel quel à l'utilisateur.
Il ne servira qu'à donner des instructions.
 
Nos premières instructions vont être :

 * `$variable = 'value'` est assignation, on va conserver `'valeur'` dans la variable `$variable`
 * `echo $variable` permet d'afficher le contenu de la variable `$variable`


Un exemple de texte augmenté par PHP : [code](step2.php) | [résultat](http://php.baddum.com/jour1/step2.php)



Étape 3
------

PHP vient avec de nombreuses fonctions pour nous simplifier le travail.
Il est difficile de les connaître toutes par coeur, mais on peut retrouver la liste complète ici : http://php.net/manual/fr/funcref.php

Il existe notament des fonctions pour choisir des nombres aléatoirement.
C'est ce dont on a besoin pour réaliser notre premier lancé de dé. 

Un exemple de lancé de dé : [code](step3.php) | [résultat](http://php.baddum.com/jour1/step3.php)



Étape 4
------

Si PHP peut augmenter du texte, il est le plus souvent utilisé pour augmenter de l'HTML.

D'ailleurs PHP veut dire "PHP: Hypertext Preprocessor".

En ajoutant un formulaire HTML à notre page, on peut faciliter le rechargement et donc le fait de relancer notre dé.
 
Un exemple de HTML augmenté par PHP : [code](step4.php) | [résultat](http://php.baddum.com/jour1/step4.php)


