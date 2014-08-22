<?php
require_once("lib/phpmailer/class.phpmailer.php");

class FreakMailer extends PHPMailer
{
    var $priority = 3;
    var $to_name;
    var $to_email;
    var $From = null;
    var $FromName = null;
    var $Sender = null;
  
    function FreakMailer()
    {
      global $site; 
      
      // Comes from config.php $site array
      
      if(SMTP_MODE == 'enabled')
      {
        $this->Host = SMTP_HOST;
        $this->Port = SMTP_PORT;
        if(SMTP_USERNAME != '')
        {
         $this->SMTPAuth  = true;
         $this->Username  = SMTP_USERNAME;
         $this->Password  = SMTP_PASSWORD;
        }
        $this->Mailer = "smtp";
      }
      if(!$this->From)
      {
        $this->From = "webmaster@aherntraining.com";
      }
      if(!$this->FromName)
      {
        $this-> FromName = "Live Training Idea Submission";
      }
      if(!$this->Sender)
      {
        $this->Sender = "webmaster@aherntraining.com";
      }
      $this->Priority = $this->priority;
    }
}
?> 