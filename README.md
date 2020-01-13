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
