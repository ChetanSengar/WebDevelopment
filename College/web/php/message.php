<html>
    <head><title> . </title>
    <?php
    $admin_email="cheetahthebaap@gmail.com";
    $we = "1";
    $client_email=$_REQUEST['your_email'];
    $client_name=$_REQUEST['your_name'];
    $message=$_REQUEST['your_message'];
    
    if($client_email!=NULL && $client_name=NULL && $message=NULL)
    {
    mail($admin_email, "Client Name :".$client_name , $message, "From:",$client_email);
    echo("Thank You For contacting at GCMT.");
    $we = "0";
    }
    else{
        echo("! ERROR !");
    }
?>
    </head>
    <body>
        <?php 
        if($we == 0){
        header(Location: /index.php);
            exit();
            }
        ?>
</body>
    </html>