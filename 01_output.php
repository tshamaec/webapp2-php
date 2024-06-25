<?php // This is a php tag. If there is no html or other content below the php, we don't need to close the php tag.

/* ------- Outputting Content ------- */

// Echo - Output strings, numbers, html, etc
echo 'pamget';
echo '<br>';
echo 123;
echo '<br>';
echo '<h1>Eyow</h1>';

// print - Similar to echo, but a bit slower
print 'pamget';
echo '<br>';

// print_r - Gives a bit more info. Can be used to print arrays
print_r('pamget');
echo '<br>';
print_r([11, 22, 33]);
echo '<br>';

// var_dump - Even more info like data type and length
var_dump('pamget');
echo '<br>';
var_dump([11, 22, 33]);
echo '<br>';

// Escaping characters with a backslash
echo "panget ka?";
echo '<br>';

/* ------------ Comments ------------ */

// This is a single line comment

/*
 * This is a multi-line comment
 *
 * It can be used to comment out a block of code
 */

// If there is more content after the PHP, such as this file, you do need the ending tag. Otherwise you do not.
?>

<!-- You can output any HTML that you want within a .php file -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Website</title>
</head>

<body>
    <!-- You can output PHP including variables, etc -->
    <h1>Eyow <?php echo 'Twisha Mae'; ?></h1>
    <!-- You may only drop the semi-colon after a statement when the statement is followed immediately by a closing PHP tag ?>. -->
    <h1>Eyow <?= 'Twisha Mae' ?></h1>
</body>

</html>