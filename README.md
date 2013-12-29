# PressPlate
## An WordPress Boilerplate

A WordPress Boilerplate to get going quickly.

# Notes:
* WordPress itself is a submodule
* wp-config.php, plugin folders and theme files are in the repository root. wp-config.php has been updated to point to
  these.
  * see http://davidwinter.me/articles/2012/04/09/install-and-manage-wordpress-with-git/ for more info on the WordPress
	set up

	# Setup
	### Get the code
	1. `$ mkdir solutions-builder` (or whatever you like)
	2. `$ cd solutions-builder`
	3. `$ git clone https://github.com/Ecotrust/resilience-solutions-project .`  (note the ` . ` on the end of that
	   command to clone into the current folder. Or fork and clone your own)
	   4. `$ git submodule init` 
	   5. `$ git submodule update`

	   ### Setup WordPress
	   6. Import the database from /data into your local MySql database
	   7. `$ cp local-config-sample.php local-config.php`
	   8. Edit `local-config.php` to include your database connection details
	   8. Install WordPress via http://yourlocalsiteurl/wordpress/wp-install.php

	   ### Setup Roots Theme
	   9. If you don't already have it installed, [install grunt](http://gruntjs.com/getting-started).
	   9. Navigate to /wp-content/themes/roots and run `$ npm install`
	   9. Once it's all installed run `$ grunt watch` and edit away. Any time you change a .less, .js or .php file,
		  grunt will take care of compiling it for you and making it available to the browser. With large less files it
		  can take a sec.


		  More on Grunt, Roots and Less 9: http://roots.io/using-grunt-for-wordpress-theme-development/




