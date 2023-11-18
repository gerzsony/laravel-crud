#prefereed aliases: artisan = php artisan, touch = echo.>
#in-path resources = php/lib, maridb/lib, composer, npm


composer create-project --prefer-dist laravel/laravel laravel-crud
cd laravel-crud
php artisan -V
npm install
mysql -u root -p
create database laravel_crud;

#(setting up .env database connection variables)
#(AppserviceProvider change)

php artisan migrate
php artisan make:model Contact --migration

#(contracts - migration  change)

php artisan migrate

#(edit app/Models/Contact.php)

php artisan make:controller ContactController --resource

#(add the route resource in routes/web.php)
#(edit app/Http/Controllers/ContactController.php)

echo.> resources/views/base.blade.php
mkdir "resources/views/contacts"
echo.> resources/views/contacts/create.blade.php
echo.> resources/views/contacts/index.blade.php
echo.> resources/views/contacts/edit.blade.php




