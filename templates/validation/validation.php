<?php
    $name_error = $email_error = $subject_error = $query_error = "";

    $name = $email = $subject = $query = $success = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"])){
            $name_error = "Enter name";
        }else{
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $name_error = "Only letters and white space allowed";
              }
        }
        if(empty($_POST["email"])){
            $email_error = "Enter email";
        }else{
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $email_error = "Invalid email format";
            }
        }
        if(empty($_POST["subject"])){
            $subject_error = "Subject can not be empty";
        }else{
            test_input($_POST["subject"]);
        }
        if(empty($_POST["query"])){
            $query_error = "Leave a query for us";
        }else{
            $query = test_input($_POST["query"]);
        }

        if($name_error =='' and $email_error =='' and $subject_error == '' and $query_error == ''){
            $message_body='';
            unset($_POST['submit']);
            foreach($_POST as $key => $value){
                $message_body .= "$key: $value\n";
            }

            $to = 'simiyuvic@outlook.com';
            $subject = 'Contact Form Submit';
            if(mail($to, $subject, $message_body)){
                $success = 'Message sent, Thank you for contacting us !';
                $name = $email = $subject = $query = '';
            }
        }

    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>