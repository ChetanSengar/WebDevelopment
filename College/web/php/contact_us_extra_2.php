<?php
if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $to = $_POST['cheetahthebaap@gmail.com'];
    $subject = "New Suscriber";
    $body = '<html><body><h1>Feedback Form</h1><hr><p> Name : '.$name'</p><br><p> Email : '.$email'</p></body></html>';
    //headers
    $headers = "from : ".$name." <".$email.">\r\n";
    $headers .="Reply to : ".$email."\r\n";
    $headers .="MIME-Version : 1.0\r\n";
    $headers .="Contact-type : text/html; charset-utf-8";
    //send
    $send= mail($to,$subject,$body,$headers);
    if($send){
        echo '<br>';
        echo 'Thanks for contacting, your will receive a Message Shortly.';
    } else{
        echo 'error';
    }
}
?>