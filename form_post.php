<?php
$name = $_POST['name'];
$email = $_POST['email'];
$url = $_POST['url'];

$url = 'https://postman-echo.com/post';
/*$url = 'https://corednacom.corewebdna.com/assessment-endpoint.php';*/
$data = array('name' => $name, 'email' => $email, 'url' => $url);


$options = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);
if ($response ===FALSE) {/* Handle error*/ }

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





?>