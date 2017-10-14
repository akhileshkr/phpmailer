<?php
// $con=mysqli_connect("localhost","root","","mail");

session_start();

if(isset($_POST['submit']))
{

$email=$_POST['tomail'];


$account=$_SESSION["account"];//from account id
$password=$_SESSION["password"];//from mail password

$to=$email;
$fromc=$account;
$from_name="Mailer";
$msg=$_POST['content']; // HTML message
$subject=$_POST['subject'];


//error_reporting(0);
include("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.gmail.com";
//$mail->Host = "www.vtrio.com";
$mail->SMTPAuth= true;
$mail->Port = 465; // Or 587
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'ssl';
$mail->From = $fromc;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->addAddress($to);
//$mail->AddAttachment("Scan5.pdf");

//$mail->AddAttachment("logo.gif");
if(!$mail->send()){
 echo "Mailer Error: " . $mail->ErrorInfo;
}else{
?>
<script>
//alert("Message send to the Mail ID");
//window.location="inbox.php"; 
</script>
<?php
echo "<center>E-Mail has been sent</center>";
include 'home.php';
}
}
?>