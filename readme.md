# KCCEMSR Main Website

## Development Guide
### Installation
1. Install composer dependencies
```
composer install
```
2. Create ```.env``` file (cloning .env.example file)
3. Update database credentials in ```.env``` file
```
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<your_database>
DB_USERNAME=<your_password>
DB_PASSWORD=<your_username>
```
4. Setup [mailtrap.io](https://mailtrap.io/) for email testing, update credentials in ```.env``` file
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=<your_username>
MAIL_PASSWORD=<your_password>
```
5. Generate Application key
```
php artisan key:generate
```
6. Run database migration
```
php artisan migrate
```
7. Start Development Server
```
php artisan serve
```
8. Start Queue worker for executing Jobs (optional)
```
php artisan queue:work
```
## Testing
1. Install composer dependencies
```
composer install
```
2. Run PHP Unit Testing
```
php artisan test
```
