# Dashboard App

## Project setup:

**1. Unpack project's bundle file**

Note: Make sure you have git installed locally on your computer first. In your terminal go to folder, where you wish to
clone this project, then enter command `git clone links.bundle https://github.com/underch3/dashboard_app.git`

**2. cd into dashboard_app**

**3. Install Composer Dependencies**

With command `composer install`

**4. Install NPM Dependencies**

With command `npm install`

**5. Create a copy of your .env file**

With command `cp .env.example .env`

**6. Generate an app encryption key**

`php artisan key:generate`

If you check the .env file again, you will see that it now has a long random string of characters in the APP_KEY field.
We now have a valid app encryption key.

**7. Create an empty database for our application**

Create an empty database for your project using the database tools you prefer (MySql was used in this project). Just
create an empty database here, the exact steps will depend on your system setup.

**8. In the .env file, add database information to allow Laravel to connect to the database**

Add the connection credentials in the .env file and Laravel will handle the connection from there.

In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the
credentials of the database you just created.

**9. Migrate the database**

Once your credentials are in the .env file, now you can migrate your database.

`php artisan migrate`
It’s not a bad idea to check your database to make sure everything migrated the way you expected.

That is all you need to get started on a project.

## Functionality

1. Main page consists of 4 sections and animated footer. Planned activities are delivered from database, after created
   in admin panel or seeded from `actitivities.sql`. Some parts of the page ar web scrapped, others html parsed.

2. If you enter adress http://localhost:port/admin you will get directed to Admin Panel. After you register a user, you
   will be redirected to Admin Dashboard, where you can see CRUD for the planned activities.
   
3. If you hover over logo in the up left corner, you will be directed back to main page.
   

