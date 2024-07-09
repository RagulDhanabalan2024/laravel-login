This is a laravel login-system project.

Steps :
1.Used phpmysql for the database integration.
2.Open the code in vs code editor and give the command, php artisan serve.
3.Next , Have to migrate the Users table to the connected database for adding the user records to it.
this is the schema for the users table,
Schema::create('users', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        and then,
using the command, php artisan migrate.
4.Now you will be able to add some user record to this table using the register form.
5.After adding the user record , now you will be able to access the dashboard by giving login credentials to the login form.
6.You will see the dashboard with the user name on top of the page.
