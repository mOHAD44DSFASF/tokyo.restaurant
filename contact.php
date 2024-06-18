<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // عنوان البريد الإلكتروني الذي سيتم إرسال الرسالة إليه
    $to = "alyabdelaalelsyed@gmail.com";
    $subject = "رسالة جديدة من موقعك";

    // تنسيق الرسالة
    $body = "الاسم: $name\nالبريد الإلكتروني: $email\n\nالرسالة:\n$message";

    // إعدادات الرأس
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // إرسال البريد الإلكتروني
    if (mail($to, $subject, $body, $headers)) {
        echo "تم إرسال الرسالة بنجاح، قم بتفحص بريدك الإلكتروني خلال الــ 24 ساعة القادمة";
    } else {
        echo "حدث خطأ أثناء إرسال رسالتك. حاول مرة أخرى لاحقاً.";
    }
} else {
    echo "طلب غير صالح.";
}
?>
