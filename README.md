<p align="center"><a href="https://laravel.com" target="_blank"><img
            src="src/readme-assets/images/laravel_administration_portal.jpg" width="800" alt="Laravel Logo"></a></p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions"><img
            src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img
            src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img
            src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img
            src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<h2>About Laravel Administration</h2>

Laravel Administration library provides the facility to developer to create only model. Then if developer use the
LaravelAdmin Trait in that model then, he/she not need to perform the crud operations like create routes, views and
controller logics. Laravel administration will provide autometically crud operations, you can check from your interface
by requesting the URL app-base-url/admin.

If developer use the LaravelAdminAPI trait in model. Then laravel administration package will provide the all apis for
crud, developer not need to perform create, read, list and delete apis for that model. Developer only need to get the
model id and set that model ID into Postman attached collection and test the all apis after authentication.

<h2>Installation Guide</h2>

You can install by performing these following steps:
<ol>
    <li>Create Laravel Project - <b>composer create-project laravel/laravel LaravelAdministration</b></li>
    <li>Install LaravelAdministration Package - <b>composer require bitsoftsol/laravel-administration</b></li>
    <li>Add this line inside providers array within app.php -
        <b>Bitsoftsol\LaravelAdministration\LaravelAdminServiceProvider::class</b>
    </li>
    <li>Run Command and Select LaravelAdminServiceProvider - <b>php artisan vendor:publish </b></li>
    <li>Run Commands - <b>npm install, npm run dev</b></li>
    <li>Set your database name in .env</li>
    <li>Run Command - <b>php artisan migrate --seed</b></li>
    <li>Add this line inside web.php - <b>Auth::routes();</b></li>
    <li>Serve Project - <b>php artisan serve</b></li>
    <li>Access the url <b>(host)/admin/</b> like http://127.0.0.1:8000/admin</li>
    <li>Login with credentials : <b>Username :</b> admin@bitsoftsol.com, <b>Password :</b> bitsoftsol123</li>
    <li>If you log in and access laravel administration dashboard then,</li>
    <li>Congratulations! You have successfully installed laravel administration.</li>
</ol>

<h2>Usage Guide</h2>

We will create CRUD of <b>Seller</b> in these following steps:
<ol>
    <li>Run command - <b>php artisan make:model Seller -m</b></li>
    <li>
        Inside the seller migration file define seller table fields like <b>name, email, city, country,
            profile_image</b>
    </li>
    <li>
        Add LaravelAdmin and LaravelAdminAPI traits
        <ol>
            <li>Import LaravelAdmin Trait on top of seller model class - <b>use use
                    Bitsoftsol\LaravelAdministration\Traits\LaravelAdmin;</b></li>
            <li>Import LaravelAdminAPI Trait on top of seller model class - <b>use use
                    Bitsoftsol\LaravelAdministration\Traits\LaravelAdminAPI;</b></li>
            <li>
                Add these two lines inside Seller model class
                <b>use LaravelAdmin;</b><br>
                <b>use LaravelAdminAPI;</b>
            </li>
        </ol>
    </li>
    <li>
        Add field names in the fillable array inside Seller model class like - <b>protected
            $fillable = [ "name",
            "email",
            "city", "country", "profile_image" ];</b>
    </li>
    <li>
        Run command - <b>php artisan migrate</b> Our sellers table created successfully in database.
    </li>
    <li>
        We visit the <b>(host)/admin/</b> like http://127.0.0.1:8000/admin/crud
    </li>
    <li>
        If you can view Sellers in CRUD listing view then click on it.
    </li>
    <li>
        Congratulations! You can perform CRUD operations of Seller without any coding.<br><br>
    </li>
    <li>
        <b>Seller CRUD APIs - Postman Guide</b><br><br>
    </li>
    <li>
        Copy and import collection in postman <a
            href="src/readme-assets/postman/Laravel-Administration.postman_collection.json">Postman Collection - Laravel
            Administration</a>
    </li>
    <li>
        Copy and import environment variables in postman <a
            href="src/readme-assets/postman/Laravel-Administration.postman_environment.json">Postman Environment -
            Laravel Administration</a>
    </li>
    <li>
        <b>host</b> is (host) like http://127.0.0.1:8000
    </li>
    <li>
        Login API - (host)/api/admin like http://127.0.0.1:8000/api/admin/login
    </li>
    <li>
        Login credentials - <b>Username</b> = admin@bitsoft.com , <b>Password</b> = bitsoft123
    </li>
    <li>
        <b>token</b> - After getting token through login set into (token) environment variable.
    </li>
    <li>
        Get the Seller model_id from this API <b>{{host}}/api/admin/crud/models</b> and set into <b>(model_id)</b>
        variable.
    </li>
    <li>
        Now you can access CRUD APIs for Seller Model.
    </li>
    <li>
        Listing of Seller API - <b>{{host}}/api/admin/crud/{{model_id}}</b>
    </li>
    <li>
        Detail of Seller API - <b>{{host}}/api/admin/crud/{{model_id}}/2</b> , 2 represents the seller  of id = 2
    </li>
    <li>
        Store Seller API - <b>{{host}}/api/admin/crud/{{model_id}}</b>
    </li>
    <li>
        Update Seller API - <b>{{host}}/api/admin/crud/{{model_id}}</b> , To update seller pass (id) of seller in
        form-data inside body tab on postman.
    </li>
    <li>
        Delete Seller API - <b>{{host}}/api/admin/crud/{{model_id}}/3</b> , 2 represents the seller of id = 2
    </li>
    <li>
        Congratulations! We have all APIs to perform crud operations of Seller without any coding.
    </li>
</ol>


The Laravel Administration is open-sourced software licensed under the [MIT
license](https://opensource.org/licenses/MIT).