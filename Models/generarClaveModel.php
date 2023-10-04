<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

    class GenerarClave{

        public function enviarNuevaClave($id, $email){

            $f = null;

            $objConexion = new Conexion;
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM tbl_users WHERE id_user=:id AND email=:email";

            $result = $conexion->prepare($consultar);

            $result->bindParam(":id", $id);
            $result->bindParam(":email", $email);

            $result->execute();

            $f = $result->fetch();

            if ($f){

                // Generamos la nueva clave a partir de un código aleatorio
                $caracteres = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
                $longitud = 8;
                $newPass = substr(str_shuffle($caracteres),0,$longitud);

                $claveMd = md5($newPass);

                $actualizarClave = "UPDATE tbl_users SET clave=:claveMd WHERE id_user=:id";
                $result = $conexion->prepare($actualizarClave);

                $result->bindParam(":id", $id);
                $result->bindParam(":claveMd", $claveMd); 

                $result->execute();

                
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
                $mail->addAddress($email);     //Add a recipient
                // $mail->addAddress('ellen@example.com');               //Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');
                
                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
                
                //Content
                $mail->isHTML(true);    
                $mail->CharSet = 'utf-8';                              //Set email format to HTML
                $mail->Subject = 'Correo de prueba';
                $mail->Body    = '

                <table class="es-wrapper" width="80%"
                style="margin: 0 auto; background-image: url(https://agrilifetoday.tamu.edu/wp-content/uploads/2020/07/AdobeStock_84016419.jpeg); background-size: cover; background-position: bottom; border-radius: 30px; overflow: hidden;"
                cellspacing="0" cellpadding="0">
                <tbody style=" border-radius: 50px !important;">
                  <tr>
                    <td align="center" bgcolor="#F5F5F5" style="padding:20px 0 20px 0;color:#ffffff; font-size:28px; font-weight:bold;"
                      class="esd-block-text es-p35t es-p5b es-p30r es-p30l">
                      <!-- <h1 style="color:white!important; text-align:center!important; font-size: 50px">
                            Tomando tu Mano
                          </h1> -->
                      <img
                        src="https://ci3.googleusercontent.com/proxy/X8ZYQYYEHYaLlIw0uO0wiKqZrIBgPC94YiqoKc3kdOtle7jTiOQZp_T7s0Gry79FSZqL4jh29Na80eXbyxd0NXf5zHkpSxUBI4OaaOn7avIZxmhFAzpML5DIGg=s0-d-e1-ft#https://github.com/Andersson3Acosta3/logoTTM/blob/main/logo.png?raw=true"
                        width="200px" alt="Logo TTM" style="display: block; margin: 0 auto;">
                    </td>
                  </tr>
                  <tr>
                    <td class="esd-block-text es-m-txt-l es-p20t es-p15b es-p30r es-p30l" style=" margin: 0; padding: 70px 0; text-align: center;  background-color: rgba(0, 0, 0, 0.73); display:block ;  height: 100%;">
                      <h2 style="margin: 0; padding-bottom: 30px; text-align: center; color: #ffffff; font-size: 26px;">NUEVA CLAVE GENERADA</h2>
                      <p style="margin: 0; padding-bottom: 30px; line-height:150% !important;font-size:18px; color: #f5f5f5;">Hola ' . $f['nombre'] . '!  <br style="color: #f5f5f5; ">  Hemos recibido una solicitud para restablecer la contraseña de su cuenta. A continuación, le proporcionamos su nueva contraseña temporal:</p>
                      <h6 style="margin: 0; padding-bottom: 30px; font-size: 32px; color: #ffffff;">' . $newPass . '</h6>
                    </td>
                  </tr>
                  <tr>
                    <td class="esd-block-text es-p25t"
                      style="text-align: center; border-top: 1px solid lightgrey; background: #333333;">
                      <p style="color: #f5f5f5; margin: 0; height: 75px; display: block; line-height: 75px;">® Tomando tu Mano - 2023</p>
                    </td>
                  </tr>
                </tbody>
              </table>
                
                ';
                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                
                $mail->send();
                echo '<script>alert("Mensaje enviado")</script>';
                echo '<script> location.href="../Views/ClientSite/login.php"</script>';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }

            }
            else{
                echo '<script> alert("Los datos de usuario no se encuentran en el sistema")</script>';
                echo '<script> location.href="../Views/ClientSite/reset_password.php"</script>';
            }
        }
    }
