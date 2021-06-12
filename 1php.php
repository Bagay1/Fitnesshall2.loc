<?php
$array_data = print_r($_POST,true); 
$hfile = fopen("MyFile.txt","a");
fwrite($hfile,$array_data); 
fclose($hfile); 


header('Content-type: application/json');

// отправка в Гугл
function post_to_google($url,$post_data){
    if($curl = curl_init()) {
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        
        $output = curl_exec($curl);
        curl_close($curl);
        return TRUE;
    }
    return FALSE;
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // отправка в гугл
        $url = $_POST['url'];
        
        if(post_to_google($url, $_POST)){
            $data['success'] = true;
            $data['message'] = 'Ваша заявка успешно отправлена';
        }else{
            $data['success'] = false;
            $data['message'] = 'Что то пошло не так';
        }
    }
    // echo json_encode($data);



?>