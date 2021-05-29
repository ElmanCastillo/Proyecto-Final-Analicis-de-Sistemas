# Proyecto-Final-Analicis-de-Sistemass
Proyecto Final de el curso Análisis de sistemas Universidad Mariano Galvez

como desplegar la app

ejecutar composer install
Dentro del directorio crear el archivo .env y agregar las credenciales de tu base de datos.
php artisan cache:clear y php artisan config:cache
o 
Run php artisan key:generate

Do php artisan config:clear

Then php artisan config:cache

php artisan serve


actulizar base de datos
php artisan migrate
php artisan migrate:refresh
php artisan db:seed 