<?php 

// $name = getenv('NAME'); 
// $age = getenv('AGE'); 
// $lastname = getenv('LASTNAME'); 
// $address = getenv('ADDRESS'); 
$login = getenv('USER'); 
$psswd = getenv('PASSWORD'); 

echo json_encode([
    'login' => $login, 
    'psswd' => $psswd, 
    // 'lastname' => $name, 
    // 'age' => $age, 
    // 'address' => $address
]); 