<?php 
if(isset($_POST['submit'])){
    $to = "elmanodeveloper@gmail.com";
    $from = $_POST['email'];
    $first_name = $_POST['nome'];
    $last_name = $_POST['sobrenome'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    //mail($from,$subject2,$message2,$headers2);  sends a copy of the message to the sender
    header('Location: thank_you.php');
    
    }
?>