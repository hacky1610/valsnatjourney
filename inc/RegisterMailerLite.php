


<?php


$autoloader = dirname( __FILE__ ) . '/../vendor/autoload.php';

if ( is_readable( $autoloader ) ) {
	require_once $autoloader;
}


function Register($mail,$fname,$pays,$sendMail,$group,$queue,$thankyou) {
    $groupsApi = (new MailerLiteApi\MailerLite("4200099f0fae17e911bfeae9886a6a70"))->groups();

    $subscriber = [
        'email' => $mail,
        'fields' => [
            'name' => $fname,
            'country' => $pays

        ]
    ];
    
    $response = $groupsApi->addSubscriber($group, $subscriber); // Change GROUP_ID with ID of group you want to add subscriber to
    //print_r($response);
    echo "<script>document.location = '" . $thankyou . "';</script>"; 
}


	
$mail = $_POST["EMAIL"];
$fname = $_POST["FNAME"];
$pays = $_POST["PAYS"];
$sendMail = $_POST["SENDMAIL"];
$queue = $_POST["QUEUE"];
$group = $_POST["GROUP"];
$thankyou = $_POST["THANKYOU"];

Register($mail,$fname,$pays,$sendMail,$group,$queue,$thankyou);
	
	
	
		 
		 
?>
