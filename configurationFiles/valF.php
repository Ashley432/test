<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correctNumber = 12;
    $userInput = $_POST["numberInput"];
    if ($userInput == $correctNumber) {
        $message = "That's correct! Here is the flag";
    } else {
        $message = "Incorrect! Look carfully";
    }

    echo json_encode(["message" => $message]);
} else {
    header("Location: Nothing2.html");
    exit();
}
?>
