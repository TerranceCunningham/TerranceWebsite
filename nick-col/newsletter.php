<?php
$myemail = "tebence2@hotmail.com";
$subject = "Newsletter Form";
$message = "Hello this is from your newsletter form!

Your contact form has been submitted by:

First Name: $_POST[first_name]
Last Name: $_POST[last_name]
Your Email: $_POST[email_name]
Comments: $_POST[Message]

end of message
";
mail($myemail,$subject,$message);
header('Location: http://www.psccustagingarea.com/thanks.html');
exit();