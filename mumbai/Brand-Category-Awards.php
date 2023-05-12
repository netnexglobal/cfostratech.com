<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $job = $_POST['job'];
    $company = $_POST['company'];
    $WNradio = $_POST['WNradio'];
    $RNradio = $_POST['RNradio'];
    $NRradioOther = $_POST['NRradioOther'];
    $AwardCategory = implode(', ', $_POST['AwardCategory']);
    $NConmpanyName = $_POST['NConmpanyName'];
    $NCUrl = $_POST['NCUrl'];
    $NCAddress = $_POST['NCAddress'];
    $NCCity = $_POST['NCCity'];
    $NCState = $_POST['NCState'];
    $Industry = implode(', ', $_POST['Industry']);
    $Employees = implode(', ',$_POST['Employees']);
    $PSName = $_POST['PSName'];
    $ExecutiveSummary = $_POST['ExecutiveSummary'];
    $ProductSolution = $_POST['ProductSolution'];
    $Innovate = $_POST['Innovate'];
    $BusinessResults = $_POST['BusinessResults'];
    $WorthyAward = $_POST['WorthyAward'];
    $confidential = $_POST['confidential'];
    $agree = $_POST['agree'];

    $formcontent = " Fiest Name : $fname \n 
    Last Name : $lname \n 

    Job Title : $job \n 

    Company Name : $company \n 

    Do you work for the company/organization you are nominating? :$WNradio \n 

    If no, please indicate your organization’s relationship with the organization you are nominating : $RNradio \n

    Other : $NRradioOther \n

    Award Category Nominated for : $AwardCategory \n

    Nominated Company/Organization : $NConmpanyName \n

    Nominated Company/Organization Website : $NCUrl \n

    Nominated Company/Organization Address : $NCAddress \n

    Nominated Company/Organization City : $NCCity \n

    Nominated Company/Organization State : $NCState \n

    Please indicate the primary industry that best
    matches the company/organization you are nominating : $Industry \n

    Number of employees at the nominated
    organization : $Employees \n

    THE NOMINATED PRODUCT/SOLUTION \n

    Product/Solution Name : $PSName \n

    Executive Summary : $ExecutiveSummary \n

    Describe your Product/Solution and what business problem
    you were trying to solve and how you solved it : $ProductSolution \n

    Describe what is innovative about this product/solution and
    how it solves relevant business problem : $Innovate \n

    Describe the measurable business results of the
    project : $BusinessResults \n

    Why do you think your project worthy of this
    award? : $WorthyAward \n

    If there is anything in the information you have provided
    in this nomination that must remain confidential, please indicate it here : $confidential
    \n

    By submitting this nomination, I acknowledge that the information it
    contains is accurate, that the appropriate parties at the nominated organization are aware of the
    nomination and its contents, and the nominated organization is able and willing to accept the award
    if chosen by the panel of judges : $agree 
     ";

    $recipient = "netnexgroup@gmail.com";
    $subject = "CFO StraTech Mumbai 2023 - Brand-Category-Awards form submission";
    $mailheader = "From: $fname \r\n";
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