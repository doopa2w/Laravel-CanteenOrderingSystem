# Canteen Ordering System Setup

The purpose of this manual is to explain the pre-requisites and the steps to install and host the web application locally.

## Prerequisites

The setup involves and requires the following tools:

- Window PowerShell or Git Bash CLI
- XAMPP or WAMPP 
- PHP

## Setup

1. Copy and paste the project 'canteen' to the following folder:	\\...\\xampp\\htdocs\\...

2. In the project's root folder, find and open the .env file with any text editor.

3. Before editing the .env file, open your XAMPP or WAMPP control panel and find out the ports used for both Apache module and MySQL module. 

4. Within the .env file, configure the following if need be:
   - at line 5, APP_URL:  http://localhost
   - at line 10, DB_HOST:127.0.0.1
   - at line 11, DB_PORT:3306
   - at line 12, DB_DATABASE: canteen
   - at line 13, DB_USERNAME: root
   - at line 14, DB_PASSWORD:
   
   The settings above are all following the default configurations from a fresh XAMPP. Change accordingly if the settings are different from the one you are using right now. If you previously tinker with vhost in  the httpd-vhosts.conf file in \\..\\xampp\apache\conf\\extra\\... then do check and make sure it references the canteen's root folder. 
   
5. Once done, verify whether the root folder is accessible by entering its path in any browser. For example, entering localhost/canteen/ should be able to see the root folder. 

6. Next, go to phpmyadmin and create a database named 'canteen' and choose the 'Collation' for collation.

7. Now, import the canteen.sql to seed the database so that the website can run properly. Once import is done, you should see that the database is now officially ready with all the relevant tables and its records.

8. There's still another step to allow the website up and running properly. Go to the root folder of the system and open Windows PowerShell via Shift + Right Click. Make sure that the php.exe path is in the PATH environment variable. In the shell, type the following command: php artisan storage:link. Again make sure you are opening the shell in the root!

9. It's all set now! Enter 'localhost/canteen/public' or the URL you set in the browser.

10. Here are the prepared account's credentials:

    - Customer
      - Email: n@n.com
      - Password: 123
    - Staff
      - Email: staff@staff.com
      - Password: 123
    - Manager
      - Email: manager@manager.com
      - Password: 123



## Team

* Nicholas Ng Yee Jet
* Darryl Tan Zhe Liang
* Yohannes Luke Koh
* Wong Chuen Ting

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).