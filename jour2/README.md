PHP - Jour 2
======

Le but de cette deuxième journée est que vous vous approrier la démarche de développement vu dans le premier TP.

Pour cela vous allez devoir développer un jeu très simple :

 * Le joueur doit deviner un nombre tiré au sort
 * Le site web lui indique s'il le nombre est plus grand ou plus petit
 * Le joueur a un nombre maximum d'essais
 
Quelques consignes : 
 * Je vous recommande d'utiliser la plate-forme [PhpFiddle](http://phpfiddle.org).
 * Pour se concentrer sur le PHP et l'HTML, nous ne ferons donc pas de CSS et JavaScript ici.



Étape 1
------

__Objectif__ : Créer le formulaire pour proposer une réponse

__Exemple__ : [résultat](http://php.baddum.com/jour2/step1.php)

__Les indications__ :

Vous n'avez pas besoin de PHP pour cette étape, vos connaissances en HTML doivent suffire.

Vous devez utiliser les balises suivantes :

 * Une balise `form`
 * Une balise `input` de type `number` qui porte le nom `guess`
 * Une balise `button`



Étape 2
------

__Objectif__ : Afficher la réponse proposée par le joueur, s'il y en a une !

__Exemple__ : [résultat](http://php.baddum.com/jour2/step2.php)

__Les indications__ :

Pour cela vous aurez besoin des éléments suivants : 

 * L'instruction `if ()`
 * La fonction `isset()`
 * La variables réservée `$_GET`
 * L'instruction `echo`



Étape 3
------

__Objectif__ : Tirer au hasard un nombre entre 1 et 3, et vérifier la réponse proposée par le joueur

__Exemple__ : [résultat](http://php.baddum.com/jour2/step3.php)

__Les indications__ :

Vous devez afficher un message à l'utilisateur pour lui indiquer s'il a trouvé ou non, le nombre tiré aléatoirement. 
 
Pour cela vous aurez besoin des éléments suivants :

 * La fonction `mt_rand()` 
 * Faire une déclaration de variable
 * Les instructions `if` et `else`

Vous aurez également besoin de l'opérateur de comparaison d'égalité `==`.
Cette opérateur permet de comparer du texte comme des nombres.
Voici un exemple de son utilisation :

```php
if ($nombre1 == $nombre2) {
  echo 'Les nombres sont egaux';
} 
```



Étape 4
------

__Objectif__ : Conserver le nombre tiré au hasard entre deux essais

__Exemple__ : [résultat](http://php.baddum.com/jour2/step4.php)

__Les indications__ :

Pour cela vous aurez besoin :

 * Une balise `input` de type `hidden` qui porte le nom `target`
 * L'instruction `echo`
 * Les instructions `if` et `else`



Étape 5
------

__Objectif__ : Tirer un nouveau nombre au hasard si le précédent a été trouvé

__Exemple__ : [résultat](http://php.baddum.com/jour2/step5.php)



Étape 6
------

__Objectif__ : Tirer un nombre au hasard entre 1 et 5

__Exemple__ : [résultat](http://php.baddum.com/jour2/step6.php)

__Les indications__ :

Pour réaliser cette étape, vous aller sûrement modifier des valeurs à 2 endroits différents de votre code.

Comment feriez-vous si vous n'aviez le droit d'utiliser qu'une seule fois la fonction `mt_rand()` ?

Pour réaliser cette étape vous pourriez avoir besoin des valeurs `true` (pour vrai) et `false` (pour faux).
Voici un exemple d'une utilisation :

```php
$AfficherUnMessage = true;
if ( $AfficherUnMessage ) {
  echo 'bou!';
}
```



Étape 7
------

__Objectif__ : Conserver la valeur proposée dans le champs de formulaire. La valeur par défaut doit être 0 si aucune réponse n'a encore été proposée.

__Exemple__ : [résultat](http://php.baddum.com/jour2/step7.php)



Étape 8
------

__Objectif__ : Compter le nombre d'éssai utilisés par le joueur pour trouver le bon nombre

__Exemple__ : [résultat](http://php.baddum.com/jour2/step8.php)

__Les indications__ :

Pour réaliser cette étape, vous allez devoir conserver une variable qui vous servira de compteur.
Vous aurez également besoin d'ajouter 1 à cette variable à chaque essai.  

Voici des exemples d'opérations mathématiques en PHP :

```php
// On peut utiliser + (addition), - (soustraction), * (multiplication), / (division) 
$resultat = 3 + 26;
// On peut utiliser des variables
$prix = $quantite * $poids;
// On peut même utiliser la même variable des deux côtés de la déclaration
$tour = 1;
$tour = $tour + 1;
// La variable $tour vaut désormais 2
```

Ce serait bien d'afficher le nombre d'essais utilisés lorsque le joueur trouve le bon nombre.
Sachez que vous pouvez juxtaposer texte et variable à l'aide de l'opérateur `.`.
Voici un exemple d'utilisation :

```php
$sushis = 6;
echo "J'ai mangé " . $sushis . " suchis."; 
``` 



Étape 9
------

__Objectif__ : Tirer un nombre aléatoire entre 1 et 100, et indiquer au joueur si son nombre est trop grand ou trop petit.

__Exemple__ : [résultat](http://php.baddum.com/jour2/step9.php)

__Les indications__ :

Pour réaliser cette étape vous aurez besoin d'enchaîner plusieurs conditions.
Voici un exemple de structure permettant de gérer plusieurs tests à la suite :

```php
if ( $age < 16 ) {
  echo "Trop jeune pour conduire";
} else if ( $age < 18 ) {
  echo "Peux conduire s'il est accompagné";
} else {
  echo "Peux conduire";
}
```



Étape 10
------

__Objectif__ : Demander au joueur la valeur maximale du tirage aléatoire avant d'effectuer un tirage



Étape 11
------

__Objectif__ : Si le joueur est à plus de 3 de la cible, la cible se déplace d'une valeur aléatoire entre -3 et +3.

Attention, la cible ne peut toujours pas être inférieur à 1 ou supérieur à la valeur choisie par le joueur.