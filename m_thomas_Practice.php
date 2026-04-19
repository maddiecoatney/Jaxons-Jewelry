<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CHARACTER ENCODING -->
    <meta charset="UTF-8">
    <!-- Assignment title -->
    <title>PHP Practice - M Thomas</title>
</head>
<body>

<h1>PHP Practice File</h2>

<?php
// Section 1: Create an array named $IntRates
// Arrays allow us to store multiple values under a single variable name

// Create an array that stores interest rates 
$IntRates = array(
    0.0825,
    0.0850,
    0.0875,
    0.0900,
    0.0925,
    0.0950,
    0.0975,
    0.1000
);

// Output heading for this section
echo "<h2>Interest Rate Array</h2>";
echo "Contents of \$IntRates (one per line):<br/><br/>";

// Print each array element separately 
echo $IntRates[0] . "<br/>";
echo $IntRates[1] . "<br/>";
echo $IntRates[2] . "<br/>";
echo $IntRates[3] . "<br/>";
echo $IntRates[4] . "<br/>";
echo $IntRates[5] . "<br/>";
echo $IntRates[6] . "<br/>";
echo $IntRates[7] . "<br/>";

// Create a constant for tax rate 
// A constant is a value that does not change while the program runs 

// Create the TAX_RATE constant and assign it to the value 0.10
define("TAX_RATE", 0.10);

// Display the constant so we can it worked 
echo "<h2>Tax Rate Constant</h2>";
echo "The tax rate constant is: " . TAX_RATE . "<br/>";

// Use type casting
// Type casting allows us to temporarily treat a value as a different data type 

echo "<h2>Use Type Casting</h2>";

// Assign STRING value "10" to $varS
$varS = "10";

// Check original data type of $varS
echo "\$varS data type after creation: " . gettype($varS) . "<br/>";

// Create $varN as 50 + $varS using INT type casting for $varS
$varN = 50 + (int)$varS;

// Show $varS is still string after expression
echo "\$varS data type after expression: " . gettype($varS) . "<br/>";

// Show data type of $varN (should be integer)
echo "\$varN data type: " . gettype($varN) . "<br>";

// Use Order of Precedence
echo "<h2>Order of Precedence</h2>";

$var1 = 100;
$var1 = $var1 + 100 * 2 / 4;

// Print incorrect result 
echo "Result WITHOUT parentheses (incorrect): " . $var1 . "<br/>";

// Reset $var1 to 100 for corrected calculation
$var1 = 100;

// Apply the correct order using parentheses
$var1 = ($var1 + 100) * 2 / 4;

// Print the correct result
echo "Result WITH parenthese (correct): " . $var1 . "<br/>";

// Use String Functions
echo "<h2>Use String Functions</h2>";

// Assign name to $name
$name = "Maddie Thomas";

// strpos() finds position of the space between first and last name
$spacePosition = strpos($name, " ");

// substr() extracts part of the string
$first = substr($name, 0, $spacePosition);

// Extract last name from character after space to the end
$last = substr($name, $spacePosition + 1);

// Create $lastFirst as "Last, First"
$lastFirst = $last . ", " . $first;

// Print results
echo "Variable \$first: " . $first . "<br/>";
echo "Variable \$last: " . $last . "<br/>";
echo "Variable \$lastFirst: " . $lastFirst . "<br/>";




?>
 


</body>
</html>