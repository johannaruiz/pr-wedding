<?php
  // Misc Variables
  $error = false;
  $msg = '';
  
  // POST Variables from form
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $state = $_POST["state"];
  $zipcode = $_POST["zipcode"];
  $email = $_POST["email"];
  $telephone = $_POST["telephone"];
  $guests = $_POST["guests"];
  $requests = $_POST["requests"];
  
  $from = $email;
  $headers = "From:" . $from;
  
  // Host Message Variables
  $weddingEmail = "jruiz.xcs.vvr@gmail.com";
  $rsvpSubject = "Someone has RSVP'd to your wedding";
  $rsvpMessage = "Someone has RSVP'd to your wedding.\n\n Here is the information they provided.\n\n Name: $fname $lname\n Address: $address\n City: $city\n State: $state\n Zipcode: $zipcode\n Email: $email\n Telephone: $telephone\n Number of Guests: $guests\n Special Requests: $requests\n";
   
  //Format Email Headers
  $to = $weddingEmail;
  $msgSubject = $rsvpSubject;
  $body = $rsvpMessage;
  $from = $email;
  $headers = "From:". $from;
  
  if(count($_POST) > 0){
    if(validate_form() == true){
      send_form();
    }
  }
  
  function validate_form(){
    global $fname, $lname, $address, $city, $state, $zipcode, $email, $telephone, $guests, $msg, $_POST;
    if(empty($fname)){
      $error = true;
      $msg .= "First Name is required" . "<br/>";
    }
    
    if(empty($lname)){
      $error = true;
      $msg .= "Last Name is required" . "<br/>";
    }
    
    if(empty($address)){
      $error = true;
      $msg .= "Address is required" . "<br/>";
    }
    
    if(empty($city)){
      $error = true;
      $msg .= "City is required" . "<br/>";
    }
    
    if(empty($state)){
      $error = true;
      $msg .= "State is required" . "<br/>";
    }
    
    if(empty($zipcode)){
      $error = true;
      $msg .= "Zipcode is required" . "<br/>";
    }
    
    function is_valid_email($email){
      $result = true;
      if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$^", $email)) {
        $result = false;
      }
      return $result;
    }
    
    if(is_valid_email($email) == false){
      $error = true;
      $msg .= "Your Email is invalid or empty" . "<br/>";
    }
    
    if(empty($telephone)){
      $error = true;
      $msg .= "Your Telephone Number is needed" . "<br/>";
    }
    
    if(empty($guests)){
      $error = true;
      $msg .= "Number of Guests is required" . "<br/>";
    }
    
    else {
      send_form();
    }
  }
  
  function send_form(){
    global $to, $msgSubject, $body, $headers, $msg, $_POST;
    $msg = "Thank you for RSVP'ing to our wedding.". "<br/>"  . "We'll see you soon!.";
    mail($to, $msgSubject, $body, $headers);
    unset($_POST);
    $_POST = '';
  }
?>
