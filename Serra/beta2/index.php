<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Home</title>
    <?php

/**  
 *  Link obtido
 *  https://www.youtube.com/watch?v=BWQ5vzd_G_c    
 * 
 * 
*/
        $url = ( isset( $_GET['url'] )) ? $_GET['url']: 'home.php';
        $url = array_filter( explode('/', $url));
        //var_dump($url);

        $file = $url[0].'.php';
        
        if(is_file($file)){
            include $file;
        }else{
            include 'home.php';
        }
    