<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
        if(isset($_POST['sendEmail'])){
            $recipients = array(
                'migmosquera@hotmail.com' => 'Person One',
                'migmosquera2303@gmail.com' => 'Person Two',
             );
            require_once 'controller/email/class.smtp.php';
            require_once 'controller/email/PHPMailerAutoload.php';
            require_once 'controller/email/class.phpmailer.php';
            $name = $_POST['from'];
            $email = $_POST['email'];
            $msjEmail = $_POST['content_email'];
            $correo = new PHPMailer();
            $correo->IsSMTP();
            $correo->SMTPAuth = true;
            $correo->SMTPSecure = 'tls';
            $correo->Host = "smtp.gmail.com";
            $correo->Port = 587;
            $correo->Username = "soportesyslife@gmail.com";
            $correo->Password = "equipo_syslife";
            $correo->setFrom("soportesyslife@gmail.com");
            foreach($recipients as $email => $emails)
            {
              $correo->AddCC($email, $emails);
            }
            $correo->Subject = "correo enviado por '.$name.'";
            $correo->MsgHTML("<strong>Mensaje enviado por el usuario:</strong> $name </br> <strong>Email:</strong> $email  </br> <strong>Mensaje:</strong> $msjEmail  ");
            if (!$correo->Send()) {
                echo 'Error';
                $msjSendEmail = "Hubo un error: " . $correo->ErrorInfo;
            } else {
                $msjSendEmail = "Mensaje enviado con exito.";
            }
        }
        ?>
    </body>
</html>
