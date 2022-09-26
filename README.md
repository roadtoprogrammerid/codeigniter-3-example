# codeigniter-3-example
Example project using Codeigniter 3

### This project is already implemented:
1. Insert data into MySQL database
2. Get data from MySQL database
3. Redirect to another page (using `redirect` module from `helper url` )
4. Pass data from one controller to another (using `flashdata` function from `session` module)

### To connect to a database
1. make sure MySQL already installed
2. add database credential (example code: `application/config/database.php:76`)
3. load database module (example code: `application/controllers/Register.php:13`)
4. use module `db` to insert or get data (example insert: `application/models/User_model.php:11` and example get: `application/models/User_model.php:26`)
5. make sure to close the db after used it (example code: `application/controllers/Login.php:29`)
