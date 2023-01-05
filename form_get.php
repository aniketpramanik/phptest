<?php

try{
    $ip = $_GET['ip'];
    $url = 'https://api.ip2location.io/?key=7802AE27F73B7643C27FC227E365B42A&ip='.$ip;

    $response = file_get_contents($url);
    
    $json_array = json_decode($response,true);
 
    function display_array_recursive($json_rec){
        if($json_rec){
            foreach($json_rec as $key=> $value){
                if(is_array($value)){
                    display_array_recursive($value);
                }else{
                    echo $key.'--'.$value.'<br>';
                }
            }
        }
    }

    display_array_recursive($json_array);
}catch(Exception $e){
    echo $e ->getMessage();
}
?>