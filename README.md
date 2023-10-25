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

You can install by performing these following steps.
<ol>
    <li>Create Laravel Project - composer create-project laravel/laravel LaravelAdministration</li>
    <li>Run Command - composer require bitsoftsol/laravel-administration</li>
    <li>Add <b>Bitsoftsol\LaravelAdministration\LaravelAdminServiceProvider::class</b> in providers array within app.php
    </li>
    <li>Run Command - <b>php artisan vendor:publish </b> and Select LaravelAdminServiceProvider</li>
    <li>Run Command - <b>npm install</b> <b>npm run dev</b></li>
    <li>Run Command - <b>php artisan migrate --seed</b></li>
    <li>Add <b>Auth::routes();</b> inside web.php</li>
    <li>Serve Project - <b>php artisan serve</b></li>
</ol>


The Laravel Administration is open-sourced software licensed under the [MIT
license](https://opensource.org/licenses/MIT).