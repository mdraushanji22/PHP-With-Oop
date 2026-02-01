<?php
include('./config.php');

class Student
{
    public $DBconn;

    function __construct($conn)
    {
        $this->DBconn = $conn;
    }

    // READ DATA
    function getData()
    {
        $getStudent = $this->DBconn->prepare("SELECT * FROM students");
        $getStudent->execute();
        $result = $getStudent->fetchAll(PDO::FETCH_ASSOC);

        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }

    // INSERT FIXED DATA
    function insertData()
    {
        $sqlQuery = "INSERT INTO students (`id`,`name`,`course`,`batch`,`city`,`year`)
                     VALUES (NULL,'Rahul','M.Tech','evening','New Delhi','2nd')";
        $student = $this->DBconn->prepare($sqlQuery);
        $result = $student->execute();

        echo $result ? "Insert Data successful" : "Operation failed";
    }

    // UPDATE
    function update()
    {
        $sqlQuery = "UPDATE students SET
                     name='Md Jilani',
                     course='MBA',
                     batch='evening',
                     city='delhi',
                     year='3rd'
                     WHERE id=22";

        $student = $this->DBconn->prepare($sqlQuery);
        $result = $student->execute();

        echo $result ? "Updated success" : "Operation failed";
    }

    // DELETE
    function dataDelete()
    {
        $sqlQuery = "DELETE FROM students WHERE id=16";
        $student = $this->DBconn->prepare($sqlQuery);
        $result = $student->execute();

        echo $result ? "Deleted success" : "Operation failed";
    }

    // INSERT USING HTML FORM
    function insertDataWithForm($request)
    {
        if (isset($request['name'])) {

            $name  = $request['name'];
            $course = $request['course'];
            $batch  = $request['batch'];
            $city   = $request['city'];
            $year   = $request['year'];

            $sqlQuery = "INSERT INTO students (`id`, `name`, `course`, `batch`, `city`, `year`)
                         VALUES (NULL,'$name','$course','$batch','$city','$year')";

            $student = $this->DBconn->prepare($sqlQuery);
            $result = $student->execute();

            echo $result ? "Insert Data successful" : "Operation failed";
        }
    }
}


// ❗ FIXED — Create object here (important)
$student = new Student($conn);
// Create object
// $student = new Student($conn);
// $student->getData();
// $student->insertData();
// echo "<br>";
$student->update();
// $student->dataDelete();

// FORM submit check
if (isset($_POST['name'])) {
    $student->insertDataWithForm($_POST);
}
