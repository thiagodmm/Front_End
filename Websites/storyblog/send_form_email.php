<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contato - Mensagem enviada com sucesso!</title>
<link rel="stylesheet" href="css/estilos.css" type="text/css">
<link rel="stylesheet" href="css/w3.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>

<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "thiagodmm@gmail.com";
    $email_subject = "Contato do Site thiagodmm.wordpress.com";
 
    function died($error) {
        // your error code can go here
        echo "Infelizmente foram encontrados erros no formulário enviado. ";
        echo "Estes erros estão listados abaixo.<br /><br />";
        echo $error."<br /><br />";
        echo "Por favor retorne e corrija estes erros.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('Infelizmente parece haver um problema na mensagem enviada.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
 
 
<!-- Início do HTML de agradecimento incluído -->





 
<!-- Final do HTML incluído -->
 
<?php
 
}
?>


</body>
</html>