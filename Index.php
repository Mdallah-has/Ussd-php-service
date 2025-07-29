<?php
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

$input = explode("*", $text);

if ($text == "") {
    $response  = "CON Welcome to SafeDoc Services\n";
    $response .= "1. Report Lost ID/Passport\n";
    $response .= "2. Check Status\n";
    $response .= "3. Contact Support\n";
} else if ($text == "1") {
    $response = "CON Enter your ID or Passport Number:";
} else if (isset($input[0]) && $input[0] == "1" && isset($input[1])) {
    $response = "END Thank you. We'll contact you if your document is found.";
} else if ($text == "2") {
    $response = "END Status check coming soon.";
} else if ($text == "3") {
    $response = "END Call us on 011-123-4567.";
} else {
    $response = "END Invalid choice. Try again.";
}

header('Content-type: text/plain');
echo $response;
?>
