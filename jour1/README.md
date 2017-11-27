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

On dit que le texte d'avant était statique, car le contenu de la page était pré-défini.

Avec PHP, on dit que le texte est dynamique, car le contenu sera calculé à chaque accès à la page.


Un exemple de texte augmenté par PHP : [code](step2.php) | [résultat](http://php.baddum.com/jour1/step2.php)


