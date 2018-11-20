
Title: Install a Xampp server to run the PHP file
Tags: XAMPP, local development, PHP

# Install a Xampp server to run the PHP file

## This solution shows you how to get set up to develop locally using XAMPP, a package that installs Apache, PHP and MySQL to create a testing server on your computer.

If you haven’t worked with PHP and MySQL before , this tutorial will help you to set up a development environment to easily work with Xampp on your own computer.

## A professional development environment

If you are building sites for clients then your process ideally would work like this:

* You develop your site locally (on your own computer or a shared development server)
* You show your client the site on a staging server
* You then deploy the site and all content entered to the live server


## Open the Xampp website


I am going to use XAMMP for this write-up as it is available for Mac, Windows and Linux, however there are alternative products that essentially work in the same way.
Step 1: Download and install XAMMP

Go to: http://www.apachefriends.org/en/xampp.html and click the link for your Operating System.

### Mac Users:

Download the Universal Binary then open the DMG image and drag the XAMPP folder into Applications.

### Windows Users:

Choose and download the Installer version.

Double click the installer .exe and step through the install. On the screen XAMPP Options you will asked if you want to install Apache and MySQL as a service. This means that they will start up when you start your computer, if you do a lot of development then you can select this option, if not you will need to start XAMPP from the control panel before using it.

### Mac and Windows:

At the end of install start the XAMPP Control Panel when prompted.



## Step 2: Start Apache and MySQL

In the XAMPP Control Panel you should see Apache and MySQL listed. To start using them you need to start the services so click Start on both. If you have a Firewall on your computer you may need to grant permission for these applications.

Once you have started Apache and MySQL open a web browser and visit `http://localhost` you should see the XAMPP Splash Screen where you can select a language and the next page is a web based control panel for XAMPP.

![alt text](https://www.wa4e.com/images/xampp-win-01-panel.png)
You now have a web server running on your computer. There are a few things you should do now.

Click the Security link in the sidebar. You will see that some things are flagged up as insecure in red, below that is a link to fix the security problems. Click that and set a root password for MySQL.

You can also set a password for the XAMPP directory, however if you have a firewall that prevents incoming connections to your computer and will stop Apache and so on if using a laptop outside your network then you can leave this alone.




## Step 4: Create a database

If you are going to use MySQL then you need a to create a database for to put your content into. To create a database visit `http://localhost` again in your web browser.

In the sidebar of the XAMPP page, under Tools click PHPMyAdmin. This is a web based tool for managing databases that XAMPP has installed. Usefully, this is also the most common web based tool used by web hosts so it is likely that when you come to move your site live you will also encounter PHPMyAdmin.

Log in with the username root and the password you set as your MySQL root password earlier in this process.
	

The initial screen gives you some information about the server, in the panel on the left are databases that are already installed by XAMPP, you can ignore these, we’ll create a new database for Perch to use. You should create a new database for each Perch installation you run locally.

To create the database click the Databases navigation item at the top of the initial screen.

In the Create Database section of this page enter the name you would like your database to have (usually you would use the site name as part of this) and select under Collation the option `utf8_general_ci`. This ensures that data stored in the database is stored as `utf8` so you should not have any problems with any special characters entered.

Click Create and you now have a database ready to go.



## Run the project Professor Support System

Firstly clone the project and download it locally on computer. Further process has given below.


* Open the Xampp server and start apache and MySQL
* Go to the browser and type localhost and the folder where project has stored.

