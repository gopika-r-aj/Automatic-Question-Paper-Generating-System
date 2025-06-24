<?php

    require("mailer/PHPMailer.php");

    require("mailer/SMTP.php");

    require("mailer/Exception.php");

    use PHPMailer\PHPMailer\PHPMailer;

    use PHPMailer\PHPMailer\Exception;
    
    define("HOST_MAILER_MAIL_ID","nandupv36@gmail.com");
    define("HOST_MAILER_MAIL_PASSWORD","9400594855");
    define("HOST_APP_NAME","Smart Compare");
    
    
    //send mail to the selected email
    function sendMail($email,$message,$subject,$header)
	{
		
		$mail = new PHPMailer(true);
		try{
			$mail->IsSMTP();
			$mail->SMTPDebug  = 0;
			$mail->SMTPAuth   = true;
			$mail->SMTPSecure = "tls";
			$mail->Host       = "smtp.gmail.com";
			$mail->Port       = 587;
			$mail->AddAddress($email);
			//$mail->AddBCC('pro910mailer@gmail.com');
			$mail->Username   = HOST_MAILER_MAIL_ID;
			$mail->Password   = HOST_MAILER_MAIL_PASSWORD;
			$mail->SetFrom(HOST_MAILER_MAIL_ID,HOST_APP_NAME);
			$mail->AddReplyTo(HOST_MAILER_MAIL_ID,HOST_APP_NAME);
			$mail->addCustomHeader('X-custom-header',$header);
			$mail->Subject    = $subject;
			$mail->Body       = $message;
			$mail->IsHTML(true);
			$mail->Send();
			return true;
		}
		catch(Exception $ex){
				$er=new ErrorMsg('EMAILER');
				$this->lastError=$er->toString($ex->getMessage());
				echo $msg=$ex->getMessage();
		}
    }
    
    
    
	
