<?php
$myemail = "tebence2@hotmail.com";
$subject = "Contact Form";
$message = "Hello!

Your contact form has been submitted by:

First Name: $_POST[first_name]
Last Name: $_POST[last_name]
Your Email: $_POST[email_name]
Comments: $_POST[Message]

end of message
";
mail($myemail,$subject,$message);
header('Location: http://www.terrancecunningham.com/thanks.html');
exit();