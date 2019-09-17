 <?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['sex']) && isset($_POST['contact']) && isset($_POST['age']) && isset($_POST['apply'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sex = $_POST['sex'];
    $contact = $_POST['contact'];
    $age = $_POST['age'];
    $apply = $_POST['apply'];
    $to = $_POST['cheetahthebaap@gmail.com'];
    $subject = "New Suscriber for admission.";
    $body = '<html><body><h1>Feedback Form</h1><hr><p> Name : '.$name.'</p><br><p> Email : '.$email.'</p><br><p> Sex : '.$sex.'</p><br><p> Contact : '.$contact.'</p><br><p> Age : '.$age.'</p><br><p> Applying For : '.$apply.'</p></body></html>';
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