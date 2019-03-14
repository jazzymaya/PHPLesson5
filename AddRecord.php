<?php
$link = mysqli_connect("localhost", "root", "root", "DemoLesson5");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// attempt insert query execution
$sql = "INSERT INTO Customers (FirstName, LastName, Email) VALUES ('Wormy', 'VonWormenstein', 'email@email.com')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
