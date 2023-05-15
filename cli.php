<?php

use GeekBrains\LevelTwo\Blog\{User, Post};
use GeekBrains\LevelTwo\Person\{Name, Person};

spl_autoload_register('load');

//include __DIR__ . "/vendor/autoload.php";

function load($className)
{
  $file = $className . ".php";
  $file = str_replace("\\", "/", $file);
  $file = str_replace("GeekBrains\LevelTwo", "src", $file);
  var_dump($className);
  if(file_exists($file)){
    include $file;
  }
  
}

$name = new Name('Ivan', 'Sidorov');

$user = new User(1, $name, "Admin");
echo $user;

$person = new Person($name, new DateTimeImmutable());
 
$post = new Post(
  $person, 'Всем привет!' . PHP_EOL, 1
);
echo $post;