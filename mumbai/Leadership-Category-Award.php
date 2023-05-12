<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $job = $_POST['job'];
    $AwardCategory = $_POST['AwardCategory'];
    $NCFName = $_POST['NCFName'];
    $NCLName = $_POST['NCLName'];
    $NCJob = $_POST['NCJob'];
    $NCEmail = $_POST['NCEmail'];
    $Experience = $_POST['Experience'];
    $WhyNominated = $_POST['WhyNominated'];
    $agree = $_POST['agree'];

    $formcontent = " First Name: $fname \n 
    Last Name : $lname \n 

    Phone : $phone \n 

    Email : $email \n 

    Job Title : $job \n 
    
    Award Category Nominated for : $AwardCategory \n

    Details of Nomination Candidate \n

    Candidate First Name : $NCFName \n

    Candidate Last Name : $NCLName \n

    Candidate Job Title : $NCJob \n

    Candidate Email Address : $NCEmail \n

    For how many years has the candidate served in a C-level role? : $Experience \n

    In brief, why should the nominee be considered for this
                        award? : $WhyNominated \n

    I Agree Privacy Policy : $agree
    ";


    $recipient = "netnexgroup@gmail.com";
    $subject = "CFO StraTech Mumbai 2023 - Leadership-Category-Award form submission";
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