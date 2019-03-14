<?php
$link = mysqli_connect("localhost", "root", "root", "DemoLesson5");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// attempt insert query execution
$sql = "UPDATE Customers SET LastName='Washington' WHERE id=4";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
