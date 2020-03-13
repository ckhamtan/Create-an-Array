<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>No Soup for You!</title>
</head>

<body>
<h1>Mmm...soups</h1>

<?php // Script 7.1 - soups1.php
/* This script creates and prints out on an array. */

// Address error management, if you want.

// Creat the array:
$soups = [
'Monday' => 'Corn Chowder',
'Tuesday' => 'Broccoli Cheddar',
'Wednesday' => 'Potato Bacon', 
'Thursday' => 'Clam Chowder',
'Friday' => 'White Chicken Chili',
'Saturday' => 'Vegetarian',
'Sunday' => 'Chicken Tortilla',
];

// Try to print the array:
print "<p>$soups</p>";

// Print the contents of the array:
print_r($soups);

?>
</body>
</html>