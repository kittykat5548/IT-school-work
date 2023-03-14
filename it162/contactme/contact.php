<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Contact Form homework</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
    
 <div id="wrapper">
    <header>
<a href="">
    <img src="images/logo.jpg" alt="logo">
</a>
    </header>
<main> 
    <h1>Contact us today!</h1>  
<form action="formhandler.php" method="post">
<fieldset>
<legend>Contact Talana</legend>

<label>Name</label>
<input type="text" name="name" required>
<label>Email</label>
<input type="email" name="email" required>

<label>Gender</label>
<ul>
<li><input type="radio" name="gender" value="female">Female</li>
<li><input type="radio" name="gender" value="male">Male</li>
<li><input type="radio" name="gender" value="other">Other</li>
</ul>

<label>Number of items</label>
<select name="">
    <option value="">Select one</option>
    <option value="one">1</option> 
    <option value="two">2</option> 
    <option value="three">3</option> 
    <option value="more">More</option> 
</select>

<label>Type</label>
<ul>
    <li><input type="checkbox" name="pillows[]" value="pillows">Pillows</li>
    <li><input type="checkbox" name="pyramids[]" value="pyramids">Pyramids</li>
    <li><input type="checkbox" name="hearts[]" value="hearts">Hearts</li>
    <li><input type="checkbox" name="beads[]" value="beads">Beads</li>
    <li><input type="checkbox" name="rollingtrays[]" value="rollingtrays">Rollingtrays</li>
    <li><input type="checkbox" name="ashtrays[]" value="ashtrays">Ashtrays</li>
    <li><input type="checkbox" name="dragons[]" value="dragons">Dragons</li>
    <li><input type="checkbox" name="skulljars[]" value="skulljars">Skulljars</li>

</ul>
<label>Design</label>
<select name="">
<option value="">Select one</option>    
<option value="colors">Colors</option> 
<option value="pattern">Patterns</option> 
<option value="figures">Figures</option> 
<option value="pictures">Pictures</option> 
</select>


<label>Comments</label>
<textarea name="comments"></textarea>
<input type="submit" name="submit" value="Send it">

<p><a href="">Reset</a></p>
</fieldset>
</form>

</main>

<aside>
<h3>Description!</h3>
<p>Whith this contact forum you can choose from the choices given and in the comments section you can go into more details of how you want your order done, for example: you can add exactly what colors, figures, patterns, exe. As well as how many of each item you want. </p>
<img src="images/scoobyheart.jpg" alt="scoobyheart">
</aside>

<footer>
<ul>
<li>Copyright &copy; 2022</li>
<li>All Rights Reserved</li>
<li><a href="../">Web Design by Talana</a></li>
<li><a href=""><img src="images/html5.png" alt="html">HTML Valid</a></li>
</ul>

</footer>




<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "Talana.Swinney@seattlecolleges.edu";  //place your/your client's email address here
        $toName = "Talana Swinney"; //place your client's name here
        $website = "BabayTs Shop";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?> 

</div>   
<!--end wrapper-->
</body>
</html>

