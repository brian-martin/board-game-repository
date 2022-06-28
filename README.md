
# Board Game Repository using PHP/Laravel and MySQL

This is a basic website that utilizes Laravel and MySQL for the backend and Bootstrap with some jQuery for the front end.
The core functionality allows you to add/edit/delete board games that are saved to a mysql database. Then you can view all of the board
games with the ability to search through them within all columns from the database.



## Features

- Simple yet responsive design
- Abiliy to add, edit and delete board games
- Search through all board games within all columns of the table
- Some basic validation when editing or adding a game



## Run Locally

Clone the project

```bash
    git clone https://github.com/brian-martin/board-game-repository.git
```

Go to the project directory

```bash
    cd board-game-repository/
```
Create new database using mysql command line

```bash
    CREATE DATABASE games;
```
To run this project, you will need to change the following environment variables to your .env file

`DB_HOST`

`DB_DATABASE`

`DB_USERNAME`

`DB_PASSWORD`

Run database migrations

```bash
    php artisan migrate
```

Start the server

```bash
    php artisan serve
```

You should be up and running if you followed all the steps.

## Tech Stack

**Client:** Bootstrap, jQuery

**Server:** PHP, Laravel, MySQL


## Roadmap

- Add additional validation to make sure that there are no duplicate records that use the same name and publisher, either using Laravel's built in validation or building a custom function to query the database

- Add pagination to the view page and add the ability for the user to select how many results they want to select

- Add indexes to the database columns that will be searched, e.g., name, publisher and nickname

- Add the ability to scan or enter a UPC number to search for a board game

- Integrate VueJS into the front end for a more seamless user experience and to not redirect to different pages when some actions are made, like delete game

- Integrate some form of caching, either the database cache driver, memcache or redis

- Integrate unit testing, mainly for how the site will handle millions of records being stored and pulled from the database

- Add validation for the rating field to only accept values 1 - 10