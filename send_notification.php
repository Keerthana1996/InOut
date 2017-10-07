<?php
require "init.php";
$message="My location is blah blah blah. Come get me!";
$title="Help me!";
$path_to_fcm="https://fcm.googleapis.com/fcm/send";
$server_key="AAAALIl_Xqk:APA91bHWootPJxeAWrsu7WTnkBW5AUGoy8K7YajN06eYQFaxA7p39NE3gtFDUNLWBm-VO57buZISODyyb4_bfUjZcylPL-JY8yzvT_dVvfFKaTUZpjTOLZ5PS4piQ_KbH9danuxIJAWX";
$sql="select fcm_token from fcm_info";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_row($result);
$key=$row[0];

$headers= array(
        'Authorization:key=' .$server_key,
        'Content-Type:application/json'
    );
    
$fields= array( 'to'=>key,
                'notification'=>array('title'=>$title,'body'=>$message));

$payload = json_encode($fields);

$curl_session = curl_init();
curl_setopt($curl_session, CURLOPT_URL, $path_to_fcm);
curl_setopt($curl_session, CURLOPT_POST, true);
curl_setopt($curl_session, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_session, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl_session, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
curl_setopt($curl_session, CURLOPT_POSTFIELDS, $payload);

$result = curl_exec($curl_session);
mysqli_close($con);

?>