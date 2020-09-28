# Ça marche !
Ça marche ! est un thème WordPress pour un blog de compte rendu de randonnées
Il a été créé lors de la formation Access Code School de Besançon en 2020

## Design

### Maquettage
Le maquettage et prototypage de l'application a été réalisé sur Figma
Le dossier artefacts/ contient les maquettes mobile, tablette et desktop en format .fig et .pdf

### Intégration
L'intégration a été réalisée sans framework, en utilisant seulement un système de grille et de variables CSS

## WordPress

### Pages
L'architecture du site se compose de cinq pages principales:
- front-page.php est la page d'accueil
- home.php est la page de blog
- single.php est la page de description de randonnée
- page.php est utilisée pour la page de confidentialité
- 404.php est la page d'erreur 404

### Templates
Les pages utilisent des templates:
- header.php
- footer.php
- parts/article.php pour les billets de blog

### Articles
Les randonnées sont réparties dans trois catégories géographiques et trois étiquettes de type

### Plugins
Le thème utilise les plugins WordPress:
- Advanced Custom Fields (ACF) pour ajouter des champs aux articles
- Extra User Details pour ajouter des champs concernant l'administrateur du site
- FakerPress pour générer automatiquement des articles

