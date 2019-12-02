# Welcome to paydal 👋

[![HitCount](http://hits.dwyl.io/bdelion/paydal.svg)](http://hits.dwyl.io/bdelion/paydal) [![Version](https://img.shields.io/badge/version-0.0.1-blue.svg?cacheSeconds=2592000)](https://img.shields.io/badge/version-0.0.1-SNAPSHOT-blue.svg?cacheSeconds=2592000) [![Documentation](https://img.shields.io/badge/documentation-yes-brightgreen.svg)](https://github.com/bdelion/paydal/wiki)

<p>
<a href="https://sourcerer.io/bdelion"><img src="https://sourcerer.io/icons/logo-sharing.svg"height="24px" alt="Sourcerer"></a>
</p>

> `paydal` est une application de saisie des frais kilométriques.
> 
> Ce projet est développé dans le cadre de la **Code Académie**.

### 🏠 [Homepage](https://github.com/bdelion/paydal/tree/master)

## Usage

Le site `paydal` est accessible ici : https://bdelion.github.io/paydal/.

## Fabriqué avec

* [Visual Studio Code](https://code.visualstudio.com/) - Editeur de code source.

## Authors

👤 **Bertrand DELION**

* Github: [@bdelion](https://github.com/bdelion)

Voir aussi la liste des [contributeurs](https://github.com/bdelion/paydal/graphs/contributors) ayant participés à ce projet.

## :books: Journal des modifications

Pour connaître les dernières évolutions et leurs impacts, consuler la page [CHANGELOG](CHANGELOG.md)

## 🤝 Contributions

Les contributions, problèmes et demandes de fonctionnalités sont les bienvenus !
N'hésitez pas à consulter la page des [issues](https://github.com/bdelion/paydal/issues), et à ouvrir une `issue` afin de discuter de ce que vous souhaitez modifier.

## Versioning

Nous utilisons [SemVer](http://semver.org/) pour le versioning. Pour les versions disponibles, voir [les tags de ce projet](https://github.com/bdelion/paydal/tags).

## Liens utiles

* Documentation : [Wiki](https://github.com/bdelion/paydal/wiki)


# Application de saisie des frais kilométriques

## Pense-bête Git

### Historiser ses modifications (faire un commit)

1. Afficher l'état du répertoire de travail : `git status`,
2. Ajouter à l'index (au _staging_) les fichiers à commiter : `git add <fichiers>` (ou `git add .` si on veut ajouter tout le répertoire courant),
3. Commiter les fichiers : `git commit -m "<Mon commentaire de commit>"`.

### Récupérer des modifications distantes

1. Afficher l'état du répertoire de travail : `git status`,
2. (Afficher les dépôts distants : `git remote -v`, on doit voir son fork et le dépôt principal (l'upstream),
3. Si aucune modification en local (état propre) : `git pull principal`.

### Écraser ses modifications locales avec la dernière version du principal

1. Afficher l'état du répertoire de travail : `git status`,
2. (Afficher les dépôts distants : `git remote -v`, on doit voir son fork (nommé origin) et le dépôt upstream (nommé principal),
3. Si aucune modification en local (état propre) : `git fetch principal`.
4. Écraser ses modifications locales (qui seront définitivement perdues) : `git reset --hard principal/master`.

### Pousser ses modifications sur son fork

1. Afficher l'état du répertoire de travail : `git status`,
2. (Afficher les dépôts distants : `git remote -v`, on doit voir son fork (nommé origin) et le dépôt upstream (nommé principal),
3. Pousser ses modifications sur son fork : `git push origin` (ou `git push` si la branche courante est configurée pour traquer fork, vérifiable avec `git branch -vvv`).

## Exercice

### Afficher la valeur saisie dans une popup

1. Déclarer un attribut `onclick` sur le bouton,
2. Définir un bloc de script JavaScript
3. Dans ce bloc, déclarer une fonction,
4. Dans le `onclick`, faire référence à cette fonction,
5. Dans cette fonction, récupérer la valeur du champ de saisie via `document.getElementById`,
6. Ajouter un `id` au champ de saisie,
7. L'utiliser en paramètre de `getElementById`,
8. Récupérer la valeur via l'attribut `value` de l'élément,
9. Afficher cette valeur avec la fonction `alert`.

### Stocker la valeur saisie dans un fichier pour la restituer sur la page d'accueil

1. Transformer `index.html` en `index.php`,
2. À la racine du projet, créer un fichier pour y stocker le nombre de kilomètres réalisés (e.g. `kiloStock`),
3. Y renseigner arbitrairement un nombre de kilomètres réalisés,
4. Utiliser la fonction PHP `fsopen` pour obtenir un _handle_ sur le fichier,
5. Utiliser la fonction `fread` pour lire le contenu du fichier et le restituer dans `index.php`.
6. Dans `ajoutKilo.php`, utiliser `fread` pour lire le contenu du fichier et y lire les kilomètres déjà réalisés,
7. Effectuer une addition pour ajouter les kilomètres envoyés par le client à ceux déjà saisis dans le fichier,
8. Utiliser `ftruncate` et `frewind` pour effacer le fichier et revenir au début,
9. Utiliser la fonction `fwrite` pour écrire le nouveau solde de kilomètres dans le fichier,
10. Utiliser la fonction `fread` pour lire le contenu du fichier et le restituer dans `index.php`.