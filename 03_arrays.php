<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

// Simple array of numbers
$numbers = [1, 2, 3, 4, 5];
var_dump($numbers);
echo '<br>';

// Simple array of strings
$flowers = ['tulip', 'rose', 'sunflower'];
var_dump($flowers);
echo '<br>';

// Outputting values from an array
echo $numbers[0];
echo '<br>';

echo $numbers[3] + $numbers[4];
echo '<br>';


// We can use print_r or var_dump to see the contents of an array
var_dump($numbers);
echo '<br>';

print_r($numbers);
echo '<br>';

/* ------ Associative Arrays ----- */

/*
  Associative arrays allow us to use named keys to identify values.
*/

$flowers = [
  1 => 'tulip',
  2 => 'rose',
  3 => 'sunflower',
];

echo $flowers[1];
echo '<br>';

// Strings as keys
$hex = [
  'tulip' => '#f00',
  'rose' => '#0f0',
  'sunflower' => '#00f',
];

echo $hex['tulip'];
echo '<br>';

var_dump($hex);
echo '<br>';

/* ---- Multi-dimensional arrays ---- */

/*
  Multi-dimansional arrays are often used to store data in a table format.
*/

// Single person
$person1 = [
  'first_name' => 'Trisha',
  'last_name' => 'Catibog',
  'email' => 'trishamaecatibog@student.laverdad.edu.ph',
];

// Array of people
$people = [
  $person1, //   [...$person1]
  [
    'first_name' => 'John',
    'last_name' => 'David',
    'email' => 'johndavidq@gmail.com',
  ],
  [
    'first_name' => 'Mae',
    'last_name' => 'Co',
    'email' => 'maeco@gmail.com',
  ],
];

echo '<pre>';
var_dump($people);
echo '</pre>';

// Accessing values in a multi-dimensional array
echo $people[0]['first_name'];
echo '<br>';

echo $people[2]['email'];
echo '<br>';

// Encode to JSON
echo '<pre>';
var_dump(json_encode($people));
echo '</pre>';

// Decode from JSON
$jsonobj = '{"first_name":"Trisha","last_name": "Catibog","email":"trishamaecatibog@student.laverdad.edu.ph"}';
echo '<pre>';
var_dump(json_decode($jsonobj));
echo '</pre>';