<?php
// link https://www.youtube.com/watch?v=7s5_TmBqZR8&t=51s
// acessar o link http://localhost:9000/?path=series
$path = explode('/', $_GET['path']);
$contents = file_get_contents('db.json');

$json = json_decode($contents, true);
$method = $_SERVER['REQUEST_METHOD'];

header('Content-type: application/json');
$body = file_get_contents('php://input');

if($method === 'GET'){
    if($json[$path[0]]){
        echo json_encode($json[$path[0]]);
    }else{
        echo '[]';
    }
}
if($method === 'POST'){
    $jsonBody = json_decode($body, true);
    $jsonBody['id'] = time();

    if(!$json[$path[0]]) {
        $json[$path[0]] = [];
    }    
    $json[$path[0]][] = $jsonBody;
    echo json_encode($jsonBody);
    file_put_contents('db.json', json_encode($json));
}




