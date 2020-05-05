<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- PHP aquisizione dati -->
    <?php
    // salvo la mail dall'url
    $mail = $_GET["mail"];
    // rilevo presenza "."
    $mailHasPoint = strpos($mail, ".");
    // rilevo presenza chiocciola
    $mailHasAt = strpos($mail, "@");
     ?>

     <!-- PHP layout -->
     <?php
      if ($mailHasPoint
          && $mailHasAt){
            echo "<div>OK</div>";
          } else {
            echo "<div>KO</div>";
          }
      ?>
  </body>
</html>


<!-- - passare come argomenti in GET nome e cognome; e salutare l'interlocutore
- passare come argomento in GET una mail e stampare un div che contenga OK se contiene un punto e una chiocciola; KO altrimenti -->
