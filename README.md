# codeigniter-3-example
Example project using Codeigniter 3

### To run this project
1. make sure MySQL already installed
2. run create database and table script in your sql editor. (the script can be found in: `sql/install.sql`)
3. adjust database credential. please make sure the `username` and `password` is same with your database config (example code: `application/config/database.php:76`)
2. put this project into Apache `htdocs`
3. in the browser go to uri `http://localhost/codeigniter-3-example/index.php/login`

### This project is already implemented:
1. Insert data into MySQL database
2. Get data from MySQL database
3. Redirect to another page (using `redirect` module from `helper url` )
4. Pass data from one controller to another (using `flashdata` function from `session` module)

### To use database in script
1. load database module (example code: `application/controllers/Register.php:13`)
2. use module `db` to insert or get data (example insert: `application/models/User_model.php:11` and example get: `application/models/User_model.php:26`)
3. make sure to close the db after used it (example code: `application/controllers/Login.php:29`)
