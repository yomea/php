<?php
/**
 * to	必需。规定 email 接收者。
 * subject	必需。规定 email 的主题。注释：该参数不能包含任何新行字符。
 * message	必需。定义要发送的消息。应使用 LF (\n) 来分隔各行。每行应该限制在 70 个字符内。
 * headers	可选。规定附加的标题，比如 From、Cc 和 Bcc。应当使用 CRLF (\r\n) 分隔附加的标题。
 * parameters	可选。对邮件发送程序规定额外的参数。
 */
$to = "someone@example.com";         // 邮件接收者
$subject = "参数邮件";                // 邮件标题
$message = "Hello! 这是邮件的内容。";  // 邮件正文
$from = "someonelse@example.com";   // 邮件发送者
$headers = "From:" . $from;         // 头部信息设置
mail($to,$subject,$message,$headers);
echo "邮件已发送";
?>