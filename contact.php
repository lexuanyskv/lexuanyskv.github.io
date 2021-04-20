<?php
 if (isset($_POST["send"])) {
    include ('PHPMailer-5.2-stable/PHPMailerAutoload.php');
    
    $mail = new PHPMailer;
    $mail->isSMTP();          
                    // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;// Enable SMTP authentication
$mail->Username = 'lexuanyskv@gmail.com';// SMTP username
$mail->Password = 'odbsfnteugczlnmn';// SMTP password
$mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;// TCP port to connect to

$mail->setFrom('system@gmail.com', 'Thông Tin Liên Hệ Việc Làm');
$mail->addAddress('lexuanyskv@gmail.com', 'Joe User');

$mail->addAttachment('/var/tmp/file.tar.gz');// Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = ('Thông Tin Liên Hệ Việc Làm');
$mail->Body = '<center>'.'<h1>'.'THÔNG TIN LIÊN HỆ VIỆC LÀM'.'</h1>'.'</center>'.'</n>'.'<hr>'.'<b>'.' - Họ Và Tên :   '.'</b>'.$_POST["name"].'</n>'.'<hr>'.'<b>'. ' - Email :    '.'</b>'.$_POST["email"].'</n>'.'<hr>'.'<b>'.' - Tiêu Đề :    '.'</b>' .$_POST["subject"].'</n>'.'<hr>'.'<b>'.' - Ghi Chú Thêm :    '.'</b>'.$_POST["message"].'</n>'.'<hr>' ;
$mail->AltBody = $_POST["message"];
$mail->CharSet = "UTF8";
if(!$mail->send()) {
    echo 'Không thể gửi tin nhắn.';
    echo 'Lỗi người gửi thư: ' . $mail->ErrorInfo;
}
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Lê Xuân Ý</title>
  <meta content="Lê Xuân Ý | lexuany.com" name="description">
  <meta content="LÊ XUÂN Ý, Lê Xuân Ý, lê xuân Ý, lexuany,LEXUANY,lexuanyskv,lexuany.com,LEXUANY.COM" name="keywords">
  <!-- Thẻ Ogtag -->
  <meta property="og:locale" content="vi_VN">
  <meta property="og:title" content="Lê Xuân Ý | lexuany.com">
  <meta property="og:site_name" content="Lê Xuân Ý">
  <meta property="og:url" content="https://lexuany.com">
  <meta property="og:description" content="Lê Xuân Ý | lexuany.com">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://nhahangtomhum.com/assets/img/kg5.jpg">
  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Lê Xuân Ý | lexuany.com">
  <meta name="twitter:description" content="Lê Xuân Ý | lexuany.com">
  <meta name="twitter:image" content="https://nhahangtomhum.com/assets/img/kg5.jpg">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
 <!-- ======= Header ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container justify-content-center" data-aos="fade-in">
        <h1>Gửi Liên Hệ Thành Công</h1>
        <p>Tôi Sẽ Trong Thời Gian Sớm Nhất <br> <span class="typed" data-typed-items="Xin Cảm Ơn."></span></p>
      <div class="text-center">
	       <a href="index.html" class="btn btn-info">Quay Lại Trang Chủ</a>
	     </div>
    </div>    
  </section>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>