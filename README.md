# comshop :computer:
ComShop Website

## Why Create ComShop :balloon:
ComShop It is a website that was created as part of the course Database Systems for Information Technology.

Our project consists of
- comshop.com: Frontend application.
- comshop API: Backend application API with MySQL Workbench.

## Technology stack. :sparkles: :sparkles:  :sparkles:
### reservation movie theater
- :white_check_mark: [HTML](https://html.com) for creating frontend application.
- :white_check_mark: [JavaScript](https://www.javascript.com) for building our frontend HTML application
- :white_check_mark: [Bootstrap](https://getbootstrap.com) for styling our application.

### ComShop Database.
- [MySQL Workbench](https://www.mysql.com/products/workbench/) for our database.

Our main language of development is [PHP](https://www.php.net)

## Prequistics. :key:
### Check the required :pushpin: :pushpin: :pushpin:
First, check the required 

- Bitnami Applications for PHP or other application server.
  You can check by typing
  ```
  http://localhost:8080
  ```
  into the your browser.
  
You can download Bitnami [here](https://bitnami.com)

## Running the application. :bulb:	:bulb: :bulb: 

You go to your browser and paste url `http://localhost:8080` will see the web application runs at `http://localhost:8080`

### Database setup (ComShop API). :card_index_dividers:
**Reminder: this topic needs to be done only once.**

At ComSop, we use [MySQL Workbench](https://www.mysql.com/products/workbench/) to store user data and credentials, this section will teach you how to set up the database locally. But first of all

- You should have MySQL Workbench installed in your machine.
- You should know your master password of `phpmyadmin` superuser. (They will ask for it during the installation).

If top 2 requirements surpassed. You're ready to develop ComShop's database. These are steps to get the database running.

if you want to develop more database use  My SQL Workbench for easy to add more table or etc.

**WARNING: You should follow the instructions exactly or you'll end up with a broken database that's super hard to work with and fix.**

- Go your browser
  
  Login php my admin on your browser";

  Next

  CREATE DATABASE "comshop" select utf8 unicode ci and then click  Create ;

  This means you've successfully created a database.

- import simple database

  Click import on your database and  select file.sql on floder db

  and click go You should see a message saying

  Import has been successfully finished".

  This means you've import successfully to the database.