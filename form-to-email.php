<?php
  $name = $_POST['name'];
  $telephone = $_POST['telephone'];
  $email = $_POST['email'];
  $enquiry = $_POST['enquiry'];
  
  $email_from = 'production@exhibition-video-ltd.co.uk';
  $email_subject = "My Next Exhibition Video enquiry";
  $email_body = "You have received a from $name.\n".
                "You can contact $name by calling on $telephone".
                            "Here is the message:\n $enquiry".

  $to = "production@exhibition-video-ltd.co.uk";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $email \r\n";
  mail($to,$email_subject,$email_body,$headers);
?>