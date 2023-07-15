
<?php

$conn = new mysqli("localhost", "root", "", "backend");

//check connnection to the database

if ($conn != true) {

    die("Connection failed:" .mysqli_error($conn));

} else {

    // print 'saremy';

}

//$conn->close();
?>
