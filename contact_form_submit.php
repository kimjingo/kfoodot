<?php
require_once "config.php";
$qry = "CREATE table IF NOT EXISTS `contacts` ( 
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `first_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '',
    `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '',
    `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '',
    `division` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '',
    `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `created_at` datetime NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `ip_addr` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '',
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ";

if(!$con->query($qry)) echo "Error: " . $sql . $con->error;

/*
$first_name = $_POST['form']['first_name'];
$last_name = $_POST['form']['last_name'];
$email = $_POST['form']['email'];
$division = $_POST['form']['division'];
$subject = $_POST['form']['subject'];
$message = $_POST['form']['message'];

$ip_addr = $_SERVER['REMOTE_ADDR'] . (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])? ' from '.$_SERVER['HTTP_X_FORWARDED_FOR']:'');
// $ip_addr = $_SERVER['REMOTE_ADDR'];
// echo 'REMOTE_ADDR : '.$_SERVER['REMOTE_ADDR'] ;
// echo '<pre>';
// echo 'HTTP_X_FORWARDED_FOR : '.$_SERVER['HTTP_X_FORWARDED_FOR'] ;

// echo '<pre>';
// echo "Hello, Jingoo!";
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';


$curr = time();
$qry = "SELECT UNIX_TIMESTAMP(created_at) created_at, ip_addr FROM contacts ORDER BY id DESC LIMIT 1";
if($QR = $con->query($qry)){
    $QD = $QR->fetch_assoc();
    if( ($QD['created_at'] > ($curr-50) ) && ($QD['ip_addr'] == $ip_addr) ){
        $message = "Please try again later";
        require('contact.php');
        exit;
    }
} else {
    echo "Error: " . $qry . $con->error;
}

$stmt = $con->prepare("INSERT INTO contacts(first_name, last_name, email, division, subject, message, ip_addr) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('sssssss', $first_name, $last_name, $email, $division, $subject, $message, $ip_addr);

$stmt->execute();

*/
// printf("%d row inserted.\n", $stmt->affected_rows);

/* Clean up table CountryLanguage */
// $con->query("DELETE FROM CountryLanguage WHERE Language='Bavarian'");
// printf("%d row deleted.\n", $con->affected_rows);



/*
// Multiple recipients
$to = 'jingoo@kfoodot.com'; // deliminated by the comma

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
// header('thank-you.php')
// header('Location: /thank-you.php');
// exit;
*/
require('thank-you.php');
?>