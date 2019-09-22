<?php

  // Define variables and set to empty
  $name_error = $email_error = "";
  $name = $email = $message = $success = "";

  // Form is submitted with POST method
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    if (empty($_POST["name"])) {
      $name_error = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      // Check if name only contains letters and white spaces
      if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $name_error = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["email"])) {
      $email_error = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // Check if email is well formatted
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format";
      }
    }

    if (empty($_POST["message"])) {
      $message = "";
    } else {
      $message = test_input($_POST["message"]);
    }

    if ($name_error == "" and $email_error == "") {
      $message_body = "Form details below.\n\n";
      unset($_POST["submit"]);

      foreach ($_POST as $key => $value) {
        $message_body .= "$key: $value\n";
      }

      $to = "info@glumotech.com";
      $subject = "Contact Form Submit";

      // Create email headers
      $headers = "From: ".$email."\r\n".
      "Reply-To: ".$email."\r\n";
      @mail($to, $subject, $message, $headers);
      $name = $email = $message = ""; // Clear the fields after submission
      $success = "Thank you for contacting us!";
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>
