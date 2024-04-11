<?php
 
if (isset($_POST['email']) && $_POST['email'] !=''){
    // submit the form

    $userName= $_POST['name'];
    $userEmail = $_POST['email'];
    $messageSubject = $_POST['subject'];
    $message = $_POST['message'];


    $to = "otuscopysystemsinc@gmail.com";
    $body = "";

    $body .= "From:".$userName. "\r\n";
    $body .= "email:".$userEmail. "\r\n";
    $body .= "message:".$message. "\r\n";

    mail($to,$messageSubject,$body);

   
}
?>
<style>
    .alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}
    </style>
<script>

    alert('Message Sent');
    window.location = "index-2.html";
</script>

