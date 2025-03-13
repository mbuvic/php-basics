<?php

function dd($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

//dd($_SERVER);

class User{
    public $name;
    public $age;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function sayHello(){
        return "Hello, my name is {$this->name} and I'm {$this->age} years old.";
    }
}

$user1 = new User('John', 30);

dd($user1->name);

$pdoclass = new PDO('mysql:host=localhost;port=3306;dbname=php_essentials', 'root', '');
$statement = $pdoclass->prepare('select * from users');
$statement->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Essentials</title>
</head>
<body>
    <a href="filtering-arrays.php">Filtering Arrays</a><br>
    <a href="page-links.php">Page Links</a>
    
</body>
</html>