<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // بريد المستلم
    $to = "mohamedsamlali595@gmail.com";
    $subject = "رسالة جديدة من نموذج الاتصال";
    $body = "الاسم: $name\nالبريد الإلكتروني: $email\n\nالرسالة:\n$message";
    $headers = "From: $email";

    // إرسال البريد
    if (mail($to, $subject, $body, $headers)) {
        echo "تم إرسال الرسالة بنجاح!";
    } else {
        echo "حدث خطأ أثناء إرسال الرسالة. حاول مرة أخرى.";
    }
} else {
    echo "طلب غير صالح.";
}
?>
