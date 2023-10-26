Laravel Administration Installation Guide
Follow these steps to install Laravel Administration, a feature-rich admin panel for Laravel projects.

Step 1: Create a New Laravel Project
Use Composer to create a new Laravel project:

Step 2: Install the LaravelAdministration Package
Install the LaravelAdministration package via Composer:

Step 2: Install the LaravelAdministration Package
Install the LaravelAdministration package via Composer:

Step 3: Add Service Provider
In your Laravel project, add the LaravelAdministration service provider by opening config/app.php and including the following line inside the providers array:

Step 4: Publish Vendor Files
Publish the vendor files with the following Artisan command:

Choose the LaravelAdminServiceProvider option when prompted.

Step 5: Install Frontend Assets
Install and compile frontend assets (CSS and JavaScript) by running the following commands:

Step 6: Configure Your Database
Set your database connection details in the .env file.

Step 7: Run Migrations and Seed the Database
Migrate and seed your database with this Artisan command:

Step 8: Add Authentication Routes
Add Laravel's built-in authentication routes to your routes/web.php file:

Step 9: Serve Your Project
Start the development server using the following command:

Step 10: Access the Admin Panel
Open your web browser and navigate to the following URL to access the Laravel Administration dashboard:

Step 11: Log In
Log in to the admin panel using the following credentials:

Username: admin@bitsoftsol.com
Password: bitsoftsol123
Congratulations! You have successfully installed Laravel Administration. You can now begin managing your Laravel project from the admin panel.