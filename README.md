# projet-wap

Ceci est un projet d'intégration d'un WAP dans une application Laravel.

## Aperçu

Cette application Laravel intègre un WAP (Web Application Proxy, solution de paiement WAP ou autre intégration selon votre usage). Ce README explique comment configurer et démarrer l'application en environnement de développement.

## Prérequis

- PHP (vérifiez la version requise dans composer.json ; généralement PHP 7.4+ ou 8.x)
- Composer
- Node.js & npm (ou yarn)
- Base de données (MySQL, PostgreSQL, SQLite, etc.)
- Git

Optionnel :
- Docker / Laravel Sail

## Installation (local)

1. Cloner le dépôt
   git clone https://github.com/IdrissJabri/projet-wap.git
   cd projet-wap

2. Installer les dépendances PHP
   composer install

3. Copier et configurer le fichier d'environnement
   cp .env.example .env
   - Ouvrez `.env` et renseignez les variables (base de données, mail, etc.)
   - Adaptez les variables liées au WAP selon votre fournisseur

4. Générer la clé d'application
   php artisan key:generate

5. Configurer la base de données et lancer les migrations
   php artisan migrate
   Si des seeders sont fournis :
   php artisan db:seed

6. Créer le lien vers storage (si utilisé)
   php artisan storage:link

7. Installer les dépendances front-end et compiler les assets
   npm install
   npm run dev    # pour développement
   npm run build  # pour production

8. Permissions (selon votre environnement)
   chmod -R 775 storage bootstrap/cache
   chown -R <user>:<group> storage bootstrap/cache   # si nécessaire

9. Lancer l'application
   php artisan serve --host=127.0.0.1 --port=8000
   Ou utilisez Valet / Homestead / Sail si configuré.

## Variables d'environnement importantes (.env)

Exemples (adaptez selon vos besoins) :

APP_NAME="projet-wap"
APP_ENV=local
APP_KEY=base64:...
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=projet_wap
DB_USERNAME=root
DB_PASSWORD=secret

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

# Variables WAP — exemple générique (remplacez par celles du fournisseur WAP)
WAP_CLIENT_ID=your_wap_client_id
WAP_CLIENT_SECRET=your_wap_client_secret
WAP_BASE_URL=https://api.wap-provider.example
WAP_CALLBACK_URL=https://your-app.example/wap/callback

Remarque : adaptez les noms des variables WAP à ce que votre code attend. Cherchez dans le code (config/, .env.example, services config, ou contrôleurs) pour trouver les clés exactes.

## Docker / Laravel Sail (optionnel)

Si Sail est inclus :
./vendor/bin/sail up -d

Sinon, adaptez votre Dockerfile / docker-compose.yml.

## Tests

- Exécuter les tests PHPUnit :
  php artisan test
  ou
  ./vendor/bin/phpunit

## Debug & logs

- Logs Laravel : storage/logs/laravel.log
- Vérifiez les permissions de storage et bootstrap/cache si erreurs

## Dépannage courant

- Erreur "No application encryption key has been specified." : exécutez `php artisan key:generate`
- Problèmes de permissions : ajustez `chmod` / `chown` sur storage et bootstrap/cache
- Migration échoue : vérifiez la connexion DB
- Assets front-end non chargés : vérifier `npm run dev` et le chemin public

## Structure du projet

- app/ — logique côté serveur (contrôleurs, modèles)
- routes/ — routes web/api
- resources/views — vues Blade
- resources/js / resources/css — assets front-end
- config/ — configurations (vérifiez config/services.php pour intégrations)

## Contribution

1. Fork du dépôt
2. Créer une branche feature/nom
3. Commit & push
4. Ouvrir une Pull Request

## Licence

Ajoutez ici la licence du projet (ex : MIT). Si vous n'en avez pas, ajoutez un fichier LICENSE.

---

Si vous souhaitez, je peux :
- ouvrir une PR contenant ce README.md au lieu de pousser directement sur main
- traduire le README en anglais
- ajouter des instructions Docker Compose ou des exemples précis pour l'intégration WAP
