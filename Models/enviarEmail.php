<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../PHPMailer/Exception.php';
    require '../PHPMailer/PHPMailer.php';
    require '../PHPMailer/SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'tomandotumanottm@gmail.com';                     //SMTP username
    $mail->Password   = 'fkgkduxwusdurxkm';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    //Emisor
    $mail->setFrom('tomandotumanottm@gmail.com', 'Soporte Tomando tu Mano');
    //Receptor
    $mail->addAddress('diana.ramirez577@soy.sena.edu.co');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);    
    $mail->CharSet = 'UFT-8';                              //Set email format to HTML
    $mail->Subject = 'Correo de prueba';
    $mail->Body    = '
        
        <h1 style="font-size:50px; color: #2396bd; text-align:center">Hola Usuario</h1>"
        <p style="text-align: center; color: #999; font-size=22px"><strong style="color:blue">Santiago Gutiérrez:</strong>¿Por qué los programadores prefiren la playa en lugar de la montaña?
        Porque en la playa tienen mejor conexión WiFi.<img src="https://www.elcarrocolombiano.com/wp-content/uploads/2022/01/kia-ev6-what-car-carro-del-an%CC%83o.jpg" style="max-width:500px; height:500px"><br>
        <p style="text-align: left; color: #fff; font-size=24px"><strong style="color:purple">Diana Ramírez:</strong>¿Cómo llaman los programadores a sus hijos?
        Byte-nos.<img src="https://s2-autoesporte.glbimg.com/Q4X7nn2tG9rW5BRj3Yt-mXmgU8E=/0x0:1920x1080/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_cf9d035bf26b4646b105bd958f32089d/internal_photos/bs/2022/L/S/CO4E1sQ7Wh1fJfr6C6Gg/sem-titulo.jpg" style="max-width:400px; height:400px"><br>
        <p style="text-align: right; color: #2356bd; font-size=26px"><strong style="color:green">Johan Echavez:</strong>¿Qué le dijo un programador a otro en la cafetería?
        ¿Tienes un minuto?<img src="https://phantom-marca.unidadeditorial.es/566940697ecc1bdf4c402e51f506d986/resize/414/f/jpg/assets/multimedia/imagenes/2021/11/29/16381840698932.jpg" style="max-width:300px; height:300px"><br>
        <p style="text-align: center; color: #0023bd; font-size=28px"><strong style="color:gray">Andersson Acosta:</strong>¿Cuántos programadores se necesitan para cambiar una bombilla?
        Ninguno, ¡es un problema de hardware!<img src="https://www.autonocion.com/wp-content/uploads/2021/11/Prueba-KIA-EV6-2-1130x636.jpg" style="max-width:200px; height:200px"><br>
        <p style="text-align: left; color: #999; font-size=20px"><strong style="color:white">Ricardo Reyes:</strong>¿Por qué el programador siempre está frío?
        Porque siempre está rodeado de ventanas.<img src="https://www.autonocion.com/wp-content/uploads/2021/11/Prueba-KIA-EV6-15.jpg" style="max-width:100px; height:100px"><br>
        <hr>
        <p style="font-size:25px; color: blue; text-align:center">&copy; 2023 Tomando tu mano</p>

    ';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<script>alert("Mensaje enviado")</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>