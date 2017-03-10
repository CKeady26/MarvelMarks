#MarvelMarks

##What is MarvelMarks?
A simple password protected, multi-user website that stores user web bookmarks in a MySQL database, much like Google Chrome's bookmark manager addon.

###Dependencies + Additional Info
Dependencies:

 - MySQL
 - PHP 5.5
 
 Recommended:
 - Webserver (Apache, NGINX, etc.)
 
 ####Todo
 - Regenerate stored hash of user password upon login.
 - Add support for folders.
 - Send password reset requests to listed user email.
 - Link to register new users.
 - Check username availability, deny creation if taken.
 
 #####Notes

Default username/password pairs for login page available in the "`password_protect.php`" file.
Change these ASAP before hosting this project on your server.