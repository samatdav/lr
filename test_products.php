<?php
include 'core/init.php';
header('Content-type: text/html; charset=utf-8');
// $sql = "SELECT * FROM `products`";
// $result = mysql_query($sql) or die(mysql_error());
// while($row = mysql_fetch_assoc($result)) {
//     $products_all[] = $row[*];
// }

// $row = mysql_fetch_array(mysql_query("SELECT * FROM products"));
// echo $row[1];
$result = mysql_query("SELECT * FROM products");
while($row = mysql_fetch_row($result))
{
    echo "<tr>";

    // echo "<td>$row[0]</td>";
    // echo "<td>$row[1]</td>";
    // echo "<td>$row[1]</td>";

    for ($x = 0; $x < 7; $x++) {
	    echo "<td>$row[$x]</td>";		    
	}

    echo "</tr><br>";
}

// for ($x = 0; $x < count($row); $x++) {
// 	    echo $row[$x];		    
// 	}
// while ($row, true))
// {
//     echo "<tr>";

//     foreach($row as $value)
//     {
//         echo "<td>".$value."</td>";
//     }

//     echo "</tr>";

// }

// echo "</table>";
 
?>

