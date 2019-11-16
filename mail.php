<?php include 'header.php';
            $quer=mysqli_query($conn, "SELECT * FROM orderlist"); 

if(isset($_SESSION['uid']))
{
$sid=$_SESSION['uid'];
$sql="SELECT * FROM userinfo WHERE uid=$sid";
$query=mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query,MYSQLI_NUM);
$_SESSION['price']=$_POST['price'];
$mailto = $row[3];
    $mailSub ="Bill from OFDS";
    $mailMsg = "Your Order will be delivered soon,<html><Body><h2>Your Order is</h2>";
    while ($row = mysqli_fetch_array($quer))
    {
    $mailMsg .= "<h3>".$row['name']."</h3></br>";
            
    }

$mailMsg .= "</body></html>"."Please keep the change ready of ₹".$_POST['price'];

require 'PHPMailer-master/PHPMailerAutoload.php';
require 'PHPMailer-master/class.phpmailer.php';
require 'PHPMailer-master/class.phpmaileroauth.php';
require 'PHPMailer-master/class.phpmaileroauthgoogle.php';
require 'PHPMailer-master/class.smtp.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;// Enable verbose debug output
    $mail->isSMTP();   // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;     // Enable SMTP authentication
    $mail->Username = 'gadhiyanishith@gmail.com';  // SMTP username
    $mail->Password = 'pass1234!';   // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;  // TCP port to connect to

    //Recipients
    $mail->setFrom('gadhiyanishith@gmail.com', 'Gadhiya Nishith');
    $mail->addAddress($mailto); // Add a recipient
    //$mail->addAddress('ellen@example.com'); // Name is optional
    $mail->addReplyTo('gadhiyanishith@gmail.com', 'Information');
   // $mail->addCC($mailcc);
   // $mail->addBCC($mailcc);

    //Attachments
  //  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);           // Set email format to HTML
    $mail->Subject = $mailSub;
    $mail->Body    = $mailMsg;
  //  $mail->AltBody = $mailMsg;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
   



}
else
{
  header('Location:login.php');
}
?>

<?php include 'footer.php';?>