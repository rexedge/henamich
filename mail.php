<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];

    if ($name === ''){
        echo '<script language="javascript">';
        echo 'alert("Name cannot be empty")';
        echo '</script>';
        echo "<script> window.location.assign('contacts.html'); </script>";
    die();
    }
    if ($email === ''){
        echo '<script language="javascript">';
        echo 'alert("Email cannot be empty")';
        echo '</script>';
        echo "<script> window.location.assign('contact.php'); </script>";
    die();
    } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo '<script language="javascript">';
        echo 'alert("Invalid email")';
        echo '</script>';
        echo "<script> window.location.assign('contact.php'); </script>";
    die();
    }
    }
    if ($subject === ''){
        echo '<script language="javascript">';
        echo 'alert("Subject cannot be empty")';
        echo '</script>';
        echo "<script> window.location.assign('contact.php'); </script>";
    die();
    }
    if ($message === ''){
        echo '<script language="javascript">';
        echo 'alert("Message cannot be empty")';
        echo '</script>';
        echo "<script> window.location.assign('contact.php'); </script>";
    die();
    }

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "info@henamichaluminium.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo '<script language="javascript">';
echo 'alert("Email Sent")';
echo '</script>';
echo "<script> window.location.assign('contact.php'); </script>";
?>