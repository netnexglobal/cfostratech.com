<?php
    $associate = $_POST['associate'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $job = $_POST['job'];
    $company = $_POST['company'];

    $formcontent = "Associate with us as : $associate \n Name: $name \n Phone: $phone \n Email: $email \n Job Title: $job \n Company Name: $company ";
    $recipient = "netnexgroup@gmail.com";
    $subject = "CFO StraTech Contact Form Submission";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.13/dist/sweetalert2.min.js"></script>';
    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.13/dist/sweetalert2.min.css">';
    echo '<script>';
    echo 'Swal.fire({
              title: "Success!",
              text: "Thank you! We will contact you shortly.",
              icon: "success",
              confirmButtonText: "OK"
            }).then(function(){
                window.location.replace("https://www.cfostratech.com/mumbai/");
            });';
    echo '</script>';
?>