<?php
$webmaster_email = "info@glumotech.com";
​
/*
This bit sets the URLs of the supporting pages.
If you change the names of any of the pages, you will need to change the values here.
*/
$feedback_page = "contact.html";
$error_page = "error_message.html";
$thankyou_page = "thank_you.html";

$email_address = $_REQUEST['email'] ;
$comments = $_REQUEST['message'] ;
$first_name = $_REQUEST['name'] ;
$msg =
"First Name: " . $first_name . "\r\n" .
"Email: " . $email_address . "\r\n" .
"Comments: " . $comments ;
​
function isInjected($str) {
    $injections = array('(\n+)','(\r+)','(\t+)','(%0A+)','(%0D+)','(%08+)',
    '(%09+)');
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    if(preg_match($inject,$str)) {
        return true;
    }
    else {
        return false;
    }
}

if (!isset($_REQUEST['email_address'])) {
header( "Location: $feedback_page" );
}

// If the form fields are empty, redirect to the error page.
elseif (empty($first_name) || empty($email_address)) {
header( "Location: $error_page" );
}
​
/*
If email injection is detected, redirect to the error page.
If you add a form field, you should add it here.
​*/
elseif ( isInjected($email_address) || isInjected($first_name)  || isInjected($comments) ) {
header( "Location: $error_page" );
}

// If we passed all previous tests, send the email then redirect to the thank you page.
else {
​
    mail( "$webmaster_email", "Feedback Form Results", $msg );
​
    header( "Location: $thankyou_page" );
}
?>
