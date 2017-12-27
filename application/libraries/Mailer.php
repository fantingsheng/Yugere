<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
class Mailer {
 
    var $mail;
 
    public function __construct() {
        require_once(APPPATH . 'libraries/PHPMailer/PHPMailerAutoload.php');
 
        // the true param means it will throw exceptions on errors, which we need to catch
        $this->mail = new PHPMailer(true);

        $this->mail->IsSMTP();
        $this->mail->isHTML(true);

        $this->mail->CharSet    = 'utf-8';                  // 一定要設定 CharSet 才能正確處理中文
        $this->mail->SMTPDebug  = 0;                     // enables SMTP debug information
        $this->mail->SMTPAuth   = true;                  // enable SMTP authentication
         $this->mail->SMTPSecure = 'ssl';                 // sets the prefix to the servier
        $this->mail->Host       = 'smtp.exmail.qq.com';      // sets GMAIL as the SMTP server
         $this->mail->Port       = 465;                   // set the SMTP port for the GMAIL server
        $this->mail->Username   = 'noreply@slightech.com';// GMAIL username
        $this->mail->Password   = 'YAcgj7wX3DMwRA4B';       // GMAIL password
        $this->mail->AddReplyTo('noreply@slightech.com', 'Slightech');
        $this->mail->SetFrom('noreply@slightech.com', 'Slightech');
    }
 
    public function sendmail($to, $subject, $body) {
        try {
            $this->mail->AddAddress($to);
 
            $this->mail->Subject = $subject;
            $this->mail->Body    = $body;
 
            $this->mail->Send();
        }  catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
            Log::error(0, array("emailsend" => "send to " . $to . " fail!", "exception" => $e->errorMessage(), "email" => $to));
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
            Log::error(0, array("emailsend" => "send to " . $to . " fail!", "exception" => $e->getMessage(), "email" => $to));
        }
    }
}
 
/* End of file mailer.php */