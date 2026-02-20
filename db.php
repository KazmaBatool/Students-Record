<?php
// -----------------------
// 1️⃣ Database Connection (Laragon default)
$host = "localhost";
$user = "root";
$password = "";
$database = "testdb";

// Connect to MySQL server
$conn = new mysqli($host, $user, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// -----------------------
// 2️⃣ Create Database if not exists
$conn->query("CREATE DATABASE IF NOT EXISTS $database");

// Select the database
$conn->select_db($database);

// -----------------------
// 3️⃣ Drop old table (if exists) & create fresh table
$conn->query("DROP TABLE IF EXISTS students");

$conn->query("
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(20),
    gender VARCHAR(10),
    course VARCHAR(50),
    city VARCHAR(50),
    age INT,
    semester VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)
");

// -----------------------
// 4️⃣ Insert Sample Data
$conn->query("
INSERT INTO students (name,email,phone,gender,course,city,age,semester) VALUES
('Ali','ali@gmail.com','03001234567','Male','BSCS','Lahore',21,'5th'),
('Sara','sara@gmail.com','03111234567','Female','BSIT','Karachi',22,'6th'),
('Ahmed','ahmed@yahoo.com','03221234567','Male','BBA','Islamabad',23,'4th'),
('Fatima','fatima@gmail.com','03331234567','Female','BSCS','Peshawar',20,'3rd')
");

// -----------------------
// 5️⃣ Fetch Data
$result = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Students Record</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f9f9f9; padding: 20px; }
        h2 { text-align: center; color: #333; }
        table {
            border-collapse: collapse; width: 90%; margin: 20px auto; background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
        th { background-color: #4CAF50; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        tr:hover { background-color: #ddd; }
    </style>
</head>
<body>

<h2>Students Record Table</h2>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Gender</th>
    <th>Course</th>
    <th>City</th>
    <th>Age</th>
    <th>Semester</th>
    <th>Created At</th>
</tr>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td>
        <td>".$row['phone']."</td>
        <td>".$row['gender']."</td>
        <td>".$row['course']."</td>
        <td>".$row['city']."</td>
        <td>".$row['age']."</td>
        <td>".$row['semester']."</td>
        <td>".$row['created_at']."</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='10'>No Records Found</td></tr>";
}
$conn->close();
?>
</table>

</body>
</html>