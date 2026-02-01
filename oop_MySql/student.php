
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
    function update()
    {
        $sqlQuery = "update students set
         name ='Md Jilani',
         course='MBA',
         batch='evening',
         city='delhi',
         year='3rd'
         where id=1";
        $student = $this->DBconn->prepare($sqlQuery);
        $result = $student->execute();
        if ($result) {
            echo "updated success";
        } else {
            echo "operation failled";
        }
    }
    function dataDelete()
    {
        $sqlQuery = "delete from students where id=16";
        $student = $this->DBconn->prepare($sqlQuery);
        $result = $student->execute();
        if ($result) {
            echo "Deleted success";
        } else {
            echo "operation failled";
        }
    }
}


// Create object
$student = new Student($conn);
$student->getData();
$student->insertData();
echo "<br>";
$student->update();
$student->dataDelete();
