<!DOCTYPE html>
<html>
<head>
<title >Print your Name</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

</head>
<body>
 <?php echo "<h3>Andreas Neo Pirkner</h3>"; ?>
 <br>
 <hr>
 <?php 
$d=date("D");
if ($d=="Mon" )
echo "<h3>Happy Monday exclusive Club!<br>Which pill will you choose?<br></h3>";
else if ($d=="Tue" )
echo "<p>Happy Tuesday!</p>" ;
else if ($d=="Wed" )
echo "<p>Happy Wednesday!</p>" ;
else if ($d=="Thu" )
echo "<p>Happy Thursday!</p>" ;
else 
echo "<p>Happy Weekend!</p>" ;
?>
<br>
<hr>
<!--Print your name 50 times-->
<?php
	
$name="NEO";
	
for ($i=1; $i<=50; $i++)
	
{
	
echo  "<span>$name, </span>";
	
} 

?>
<br>
<hr>
<!--Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's element.-->
<?php
$array = [
    [1, 2, 3, 4, 5, 6, 7],
    //[3, 4],
];

foreach ($array as list($a, $b, $c, $d, $e, $f, $g)) {
    echo "<h3>$a; $b; $c; $d; $e; $f; $g \n</h3>";
}
?>
<br>
<hr>

<!--Define an associative array and output array elements on the
screen. Use for this cartoon/anime/game characters (like Mickey Mouse, Super Mario, Goku, Pokemon etc.).-->
<?php 
/* First method to associate create array. */
//$salaries = array(
//"mark" => 2000,
//"anthony"  => 1000,
//"eric" =>  500
//);
//echo "Salary of mark is ". $salaries['mark' ] . "<br />";
//echo "Salary of anthony is " . $salaries['anthony']. "<br />" ;
//echo "Salary of eric is ". $salaries['eric'] . "<br />";
/* Second method to create array. */
$icons[ 'icon1'] = "<p><img src='img/icon1.jpg'></p>";
$icons['icon2' ] = "<p><img src='img/icon2.jpg'></p>";
$icons['icon3'] = "<p><img src='img/icon3.jpg'></p>";
echo "<h3>This is the first icon</h3><br>".$icons['icon1']."<br />";
echo "<hr>This is the second icon</h3>". $icons['icon2'] . "<br />";
echo "<h3>This is the third icon</h3>" . $icons['icon3']. "<br />" ;
//Output:
//Salary of mark is 2000
//Salary of anthony is 1000
//Salary of eric is 500
//Salary of mark is high
//Salary of anthony is medium
//Salary of eric is low
?>


 </body>
</html>