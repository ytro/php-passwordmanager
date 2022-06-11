# Password Manager in PHP (2013)

## Intro

This is a one-week project I did back in early 2013 (at the time I was still a high school student)  
It was a test challenge to land an internship at a web development startup.  
It's a password manager web app which, well... allows the user to maintain a list of their own passwords!

## Technicals

- The app is done in MVC style; 
- The backend is done in pure PHP, with access to a MySQL database for the models (passwords and master password).
    - Some basic SQL syntax is used for the data access layer, such as *SELECT*, *INSERT INTO*, *DELETE*
- The frontend mostly leverages bootstrap CSS and jQuery, but has custom bits of HTML, CSS and JavaScript.
    - The HTML page is generated dynamically from within PHP - by inserting the values from models between the correct tags;
    - Once rendered, bits of javascript/jQuery are used to make the page interactive: loading of password information is done with jQuery AJAX to fetch the information and display it into a modal

## Flow

On launch, the webapp greets the user with a list of their passwords (*top left image*).  
From there, they have three options: create a new password, view an existing password, delete an existing password.  
If they choose to create a new password, a modal appears where they can fill info about a new password (*top right image*).  
If they choose to view or delete a password, a master password box appears (*bottom left image*) - entering the correct master password unlocks information about the password, or deletes it, respectively (*bottom right image*).

![Alt text](PasswordManager-flow.png?raw=true "User interface")

## Installation

The webapp still works at the time of making this repo public (2022) - simply install WampServer, create a 'passman' db within phpMyAdmin and run the SQL script from the repo.  <br><br>
*Please do note that the code is mostly obsolete by today's standards, but will work if you disable all warnings of deprecated code.*

##  License

Copyright © 2013, [Yann Trottier](https://github.com/ytro).
