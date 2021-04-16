<?php
// echo "Hello, Jingoo!";
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// Multiple recipients
$to = 'jingoo@kfoodot.com'; // note the comma

// Subject
$subject = 'Birthday Reminders for August';

// Message
$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Johny</td><td>10th</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
// $headers[] = 'To: Jingoo <jingoo@kfoodot.com>, John <john@kfoodot.com>';
$headers[] = 'To: Jingoo <jingoo@kfoodot.com>';
$headers[] = 'From: Birthday Reminder <birthday@example.com>';
// $headers[] = 'Cc: jingoo@realookusa.com';
// $headers[] = 'Bcc: kimjingo@gmail.com';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers)) ;

// $error_msg = '<div class="form-response text-center status alert alert-danger contact-status '+response.status_msg['class']+'">'+response.status_msg['msg']+'</div>')'';
// require('thank-you.php');
// header('thank-you.php')
// header('Location: /thank-you.php');
// exit;

?>