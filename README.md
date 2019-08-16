# A coding challenge for InMotion Hosting using Laravel 5.8.

Files touched for the challenge:
```
usvb.sql
.env
app
   Dorm.php      //models
   Student.php
   Unit.php
   Http/Controllers/AppController.php
   
database
  seeds/StudentTableSeeder.php

public
  css/usvb.css
  js/usvb.js      

resources 
  views/ *

routes
  web.php
```


### What I did do:
* built out the databse in sql (rather than Laravel migrations using Eloquent ORM)
* wrote simple sql insertions to populate the Dorm with names and 16 units each.
* used a PHP seeder to randomly create students and assign each to a random unit - 
  * This attempts to assign students using the Unit model's assignStudent() function, which ensures the unit requirements of gender and capacity are checked
* Built the ui to show the Units in a Dorm and display the students assigned to each unit when clicked on.
  * Javascript to handle the click and display students is in public/js/usvb.js 

### What I DIDN'T do:
* implement controller or model code to update and delete student information
* UI for user to create and assign a student (though most of the logic is complete)
* complete the student details view - it only displays name, gender, studentID, and unit assignment
* validation of student data - this would have come with the create and update pieces
* custom Exepction Handlers - this would have been a nice way to handle the
* testing - I haven't done much TDD or unit testing in PHP and felt I'd spend more time skilling up on it than was worth for a quick demo project. Besides, it would have been for the sake of pretending that I typically use TDD with my previous PHP projects, which wouldn't have been accurate. However, when I shifted toward javascript and React as my primary tools I intentionally set out to start from a TDD and BDD perspective so I wouldn't have an excuse. :) It's an area I intend to make a priority as I move forward with any language or framework. 

### Why I did what I did:
I wanted to build out and populate the database first, worked on the unit's requirements related to gender and capacity, then switched to the UI sooner than I probably should have. A better approach would have been to complete the models and all the controller CRUD boilerplate and logic. I was intrigued with the UI requirements as these touched on areas I've been trying to grow in - Dom manipulation with vanilla JS and using CSS Grid and Flexbox. I've often leaned on JS and CSS frameworks to do the dirty work for me, but am trying to deepen my familiarity beneath the abstraction these offer. I'm pleased with how the UI came together, even if it is still simple and unrefined. Still, it took a bit longer than I anticipated and left me unable to complete important pieces of logic related to creating, modifying, and assigning students.

