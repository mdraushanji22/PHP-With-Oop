<form action="" method="post">
    <input type="text" name="user" placeholder="Enter your name">
    <br>
    <br>
    <button>Submit</button>
</form>
<?php
if (isset($_POST['user'])) {
    // form handling with class
    class userName
    {
        function getName($name)
        {
            echo "User name is:", $name;
        }
    }
}
$user = new userName();
$user->getName($_POST['user']);
