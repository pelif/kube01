<?php 

ini_set('display_errors', 0); 

foreach(range(1,12) as $limit) {
    sleep(1);     
    if($limit < 12) {
        http_response_code(500); 
    } 
}

http_response_code(200); 
echo json_encode(['success' => 'Application is Ready']); 



