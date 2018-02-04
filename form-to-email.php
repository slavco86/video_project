<?php
  $name = $_POST['name'];
  $telephone = $_POST['telephone'];
  $email = $_POST['email'];
  $enquiry = $_POST['enquiry'];
  
  $email_from = 'production@exhibition-video-ltd.co.uk';
  $email_subject = "Your Next Exhibition Video enquiry";
  $email_body = "You have received enquiry from $name.\n".
                "You can contact $name by calling on $telephone\n".
                            "Here is the message:\n $enquiry\n".

  $to = "production@exhibition-video-ltd.co.uk";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $email \r\n";
  mail($to,$email_subject,$email_body,$headers);
?>