<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portland Historical Tour Reservations</title>
        <meta name="description" content="Reserve your spot for a historical Portland Tour. Prices range from $50 to $80 per person.">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="../style/stylereset.css" rel="stylesheet">
      <link href="../style/style.less" rel="stylesheet/less" type="text/css"> 
       <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
    </head>
    <body>
        <header>
        <?php include '../includes/nav.inc.html.php'; ?>
          <button class="hamburger">&#9776;</button>
         <button class="cross">&#735;</button> 
      </header>
            <main>
                <h1>Thank you!</h1>
                <p>We will be in contact with you soon:<br>
                    <br>
                  Name: <?php echo htmlspecialchars($myName, ENT_QUOTES, 'UTF-8'); ?><br>
                   E-Mail: <?php echo htmlspecialchars($myEmail, ENT_QUOTES, 'UTF-8'); ?><br>    
                  Role: <?php echo htmlspecialchars($myRole, ENT_QUOTES, 'UTF-8'); ?><br>
                  Special Accomodations: <?php echo htmlspecialchars($myComment, ENT_QUOTES, 'UTF-8'); ?><br>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="../style/style.js"></script>
    </body>
</html>