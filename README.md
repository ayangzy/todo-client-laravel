
## Task
Challenge <br>
Develop two Services (TodoAPIs and TodoMVC) with the following specifications: <br>

TodoAPIs <br>
An Application programming interface (API) service written in Javascript (NodeJs/ExpressJs)
that enables the client:
(i) Create Todos <br>
(ii) Read Todos <br>
(iii) Update Todos <br>
(iv) Delete Todos <br>
The Client is the TodoMVC which will be specified below. Please note that the Client must
be authenticated with JWT and all API endpoints must contain a middleware that validates
the Client. MongoDB should be used as the Database. <br>

TodoMVC <br>
A Model-View-Controller(MVC) application written with Php (Laravel framework) that has
an independent authentication system to register and login a User using a MySQL database.
This app has its forms (views) and uses the TodoAPIs above for the Todo CRUD operations.
It enables an authorized User do the following:
(i) Create Todos <br>
(ii) Read Todos<br>
(iii) Update Todos<br>
(iv) Delete Todos<br>
## Installation & Usage
<hr/>

### Downloading the Project


This framework requires PHP 8.0, laravel 9 and mysql database
.  
You can simply clone  `` todo-client-laravel`` like below on your git bash

```bash
https://github.com/ayangzy/todo-client-laravel.git
```
After cloning the project, please run this command on the project directory
```
composer install
```
### Configure Environment
To run the application you must configure the ```.env``` environment file with your database details. Use the following commmand to create .env file. 
```
cp .env.example .env

```

Next, run the following command  to run database migrations
```
php artisan migrate
```

Note that The nodejs app is running on port 3000 in my case but feel free to add your own port in the .env file in the root directory of the nodejs app. 

Don't forget to add the below environment variable containing the server port which is powering the TodoApi app
```
TODO_API_BASE_URI='localhost:3000/api/v1/'
```

After doing this, Clone your nodejs app (TodoApi) and ensure the server is up and running. I will give instruction on how to set up the TodoApi

Finally serve your application using

```
 php artisan serve
```

## Security

If you discover any security related issues, please email felixdecoder2020@gmail.com instead of using the issue tracker.

## Credits

- [Ayange Felix](https://github.com/ayangzy)


