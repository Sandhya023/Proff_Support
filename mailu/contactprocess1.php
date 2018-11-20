
<?php
       require "conn.php";
        $mail1=$_REQUEST['email']; //it will post email you have enter in forgot password where you want to send mail
        $name=$_REQUEST["name"];
        $message=$_REQUEST["message"];
    // $qry="select * from shop where e_mail='".$mail."'";//check wheather your email exist on database or not OR you are registered member or not

      require_once 'class.phpmailer.php';
            $mail = new PHPMailer();
            $mail->SetLanguage("en", 'phpMailer/language/');
             $mail->IsSMTP();
             $mail->SMTPAuth = true;
             $mail->SMTPSecure = "ssl";
             $mail->Host = "smtp.gmail.com";
             $mail->Port = 465;
          
             $mail->Username = "201652023@iiitvadodara.ac.in";
             $mail->Password = "sandhya12";
             $mail->setFrom("$mail1");
             $mail->From="201652023@iiitvadodara.ac.in";
             $mail->AddAddress("201652023@iiitvadodara.ac.in");
             $mail->Subject = "Request";
             $mail->Body = "$message";
	if($mail->Send())
        {
                echo '<script>
     alert("Please check your mail for your password !!!");
     </script>';
               header("location:index.php");
        }
        else {
            echo "error";
}
	
?>	
