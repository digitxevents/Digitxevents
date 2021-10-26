<?php
    sleep(1);
    
    include ('database.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    if (($name != null) || ($email != null) || ($phone != null) || ($message != null)) {

        /* Insert To DB*/

        $sql = "INSERT INTO userinfo (name, email, phone, message)
        VALUES ('$name', '$email','$phone','$message')";

        if ($conn->query($sql) === TRUE) {

            /* Sent to mail */
            $to = "prosenbiswas224@gmail.com";
            $subject = "Message from website";
            $message = "
            <html>
                <head>
                    <title>
                        Message from website
                    </title>
                </head>
                <body>
                    <p>Message from website</p>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                        <tr>
                            <td>".$name."</td>
                            <td>".$email."</td>
                            <td>".$message."</td>
                        </tr>
                    </table>
                </body>
            </html>
            ";

            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: <prosenbiswas224@gmail.com>' . "\r\n";
            echo mail($to, $subject, $message, $headers);
        }

        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
        
    }
?>