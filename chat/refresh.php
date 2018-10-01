<?php
// $con = mysql_connect("localhost","root","");
// if (!$con)
//   {
//   die('Could not connect: ' . mysql_error());
//   }


require_once ('db.php');

$sql = "SELECT * FROM message ORDER BY id ASC";
$result = $conn->query($sql);


if (!empty($result)) {
    // output data of each row
    while($row = $result->fetch_array()) {
    	echo '<p>'.'<span>'.$row['sender'].'</span>'. '&nbsp;&nbsp;' . $row['message'].'</p>';
    }
} else {
    echo "0 results";
}
$conn->close();

