<?php
	$sql = "SELECT id, name FROM Carriages_Walking_carts";
	$result = $connection_to_db->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}
	$connection_to_db->close();
?>