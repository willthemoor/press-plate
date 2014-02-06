# PressPlate
## An WordPress Boilerplate

A WordPress Boilerplate to get going quickly. 

@TODO This should be using [Composer](http://roots.io/using-composer-with-wordpress/) instead of git submodules.

# Notes:
* WordPress itself is a submodule
* wp-config.php, plugin folders and theme files are in the repository root. wp-config.php has been updated to point to
  these.
  * see http://davidwinter.me/articles/2012/04/09/install-and-manage-wordpress-with-git/ for more info on the WordPress
	set up

# Setup
### Get the code
1. `$ mkdir wp-site` (or whatever you like)
2. `$ cd wp-site`
3. `$ git clone {this repo url} .`  (note the ` . ` on the end of that
   command to clone into the current folder. Or fork and clone your own)
4. `$ git remote rm origin` # Here we disassociate our new project from the boilerplate project. 
4. `$ git submodule init` 
5. `$ git submodule update`. Note that `$ git submodule foreach git pull origin master` will likely bork Wordpress

### Setup WordPress
1. Import the database from /data into your local MySql database
2. `$ cp local-config-sample.php local-config.php`
3. Edit `local-config.php` to include your database connection details
4. Install WordPress via http://yourlocalsiteurl/wordpress/wp-install.php
5. put this into functions.php after you install it. Can safely be removed afterward.
   `update_option('uploads_use_yearmonth_folders', 0);`

### Setup Roots Theme
1. If you don't already have it installed, [install grunt](http://gruntjs.com/getting-started).
2. Navigate to /wp-content/themes/roots and run `$ npm install`
3. Once it's all installed run `$ grunt watch` and edit away. Any time you change a .less, .js or .php file,
  grunt will take care of compiling it for you and making it available to the browser. With large less files it
  can take a sec.


  More on Grunt, Roots and Less 9: http://roots.io/using-grunt-for-wordpress-theme-development/

## Updating
### Update WordPress
1. `$ cd /path/to/wordpress`
2. `$ git fetch -t` to get the most recent tags. Each release version of Wordpress is tagged.
3. `$ git tag` to see the list
4. `$ git checkout 3.8.1` or whatever the most recent tag is
5. `$ cd ..` Need to get out of the Wordpress directory for the next steps or you will melt poor little git's brain.
6. `$ git add wordpress` to stage the update
7. `$ git commit -m "Update Wordpress to 3.8.1"`

### Update Plugins
You can either follow the same steps as **Update WordPress** or try: `$ git submodule foreach git pull origin master`



