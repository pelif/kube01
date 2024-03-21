<?php 

$name = getenv('NAME'); 
$age = getenv('AGE'); 

echo json_encode([
    'name' => $name, 
    'age' => $age
]); 