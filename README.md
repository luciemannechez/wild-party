**WildParty**
===========

A Symfony project créé le 19 novembre 2015 à 9:52 dans le cadre d'un hackathon à la Wild Code School.

## Présentation

Création d'une application de gestion des soirées au sein de l'école. Les objectifs principaux :

1. Application à usage mobile et tablette en priorité (“Mobile First”)
2. Une partie admin permettant les actions de CRUD (utilisateurs, soirée, etc.)
3. Créer des utilisateurs (admin ou non)
4. Créer des soirées
5. Un utilisateur doit pouvoir s’inscrire/désincrire à une soirée (uniquement des soirées à venir et si le nombre de places le permet)
6. Un organisateur doit pouvoir indiquer le paiement effectué par un utilisateur sur une soirée où il est inscrit
7. BONUS : Ecrire un algorithme qui permet de calculer les pénalités de retard paiement

## Fonctionnalités

Les différents objectifs ont été atteint.

Les pénalités sont calculés à partir de 3 jours de retard à raison de 0.50€ par jour.

## Installation

Après avoir récupéré le projet sur votre machine :

`composer install`

### Base de donnée et schéma

`php app/console doctrine:database:create
php app/console doctrine:schema:update --force`

### Création d'un utilisateur ayant tous les droits

`php app/console fos:user:create --super-admin`

Admin : /admin

## Divers

Il n'y a pas encore de fixtures, il vous faut donc tout d'abord créer des types de soirée (si le prix est défini comme fixe, alors il est obligatoire de le renseigner lors de la création d'une soirée).

Vous pouvez ensuite créer des soirées, soit en tant qu'administrateur soit en tant que simple utilisateur de l'application.

La partie utilisateurs soirées se remplira en fonction des inscriptions aux soirées.

L'administrateur pourra ainsi accéder à cette partie afin de signifier si l'utilisateur a bien payé la soirée. Cela calculera automatiquement les pénalités et le temps de retard s'il y a lieu.


## Améliorations futures

1. Commenter, factoriser et nettoyer le code.
2. Pouvoir cliquer sur le nombre de personnes afin d'afficher la liste des utilisateurs présents à la soirée
3. Améliorer l'esthétique général de l'application, la rendre plus agréable sur mobile. Lui donner une identité propre.
4. Ajouté un champs si la soirée a bien été payée ou non pour les soirées où l'on est inscrit.

**Lors de l'inscription :**
Ajouter un champs type commentaire facultatif qui permet de rentrer ce que la personne ramène lors de la soirée ou d'autres informations
