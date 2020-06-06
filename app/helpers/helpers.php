<?php 


function url($path)
{
    $path = trim($path);
    if($path =='')
    {
        echo ROOT_PATH;
    }
    else 
    {
        echo ROOT_PATH.$path;
    }
}


// files or classes or methods not exists 
function notExist($error='')
{ 
    $error = $error;
    require_once(VIEWS.'error'.DS.'404.php');
}