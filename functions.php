<?php
function sendMail($sendMailAdress, $sendMailName, $sendMailSubject, $sendMailMessage)
{

    try {
        $domain = 'http://localhost/Mobile-Store-PHP';
        $mail = new PHPMailer;
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->Host = 'ssl://smtp.electricmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'Info@mobile.com';
        $mail->Password = 'C206616963C98B3BC43C45139206CEB2EEA4';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 2525;

        $mail->setFrom('noreply@mobile.com', 'Pakpurza');
        $mail->addAddress($sendMailAdress);
        $mail->isHTML(true);

        $mail->Subject = $sendMailSubject;
        $mail->Body = '<html><head><style>table {
            border: 1px solid black;
            width: 600px;color:black} th {
            background-color: #d1e1ee;}h1 {
            color: #006600;
            text-align: center;}
            h3, .text {margin-left: 50px;margin-right: 50px; }
            </style></head>
           <body><table>
        <tr><th><img src="' . $domain . '/images/pakpurzalogo.png" alt="not image"></th></tr>
        <tr><td><h1>Welcome To Pakpurza</h1>
                <h3>Dear ' . $sendMailName . ',</h3>
                <div class="text">
                    <h4> ' . $sendMailMessage . '
                        <br>Regards,
                        <br>The PakPurza Team
                    </h4>
                </div></td></tr> </table></body></html>';
        if ($mail->send()) {
            return true;
        } else {
            return false;
        }
    } catch (phpmailerException $e) {
        echo $e->errorMessage();
    } catch (Exception $e) {
        echo $e;
    }
}
?>