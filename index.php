<?php 
spl_autoload_register(function($class_name){
	include 'container/classes/'.$class_name.'.php';
});

// Create New Hello Object From hello Class
$hello = new hello();

// Insert Username
$hello->getName("Mohamed Salah");

// Print The Message With The Inserted Name
echo $hello->sayHello();