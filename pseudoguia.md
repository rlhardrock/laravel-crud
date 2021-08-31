LARAVEL   pass laravelJETSTREAM
sudo gedit /etc/hosts

--> usar composer directo

composer create-project laravel/laravel project
cd project
composer require laravel/jetstream

--> configura dominio remoto/local en .env al motor de la base de datos
add lineas en AppServicesProvider

php artisan jetstream:install livewire --teams
php artisan vendor:publish --tag=jetstream-views

npm install && npm run dev
php artisan migrate

--> resetear apache2
sudo service apache2 restart

php artisan serve

crear todos los modelos de la BBDD
php artisan migrate

php artisan serve
//activar el servidor local 'http://127.0.0.1:8000'

php artisan make:controller ClassController --resource
//crea el controller con CRUD
//add el path => use App\Models\Model;

configurar en .dev el SGBD

php artisan make:migration create_class_table
//class es el nombre de la tabla, minusculas y plural
//crear los campos de la tabla

php artisan migrate
//sincroniza con el motor de BBDD

php artisan migrate:status
//ver migraciones hechas hasta el momento

php artisan migrate:rollback --step(#)
//revertir hechos cumplidos por lotes (batch)

php artisan migrate:reset
//revertir todas las migraciones de su aplicación

php artisan migrate:refresh --step(#)/--seed
//revertir todas sus migraciones y luego ejecutará el comando migrate.

php artisan migrate:fresh --seed
//adicionar mas campos a las tablas existentes
//solo usar en construccion de la BBDD, nunca en produccion

php artisan make:migration add_fieldTable_to_nameTable_table
//adicionar un campo a una tabla sin comprometer la integridad de los datos
// en la migracion agregar   ->nullable()->after('fieldTable')

ELOQUENT -> ORM
Actualizar Registros

php artisan make:model Class
//crear modelo para cada tabla, Mayuscula inicial y singular

usar Tinker  para usar por consola e instanciar objetos 1 a 1 >>>

php artisan make:seeder ClassSeeder
//crear semillas de datos

php artisan Class:seed

php artisan make:factory ClassFactory
//crear una fabrica de datos

php artisan mae:request StoreClass
//creacion de archivo para autenticacion y reglas por cada formulario

php artisan r:l
//lista rutas en terminal

AppServicesProvider   cambiador de palabras para las rutas
