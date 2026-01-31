<?php
class Student
{
    public $DBconn;
    function __construct($conn)
    {

        $this->DBconn = $conn;
    }
    function getData()
    {
        $getStudent = $this->DBconn->prepare("select * from students");
    }
}
$student = new Student($conn);
