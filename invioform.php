<?php
// valori form
$name = $_POST['name'];
$email = $_POST['email'];
$sail = $_POST['sail'];
$power = $_POST['power'];
$multihull = $_POST['multihull'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$year = $_POST['year'];
$mooring = $_POST['mooring'];
$looking = $_POST['looking'];
$weekly = $_POST['weekly'];
$biweekly = $_POST['biweekly'];
$tailored = $_POST['tailored'];
$online = $_POST['online'];
$full = $_POST['full'];
$lines = $_POST['lines'];
$deck = $_POST['deck'];
$inox = $_POST['inox'];
$aeration = $_POST['aeration'];
$interior = $_POST['interior'];
$engroom = $_POST['engroom'];
$bilcheck = $_POST['bilcheck'];
$bilge = $_POST['bilge'];
$engrun = $_POST['engrun'];
$AC = $_POST['AC'];
$carpet = $_POST['carpet'];
$canvas = $_POST['canvas'];
$scotch = $_POST['scotch'];
$season = $_POST['season'];
$presale = $_POST['presale'];
$delivery = $_POST['delivery'];
$documents = $_POST['documents'];
$safety = $_POST['safety'];
$provision = $_POST['provision'];
$fuel = $_POST['fuel'];
$pumpout = $_POST['pumpout'];
$shipyard = $_POST['shipyard'];
$moorquote = $_POST['moorquote'];
$other = $_POST['other'];
$msg = $_POST['msg'];

//dopo 4 secondi rimando all'home del sito
$delay = "4";
$url = "https://www.yachtsitter.services";

// verifico che tutti i campi siano stati compilati
if (!$name || !$email ) {echo 'Please fill all modules!';}
// verifico che il nome non contenga caratteri nocivi
elseif (!preg_match('/^[A-Za-z \'-]+$/i',$name)) {
    echo 'Only letters and white space allowed';
}
// verifico se un indirizzo email è valido
elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {echo 'Incorrect email address';}else{
    // compilo un messaggio combinando i dati recuperati dal form
    $text = "Name: " . $name . "\n"
            . "Email: " . $email . "\n"
            . "Boat type: " . $sail . "\n"
            . "Boat type: " . $power . "\n"
            . "Boat type: " . $multihull . "\n"
            . "Boat brand: " . $brand . "\n"
            . "Boat model: " . $model . "\n"
            . "Boat year: " . $year . "\n"
            . "Boat mooring: " . $mooring . "\n"
            . "Looking for mooring: " . $looking . "\n"
            . "Service base " . $weekly . "\n"
            . "Service base: " . $biweekly . "\n"
            . "Service base: " . $tailored . "\n"
            . "Service base: " . $online . "\n"
            . "Service base: " . $full . "\n"
            . "Service std: " . $lines . "\n"
            . "Service std: " . $deck . "\n"
            . "Service std: " . $inox . "\n"
            . "Service std: " . $aeration . "\n"
            . "Service std: " . $interior . "\n"
            . "Service std: " . $engroom . "\n"
            . "Service std: " . $storage . "\n"
            . "Service std: " . $bilcheck . "\n"
            . "Service std: " . $bilge . "\n"
            . "Service std: " . $engrun . "\n"
            . "Service std: " . $AC . "\n"
            . "Service oth: " . $carpet . "\n"
            . "Service oth: " . $canvas . "\n"
            . "Service oth: " . $scotch . "\n"
            . "Service oth: " . $season . "\n"
            . "Service oth: " . $presale . "\n"
            . "Service oth: " . $delivery . "\n"
            . "Service avl: " . $documents . "\n"
            . "Service avl: " . $safety . "\n"
            . "Service avl: " . $provision . "\n"
            . "Service avl: " . $fuel . "\n"
            . "Service avl: " . $pumpout . "\n"
            . "Service avl: " . $shipyard . "\n"
            . "Service avl: " . $moorquote . "\n"
            . "Service avl: " . $other . "\n"
            . "Message: " . $msg;
    // uso la funzione mail di PHP per inviare i dati al mio indirizzo email
    mail('catagianni@gmail.com', 'Mail from Yachtsitter', $text);

    // mostro un messaggio di conferma all'utente
    print "<body>
    <table align='center' border-color='#CCCCCC'>
    <tr>
        <td>
        <div align='center'><font face='Verdana, Arial, Helvetica, sans-serif'>Thank you for contacting us<br>Your quotation will be ready soon<br>
        To get back to homepage wait 4 sec or <a href='https://www.yachtsitter.services'>Click here</a></font></div>
        </td>
        <meta http-equiv='refresh' content='$delay; url=$url'>
    </tr>
    </table>
    </body>"
}
?>