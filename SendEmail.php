<?php
if(isset($_POST["submit"])){
    // Checking For Blank Fields..
    if($_POST["fname"]==""||$_POST["email"]==""||$_POST["message"]==""){
        echo "Please enter all the details..";
    }else{
        // Check if the "Sender's Email" input field is filled out
        $email=$_POST['email'];
        // Validate E-mail Address
        $email= filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$email){
            echo "Invalid Sender's Email";
        }
        else{
            $message = $_POST['message'];
            $headers = 'From:'. $email . "rn"; // Sender's Email
            // Message lines should not exceed 70 characters (PHP rule), so wrap it
            $message = wordwrap($message, 70);
            // Send Mail By PHP Mail Function
            mail("sekaranitha21@gmail.com", $message, $headers);
            echo "Your mail has been sent successfuly ! Thank you for your feedback";
        }
    }
}
?>