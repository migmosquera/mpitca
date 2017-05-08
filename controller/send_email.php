
<?php
$msjSendEmail = '';
if (isset($_POST['sendEmail'])) {
    $recipients = array(
        'migmosquera@hotmail.com' => 'Person One',
        'migmosquera2303@gmail.com' => 'Person Two',
    );
    require_once 'controller/email/class.smtp.php';
    require_once 'controller/email/PHPMailerAutoload.php';
    require_once 'controller/email/class.phpmailer.php';
    $name = $_POST['name_contact'];
    $correo_electronico = $_POST['email_contact'];
    $telefono = $_POST['tel_contact'];
    $comment = $_POST['content_contact'];
    $servicio = $_POST['title_contact'];
    $correo = new PHPMailer();
    $correo->IsSMTP();
    $correo->SMTPAuth = true;
    $correo->SMTPSecure = 'tls';
    $correo->Host = "smtp.gmail.com";
    $correo->Port = 587;
    $correo->Username = "soportesyslife@gmail.com";
    $correo->Password = "equipo_syslife";
    $correo->setFrom("soportesyslife@gmail.com");
    foreach ($recipients as $email => $emails) {
        $correo->AddCC($email, $emails);
    }
    $correo->Subject = "correo enviado por '$name'";
    $correo->MsgHTML("<div style='width: 100%;'><strong> Servicio:</strong> $servicio </div></br> "
            . "<div style='width: 100%;'><strong>Mensaje enviado por el usuario:</strong> $name </div></br> "
            . "<div style='width: 100%;'><strong> Email:</strong> $correo_electronico </div></br> "
            . "<div style='width: 100%;'><strong>Telefono:</strong> $telefono </div></br> "
            . "<div style='width: 100%;'><strong> Mensaje:</strong> $comment  </div>");
    if (!$correo->Send()) {
        echo 'Error';
        $msjSendEmail = "Hubo un error: " . $correo->ErrorInfo;
    } else {
        $msjSendEmail = "Mensaje enviado con exito.";
    }
}

    
