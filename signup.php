<?php
// valori form
$nome = $_POST['name'];
$email = $_POST['email'];

$delay = "4";
$url = "https://www.yachtsitter.services";

if (!$name || !$email) {
    echo 'Please fill required info!';
}

elseif (!preg_match('/^[A-Za-z \'-]+$/i',$name)) {
    echo 'Only letters and white space allowed';
}

elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Incorrect email address';
}else {
    $text = "Name: " . $name . "\n"
        . "Email: " . $email . "\n"


mail(catagianni@gmail.com, 'Mail from Yachtsitter', $text);

print "<body>
    <table align='center' border-color='#CCCCCC'>
    <tr>
        <td>
        <div align='center'><font face='Verdana, Arial, Helvetica, sans-serif'>Thank you for registering with us<br>
        To get back to homepage wait 4 sec or <a href='https://www.yachtsitter.services'>Click here</a></font></div>
        </td>
        <meta http-equiv='refresh' content='$delay; url=$url'>
    </tr>
    </table>
    </body>"
}
?>