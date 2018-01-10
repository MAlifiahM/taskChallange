# Task Challange

This is a task challange about how to create, read, update(all datas and single data), delete and create a blueprint API

## Getting Started

You can clone the repository and running in your local machine.

### Prerequisites

You can click in the green button to get the key for cloning, you can use HTTP or SSH for cloning
```
$ git clone git@github.com:MAlifiahM/taskChallange.git
```

### Installing

After cloning you must run

```
$ composer install
```

And create a database, copy the code in .env.example to .env and change .env same with your database

```
DB_DATABASE= <Your database name>
DB_USERNAME= <Your database Username>
DB_PASSWORD= <Your database Password>
```
and run 

```
$ php artisan migrate
```

### Running and tests

After migrate you must run

```
$ php artisan serve
```

After that create the user data, and run

```
$ php artisan passport:migrate --password
```

After you get the ID and Secret key you can run the oauth endpoint to get the authorization for access the another endpoint.

