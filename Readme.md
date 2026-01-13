 Présentation du projet
---

TalentHub est une plateforme de recrutement en cours de développement.
Ce projet consiste à mettre en place le socle technique d’authentification de la plateforme, avant toute fonctionnalité métier.

L’objectif principal est de fournir un système d’authentification sécurisé, multi-rôles et réutilisable, basé sur une architecture MVC développée sans framework.

 Objectif du projet
---

Gérer l’inscription, la connexion et la déconnexion des utilisateurs
 
Gérer plusieurs rôles utilisateurs :

Candidate

Recruiter

Admin

Protéger les routes selon le rôle

Mettre en place une architecture propre, maintenable et évolutive

Ce système servira de fondation pour toutes les futures fonctionnalités de TalentHub.

Architecture
---

Le projet suit une architecture MVC (Model – View – Controller) avec un point d’entrée unique.

Flux d’une requête

index.php → Router → Controller → Model → View

Séparation des responsabilités

Models : logique métier et accès à la base de données

Controllers : gestion des requêtes et de la logique applicative

Views : affichage uniquement (aucune logique métier)

Core : routage, sécurité, gestion des sessions

Aucun accès direct aux fichiers internes n’est autorisé.

Rôles utilisateurs
---
Candidate

Inscription publique

Connexion

Accès au dashboard candidat

Recruiter

Inscription publique

Connexion

Accès au dashboard recruteur

Admin

Pas d’inscription publique

Connexion uniquement

Accès à un back-office dédié

Chaque rôle possède :

Ses propres routes

Ses propres contrôleurs

Ses propres vues protégées

Sécurité
---

Les mesures suivantes ont été mises en place :

Hashage des mots de passe

Sessions PHP pour l’authentification

Protection des routes selon le rôle

Validation des entrées utilisateur

Protection contre XSS et CSRF

Requêtes préparées via PDO (prévention SQL Injection)

Aucune information sensible n’est exposée à l’utilisateur.

UML
---

Le projet inclut :

Un diagramme de cas d’utilisation (authentification et accès par rôle)

Un diagramme de classes (User, Role et leurs relations)

Ces diagrammes ont été réalisés avant le développement afin de garantir une conception claire.

Extensibilité
---

L’architecture permet :

D’ajouter un nouveau rôle sans modifier l’existant

De réutiliser le système d’authentification dans d’autres projets

De maintenir et tester le code plus facilement qu’une approche procédurale