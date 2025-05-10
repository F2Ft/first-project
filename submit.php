<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  echo "<h2>تم استلام رسالتك بنجاح!</h2>";
  echo "<p><strong>الاسم:</strong> $name</p>";
  echo "<p><strong>البريد الإلكتروني:</strong> $email</p>";
  echo "<p><strong>الرسالة:</strong><br>$message</p>";
} else {
  echo "<p>يرجى تعبئة النموذج أولاً.</p>";
}
?>