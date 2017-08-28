<?php
    if (isset($_GET['email']) || isset($_GET['who'])) {
        date_default_timezone_set('Etc/UTC');
        require 'phpmailer/PHPMailerAutoload.php';
        
        $guser = 'sitearoundtheblock@gmail.com';
        $gpass = '4r0undbl0ck';

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = 'html';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = $guser;
        $mail->Password = $gpass;

        if (isset($_GET['email'])) {
            $uemail = $_GET['email'];
            $mail->setFrom($uemail, 'Around The Block Subscribe');
            $mail->addReplyTo($uemail, 'Around The Block Subscribe');
            $subject = 'Around the Block - Subscribe';
            $message = '<p><strong>E-mail: </strong>' . $uemail . '</p>';
        }

        if (isset($_GET['who'])) {
            $who = $_GET['who'];
            $why = $_GET['why'];

            $mail->setFrom($guser, 'Around The Block Suggest');
            $subject = 'Around the Block - Suggest';
            $message = '<p><strong>Who: </strong>' . $who . '</p><p><strong>Why: </strong>' . $why . '</p>';
        }
        
        $mail->addAddress('jrgarou@gmail.com', 'Around The Block');
        // $mail->AltBody = 'This is a plain-text message body';
        $mail->Subject = $subject;
        $mail->msgHTML($message);

        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "arountheblocksuccess";
        }
    } else {
        echo 'error';
    }
?>