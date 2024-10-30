<?php
    function send_mail($emailTo, $toname, $email_copy, $camp_nome, $subject, $body, $siteLink) {
        $emailfrom = 'naoresponda@agroesolar.com.br';
        $fromname = 'Agro&Solar';
        $headers = 'Return-Path: ' . $emailfrom . "\r\n" .
            'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
            'Bcc: ' . $email_copy . "\r\n" .
            'X-Priority: 3' . "\r\n" .
            'X-Mailer: PHP ' . phpversion() .  "\r\n" .
            'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-Transfer-Encoding: 8bit' . "\r\n" .
            'Content-Type: text/html; charset=UTF-8' . "\r\n" .
            'Content-Encoding: UTF-8' . "\r\n\r\n";

        $params = '-f ' . $emailfrom;

        return mail($emailTo, $subject, $body, $headers, $params);
    }
?>