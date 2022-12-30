# Simple Book API
This Book API was made using ZAS.
It contains a database with a Single Table. The nameing convention of the columns allows the autosetting of properties of the Book Object.
The code demonstrates how ZAS organizes files are well has how ZAS can be used in development. The ZAS documentation is stated below. Here is a link to watch the full video on YouTube: https://youtube.com/live/Fo1Vmvu0iJA?feature=share.

# Key Demonstrations
- Using the ZAS php CLI
- Abstraction
- Make a Facade from Scratch
- Adding custom commands to ZAS
- Customizing zas-config.json
- Enabling Routing (What is not explicitly allowed is denied!)

# Installation
1. Fork the project
2. Clone it to your development environment
3. Composer install
4. Use the .env.example to create your .env
5. Use thd `supporters/database/schema` to create your database
6. Use Postman or Thunderclient to test the API

If everything works fine, feel free to go through the code and code as much as you like.
The files are arranged based on the ZAS specification and the project was set up using `zasenv`: `composer create-project levizwannah/zasenv book-api`.

# ZAS Custom commands
The custom command added to ZAS was `php zas create routes`. This is used to build the routes. This commands requires that `foreground actors` have `#routed` at the top of the file to explicitly declare their routes. So if you see `#routed` `actors/foreground/books/*.php`, it's for this command to
build routes.

# Some Technicalities
The `Middleware\RouteManager` hidden behind `Support\Facades\Route` is used for Route Authorization. Also, There is a trick on loading helper functions as seen in `GlobalFunctions::boot()` in the root `master.setup.php`. The code is not well documented, but elegant enough for you to understand what is happening.

# Was built using zasenv
Sets up an API environment following the ZAS Specification.
Find the full documentation here: https://github.com/levizwannah/zasenv/wiki

# additional info
Do not touch the template files,
To update a template file, check vendor/levizwannah/zas-php-cli in supporters,
cmd.txt is also in the above specified file
