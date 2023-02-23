<?php

$contact_name = $_POST['contact_name'];
$contact_email = $_POST['contact_email'];
$contact_message = $_POST['contact_message'];

$to = "vendedorvirtual421@gmail.com";
$subject = "Formulario de teste";
$body = "Name:" . $contact_name . "Email:". $contact_email . "Message:" . $contact_message. 
$headers = "From:" . $contact_name .
$headers = "Reply-To:" . $contact_email ; 

if (mail($to, $subject, $body, $headers)) {
    echo '<script type="text/javascript">
       window.onload = function () { 
       if(window.confirm("Formulário enviado! Obrigado!"))
            {
                window.location = "index.html";
            }
            else
            {
                // They clicked no
            } 
           
       } 
</script>';
        
  } else {

  }








?>