
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
    function insertData()
    {
        $sqlQuery = 'insert into students (`id`, `name`, `course`,`batch`,`city`,`year`)
         values (null,"Rahul","M.Tech","evening","New Delhi","2nd")';
        $student = $this->DBconn->prepare($sqlQuery);
        $result = $student->execute();
        if ($result) {
            echo "Insert Data successfull";
        } else {
            echo "Operation failled";
        }
    }
}


// Create object
$student = new Student($conn);
$student->getData();
$student->insertData();
