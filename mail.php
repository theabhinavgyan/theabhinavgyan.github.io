<?php
    
           if($_SERVER["REQUEST_METHOD"] == "POST") {
              // username and password sent from form 
               
					        $name=$_POST['name'];
				            $phone=$_POST['phone'];
				            $message=$_POST['message'];
				            $email=$_POST['email'];              
                  require_once('PHPMailer_5.2.0/class.phpmailer.php');
                  $mail = new PHPMailer(); // create a new object
                  $mail->IsSMTP(); // enable SMTP
                  $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
                  $mail->SMTPAuth = true; // authentication enabled
                  $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
                  $mail->Host = "smtp.gmail.com";
                  $mail->Port = 465; // or 587
                  $mail->IsHTML(true);
                  $mail->Username = "vatsal.eliot@gmail.com";
                  $mail->Password = "mkaqaumuchffjcmh";
                  $mail->SetFrom("MYWEB@gmail.com");
                  $mail->Subject = "Website se chithi aayi hai";
                  $mail->Body = "Name:- ".$name."<br>"."Phone:- ".$phone."<br>"."Email:- ".$email."<br><br>".$message;
                    $mail->AddAddress("abkgyn@gmail.com");
                    if(!$mail->Send()) {
                     $count=1; 
                	}
              }
           }
?>
