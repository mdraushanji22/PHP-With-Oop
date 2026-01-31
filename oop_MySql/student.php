
<?php
include('./config.php');
class Student
{
    public $DBconn;

    function __construct($conn)
    {
        $this->DBconn = $conn;
    }

    function getData()
    {
        $getStudent = $this->DBconn->prepare("SELECT * FROM students");
        $getStudent->execute();
        $result = $getStudent->fetchAll(PDO::FETCH_ASSOC);

        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }
}


// Create object
$student = new Student($conn);
$student->getData();
