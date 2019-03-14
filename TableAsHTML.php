<?php
	/* Attempt MySQL server connection. Assuming you are running MySQL
	server with default setting (user 'root' with no password) */
	$link = mysqli_connect("localhost", "root", "root", "DemoLesson5");
	 
	// Check connection
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 
	// Attempt select query execution
	$sql = "SELECT * FROM Customers";
	if($result = mysqli_query($link, $sql)){
	    if(mysqli_num_rows($result) > 0){
	        echo "<table>";
	            echo "<tr>";
	                echo "<th>FirstName</th>";
	                echo "<th>LastName</th>";
	                echo "<th>Email</th>";
	            echo "</tr>";
	        while($row = mysqli_fetch_array($result)){
	            echo "<tr>";
	                echo "<td>" . $row['FirstName'] . "</td>";
	                echo "<td>" . $row['LastName'] . "</td>";
	                echo "<td>" . $row['Email'] . "</td>";
	            echo "</tr>";
	        }
	        echo "</table>";
	        // Close result set
	        mysqli_free_result($result);
	    } else{
	        echo "No records matching your query were found.";
	    }
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	 
	// Close connection
	mysqli_close($link);
	?>
