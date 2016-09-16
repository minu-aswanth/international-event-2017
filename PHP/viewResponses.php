<?php
$servername = "localhost";
$username = "root";
$password = "S@sank12";
$dbname = "regDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, reg_date, transactionID, name1, country1, city1, college1, id1, email1, phonenumber1, name2, country2, city2, college2, id2, email2, phonenumber2, name3, country3, city3, college3, id3, email3, phonenumber3, name4, country4, city4, college4, id4, email4, phonenumber4, name5, country5, city5, college5, id5, email5, phonenumber5, name6, country6, city6, college6, id6, email6, phonenumber6  FROM participantInfo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table border='1px'><tr><th>ID</th><th>Date-Time</th><th>Transaction ID</th><th>Name 1</th><th>Country 1</th><th>City 1</th><th>College 1</th><th>College ID 1</th><th>e-Mail 1</th><th>Phone Number 1</th><th>Name 2</th><th>Country 2</th><th>City 2</th><th>College 2</th><th>College ID 2</th><th>e-Mail 2</th><th>Phone Number 2</th><th>Name 3</th><th>Country 3</th><th>City 3</th><th>College 3</th><th>College ID 3</th><th>e-Mail 3</th><th>Phone Number 3</th><th>Name 4</th><th>Country 4</th><th>City 4</th><th>College 4</th><th>College ID 4</th><th>e-Mail 4</th><th>Phone Number 4</th><th>Name 5</th><th>Country 5</th><th>City 5</th><th>College 5</th><th>College ID 5</th><th>e-Mail 5</th><th>Phone Number 5</th><th>Name 6</th><th>Country 6</th><th>City 6</th><th>College 6</th><th>College ID 6</th><th>e-Mail 6</th><th>Phone Number 6</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>"  . $row["reg_date"]. "</td><td>" . $row["transactionID"]. "</td><td>" . $row["name1"]. "</td><td>" . $row["country1"]. "</td><td>" . $row["city1"]. "</td><td>" . $row["college1"]. "</td><td>" . $row["id1"]. "</td><td>" . $row["email1"]. "</td><td>" . $row["phonenumber1"]. "</td><td>" . $row["name2"]. "</td><td>" . $row["country2"]. "</td><td>" . $row["city2"]. "</td><td>" . $row["college2"]. "</td><td>" . $row["id2"]. "</td><td>" . $row["email2"]. "</td><td>" . $row["phonenumber2"]. "</td><td>" . $row["name3"]. "</td><td>" . $row["country3"]. "</td><td>" . $row["city3"]. "</td><td>" . $row["college3"]. "</td><td>" . $row["id3"]. "</td><td>" . $row["email3"]. "</td><td>" . $row["phonenumber3"]. "</td><td>" . $row["name4"]. "</td><td>" . $row["country4"]. "</td><td>" . $row["city4"]. "</td><td>" . $row["college4"]. "</td><td>" . $row["id4"]. "</td><td>" . $row["email4"]. "</td><td>" . $row["phonenumber4"]. "</td><td>" . $row["name5"]. "</td><td>" . $row["country5"]. "</td><td>" . $row["city5"]. "</td><td>" . $row["college5"]. "</td><td>" . $row["id5"]. "</td><td>" . $row["email5"]. "</td><td>" . $row["phonenumber5"]. "</td><td>" . $row["name6"]. "</td><td>" . $row["country6"]. "</td><td>" . $row["city6"]. "</td><td>" . $row["college6"]. "</td><td>" . $row["id6"]. "</td><td>" . $row["email6"]. "</td><td>" . $row["phonenumber6"] ."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>