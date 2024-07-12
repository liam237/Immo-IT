
# Immo-IT

## Description

Immo-IT est une application web de gestion immobilière. Elle permet de lister les biens immobiliers disponibles, de les ajouter, les modifier et les supprimer. Elle offre également un tableau de bord pour l'administrateur permettant de gérer les demandes reçues.

## Prérequis

Assurez-vous d'avoir les éléments suivants installés sur votre machine avant de commencer :

- PHP >= 7.4
- Composer
- MySQL
- Xampp
- vscode

## Installation

### 1. Cloner le dépôt

```sh
git clone [https://github.com/votre-utilisateur/immo-it.git](https://github.com/liam237/Immo-IT.git)
cd immo-it
```

### 2. Installer les dépendances PHP

```sh
composer install
```

### 3. Configurer l'environnement

Copiez le fichier `.env.example` en `.env` :

```sh
cp .env.example .env
```

Générez la clé de l'application :

```sh
php artisan key:generate
```

### 4. Configurer la base de données

Ouvrez le fichier `.env` et configurez les paramètres de connexion à la base de données :

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Immodb-IT
DB_USERNAME=nom_utilisateur
DB_PASSWORD=mot_de_passe
```

### 5. Exécuter les migrations

```sh
php artisan migrate
```


### 6. Lancer le serveur de développement

```sh
php artisan serve
```

L'application sera disponible à l'adresse : [http://localhost:8000](http://localhost:8000)

## Fonctionnalités

### Liste des biens immobiliers

La page principale liste les biens immobiliers disponibles.

### Tableau de bord de l'administrateur

Le tableau de bord permet à l'administrateur de :
- Lister les demandes reçues
- Ajouter, modifier et supprimer des biens immobiliers

### Gestion des biens immobiliers

Les biens peuvent être ajoutés, modifiés et supprimés via le tableau de bord de l'administrateur.

## Commandes utiles

### Exécuter les tests

Pour exécuter les tests, utilisez :

```sh
php artisan test
```

### Nettoyer le cache de l'application

```sh
php artisan cache:clear
```

### Nettoyer le cache de la configuration

```sh
php artisan config:clear
```


## Outils recommandés

- [Visual Studio Code](https://code.visualstudio.com/) pour éditer le code
- [Laravel](https://laravel.com/docs/8.x/) pour un environnement de développement Laravel léger
- [phpMyAdmin](https://www.phpmyadmin.net/) pour gérer votre base de données MySQL

## Contribution

Les contributions sont les bienvenues ! Veuillez soumettre une pull request ou ouvrir une issue pour discuter des changements que vous souhaitez apporter.

## Licence

Ce projet est sous licence FKWV. Consultez le fichier [LICENSE](LICENSE) pour plus d'informations.

## Auteur 

Fonkui William
