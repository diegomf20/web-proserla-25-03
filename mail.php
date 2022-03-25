<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'desarrollo.mail.web@gmail.com';                     // SMTP username
    $mail->Password   = 'ProgramadoresPPDL';                               // SMTP password
    $mail->SMTPSecure = 'TLS';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('desarrollo.mail.web@gmail.com', 'Web Desarrollo');
    $mail->addAddress('dneira@proserla.com');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('sistemas.proserla@gmail.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $_REQUEST = json_decode(file_get_contents("php://input"),true);
    
    $nombres    =   $_REQUEST['nombres'];
    $empresa    =   $_REQUEST['empresa'];
    $email      =   $_REQUEST['email'];
    $mensaje    =   $_REQUEST['mensaje'];

    $validate=strlen($nombres)*strlen($empresa)*strlen($email)*strlen($mensaje);
    if ($validate>0) {
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "Proserla.com - $empresa";
        $mail->Body     ="<b>Nombre:</b> $nombres<br>
                        <b>Empresa:</b> $empresa<br>
                        <b>Email:</b> $email<br>
                        <b>Mensaje:</b><br>$mensaje<br>";
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        header('Content-Type: application/json');    
        if (!$mail->send()) {
            echo json_encode([
                "status"    => "ERROR",
                "data"      => $mail->ErrorInfo
            ]);
        }else {
            echo json_encode([
                "status"    => "OK",
                "data"      => "Mensaje enviado."
            ]);
        }
    }else{
        echo json_encode([
            "status"    => "VALIDATE",
            "data"      => "Campos Vacios"
        ]);
    }
} catch (Exception $e) {
    header('Content-Type: application/json');    
    echo json_encode([
        "status"    => "ERROR",
        "data"      => $mail->ErrorInfo
    ]);
}