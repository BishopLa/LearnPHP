<!-- An array is a special variable, which can hold more than one value at a time -->

<!-- Types -->
<!-- Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays -->


<!-- Array Lenght -->
<br />
<?php
$girlNames = array("Segun", "Kelvin", "Bayonle", "Adam", "Dre" );
echo count($girlNames);
?>



<br />
<!-- Indexed array is an array which is represented by an index number by default. All elements of array are represented by an index number which starts from 0.
the indexed array can store numbers, strings or any object. PHP indexed array is also known as numeric array. -->
<?php  
$foodClasses = array("Protein","Vitamin","Fat and Oil", "Water", "Mineral");  
echo "Classes of Food: $foodClasses[0], $foodClasses[1], $foodClasses[2], $foodClasses[3] and $foodClasses[4]";  
?> 

<br/>

<?php  
$foodClasses[0]="Carbohydrate";  
$foodClasses[1]="Mineral";  
$foodClasses[2]="Fat and Oil";  
$foodClasses[3]="Protein"; 
$foodClasses[4]="Water"; 
echo "The most prolific Class of Food in Nigeria remains $foodClasses[0], $foodClasses[3], and $foodClasses[2]";  
?>


<br />

<!-- //Associative array -->
<!-- PHP allows you to associate name/label with each array elements in PHP using => symbol. 
Such way, you can easily remember the element because each element is represented by label than an incremented number.
 -->

 <?php
$department = array("Arts"=>"12", "Chemistry"=>"20", "URP"=>"21", "Chemical Engineering" => "10", "Geology"=>"28");
echo "Federal University of Ekiti has " . $department['Chemistry'] . " number of students.";
?>
<br />
<?php    
$price["Petrol"]="500 per litre";  
$price["Rice"]="29,000 per bag";  
$price["Sugar"]="1050 per kg";   
echo "The Current price of PMS is ".$price["Petrol"]."<br/>";  
echo "Rice is currently sold at ".$price["Rice"]."<br/>";  
echo "I love sugar but its is sold at ".$price["Sugar"]."<br/>";  
?> 

<br/>

<!-- A multidimensional array is an array containing one or more arrays.
PHP supports multidimensional arrays that are two, three, four, five, or more levels deep.
 However, arrays more than three levels deep are hard to manage for most people. -->

 <?php
$clothes = array (
  array("Jean",9,7),
  array("Colored Shirt",19,10),
  array("Round neck",12,2),
  array("Polo",11,4)
);
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$clothes[$row][$col]."</li>";
    }
    echo "</ul>";
  }
echo $clothes[0][0].": In stock: ".$clothes[0][1].", sold: ".$clothes[0][2].".<br>";
echo $clothes[1][0].": In stock: ". $clothes[1][1].", sold: ".$clothes[1][2].".<br>";
echo $clothes[2][0].": In stock: ". $clothes[2][1].", sold: ".$clothes[2][2].".<br>";
echo $clothes[3][0].": In stock: ". $clothes[3][1].", sold: ".$clothes[3][2].".<br>";
?>