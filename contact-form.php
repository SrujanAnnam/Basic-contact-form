<?php
echo $_SERVER['PHP_SELF'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
if (empty($name) || empty ($email) || empty($message)) {
    echo('please.');
}else{
    mail("srujanannam52@gmail.com", "Email Form", "From: $name <$email>\n\n $message");
    echo "<script type= 'text/javascript'>
    alert('message sent');
    window.history.go(-1);
    </script>";
}
?>
