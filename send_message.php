<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "mohamedsamlali595@gmail.com";  // البريد الإلكتروني الذي ستصل إليه الرسائل
    $subject = $_POST['subject'];  // الموضوع الذي يدخل في النموذج
    $message = "Name: " . $_POST['name'] . "\n" .
               "Email: " . $_POST['email'] . "\n\n" .
               "Message: \n" . $_POST['message'];  // الرسالة التي يدخلها المستخدم
    $headers = "From: " . $_POST['email'] . "\r\n" .
               "Reply-To: " . $_POST['email'] . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // إرسال الرسالة
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again.";
    }
}
?>
