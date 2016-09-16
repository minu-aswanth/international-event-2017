<?php
$servername = "";
$username = "";
$password = "";
$dbname = "regDB";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE regDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully <br />";
} else {
    echo "Error creating database: " . $conn->error . "<br />";
}

$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);

// sql to create table
$sql = "CREATE TABLE participants (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
reg_date TIMESTAMP,

name1 VARCHAR(30),
country1 VARCHAR(30),
city1 VARCHAR(30),
college1 VARCHAR(30),
id1 VARCHAR(30),
email1 VARCHAR(50),
phonenumber1 VARCHAR(15),

name2 VARCHAR(30),
country2 VARCHAR(30),
city2 VARCHAR(30),
college2 VARCHAR(30),
id2 VARCHAR(30),
email2 VARCHAR(50),
phonenumber2 VARCHAR(15),

name3 VARCHAR(30),
country3 VARCHAR(30),
city3 VARCHAR(30),
college3 VARCHAR(30),
id3 VARCHAR(30),
email3 VARCHAR(50),
phonenumber3 VARCHAR(15),

name4 VARCHAR(30),
country4 VARCHAR(30),
city4 VARCHAR(30),
college4 VARCHAR(30),
id4 VARCHAR(30),
email4 VARCHAR(50),
phonenumber4 VARCHAR(15),

name5 VARCHAR(30),
country5 VARCHAR(30),
city5 VARCHAR(30),
college5 VARCHAR(30),
id5 VARCHAR(30),
email5 VARCHAR(50),
phonenumber5 VARCHAR(15),

name6 VARCHAR(30),
country6 VARCHAR(30),
city6 VARCHAR(30),
college6 VARCHAR(30),
id6 VARCHAR(30),
email6 VARCHAR(50),
phonenumber6 VARCHAR(15)

)";

if ($conn->query($sql) === TRUE) {
    echo "Table participants created successfully <br />";
} else {
    echo "Error creating table: " . $conn->error . "<br />";
}

$participant1Name = $_POST["participant1Name"];
$participant1Country = $_POST["participant1Country"];
$participant1City = $_POST["participant1City"];
$participant1College = $_POST["participant1College"];
$participant1CollegeID = $_POST["participant1CollegeID"];
$participant1Mail = $_POST["participant1Mail"];
$participant1Phone = $_POST["participant1Phone"];

$participant2Name = $_POST["participant2Name"];
$participant2Country = $_POST["participant2Country"];
$participant2City = $_POST["participant2City"];
$participant2College = $_POST["participant2College"];
$participant2CollegeID = $_POST["participant2CollegeID"];
$participant2Mail = $_POST["participant2Mail"];
$participant2Phone = $_POST["participant2Phone"];

$participant3Name = $_POST["participant3Name"];
$participant3Country = $_POST["participant3Country"];
$participant3City = $_POST["participant3City"];
$participant3College = $_POST["participant3College"];
$participant3CollegeID = $_POST["participant3CollegeID"];
$participant3Mail = $_POST["participant3Mail"];
$participant3Phone = $_POST["participant3Phone"];

$participant4Name = $_POST["participant4Name"];
$participant4Country = $_POST["participant4Country"];
$participant4City = $_POST["participant4City"];
$participant4College = $_POST["participant4College"];
$participant4CollegeID = $_POST["participant4CollegeID"];
$participant4Mail = $_POST["participant4Mail"];
$participant4Phone = $_POST["participant4Phone"];

$participant5Name = $_POST["participant5Name"];
$participant5Country = $_POST["participant5Country"];
$participant5City = $_POST["participant5City"];
$participant5College = $_POST["participant5College"];
$participant5CollegeID = $_POST["participant5CollegeID"];
$participant5Mail = $_POST["participant5Mail"];
$participant5Phone = $_POST["participant5Phone"];

$participant6Name = $_POST["participant6Name"];
$participant6Country = $_POST["participant6Country"];
$participant6City = $_POST["participant6City"];
$participant6College = $_POST["participant6College"];
$participant6CollegeID = $_POST["participant6CollegeID"];
$participant6Mail = $_POST["participant6Mail"];
$participant6Phone = $_POST["participant6Phone"];

$sql = "INSERT INTO participants (name1, country1, city1, college1, id1, email1, phonenumber1, name2, country2, city2, college2, id2, email2, phonenumber2, name3, country3, city3, college3, id3, email3, phonenumber3, name4, country4, city4, college4, id4, email4, phonenumber4, name5, country5, city5, college5, id5, email5, phonenumber5, name6, country6, city6, college6, id6, email6, phonenumber6)
VALUES ('$participant1Name', '$participant1Country', '$participant1City', '$participant1College', '$participant1CollegeID', '$participant1Mail', '$participant1Phone', '$participant2Name', '$participant2Country', '$participant2City', '$participant2College', '$participant2CollegeID', '$participant2Mail', '$participant2Phone', '$participant3Name', '$participant3Country', '$participant3City', '$participant3College', '$participant3CollegeID', '$participant3Mail', '$participant3Phone', '$participant4Name', '$participant4Country', '$participant4City', '$participant4College', '$participant4CollegeID', '$participant4Mail', '$participant4Phone', '$participant5Name', '$participant5Country', '$participant5City', '$participant5College', '$participant5CollegeID', '$participant5Mail', '$participant5Phone', '$participant6Name', '$participant6Country', '$participant6City', '$participant6College', '$participant6CollegeID', '$participant6Mail', '$participant6Phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>