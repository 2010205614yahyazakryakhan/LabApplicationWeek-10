<?php
$servername = "localhost";
$username = "root";
$password = "";
$Dbname = "student registration form";

// Db Connection
$conn = new mysqli('localhost', 'root', '', 'student registration form');

//Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Creating Table
$sql_create_table = "CREATE TABLE IF NOT EXISTS students (
   id INT AUTO_INCREMENT PRIMARY KEY,
   full_name VARCHAR(100) NOT NULL,
   email VARCHAR(100) NOT NULL,
   gender ENUM('Male','Female') NOT NULL
)";

//Control
if ($conn->query($sql_create_table) === FALSE) {
    echo "Error, table not created: " . $conn->error;
    $conn->close();
    exit;
}

//Retrieving form data
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];

//Inserting values to the students table

$sql_insert_data = "INSERT INTO students (full_name, email, gender)
                    VALUES ('$full_name', '$email', '$gender')";

//Control
if ($conn->query($sql_insert_data) === TRUE) {
    echo "Student Registrated Successfully";
} else {
    echo "Error" . $sql_insert_data . "<br>" . $conn->error;
}


//Displaying data's

$sql_select_data = "SELECT * FROM students";
$result = $conn->query($sql_select_data);

if ($result->num_rows > 0) {
    echo "<h2>Registered students : </h2>";
    echo "<table border = '1'>
            <tr>
            <th>ID</th>
            <th>Full_Name</th>
            <th>Email</th>
            <th>Gender</th>
</tr>";

    while ($row = $result->fetch_assoc()){
        echo "<tr>
              <td>".$row['id']."</td>
              <td>".$row['full_name']."</td>
              <td>".$row['email']."</td>
              <td>".$row['gender']."</td>
</tr>";
    }
    echo "</table>";
}
else {
    echo "there is not registered students data";
}

$conn->close();





