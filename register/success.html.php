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
            <a href="index.php"><img src="../images/logo_white.png" alt="AceLogo"></a>
        <?php include '../includes/nav.inc.html.php'; ?>
          <button class="hamburger">&#9776;</button>
         <button class="cross">&#735;</button> 
      </header>
            <main>
                <h1>Thank you!</h1>
                <p>Our records show you submitted the following:<br>
                    <br>
                  Name: <?php echo htmlspecialchars($myname, ENT_QUOTES, 'UTF-8'); ?><br>
                  Age: <?php echo htmlspecialchars($myage, ENT_QUOTES, 'UTF-8'); ?><br>
                  Role: <?php echo htmlspecialchars($myrole, ENT_QUOTES, 'UTF-8'); ?><br>
                  Phone: <?php echo htmlspecialchars($myphone, ENT_QUOTES, 'UTF-8'); ?><br>
                  E-Mail: <?php echo htmlspecialchars($myemail, ENT_QUOTES, 'UTF-8'); ?><br>
                  Emergency Contact Name: <?php echo htmlspecialchars($myecontactname, ENT_QUOTES, 'UTF-8'); ?><br>
                  Emergency Contact Phone Number: <?php echo htmlspecialchars($myecontactphone, ENT_QUOTES, 'UTF-8'); ?><br>
                  Gender Identification: <?php echo htmlspecialchars($mygender, ENT_QUOTES, 'UTF-8'); ?><br>
                  T-Shirt Size: <?php echo htmlspecialchars($myshirtsize, ENT_QUOTES, 'UTF-8'); ?><br>
                  Saturday Event Registered For: <?php echo htmlspecialchars($mysatevent, ENT_QUOTES, 'UTF-8'); ?><br>
                  Sunday Event Registered For: <?php echo htmlspecialchars($mysunevent, ENT_QUOTES, 'UTF-8'); ?><br>
                  Special Accomodations: <?php echo htmlspecialchars($mycomments, ENT_QUOTES, 'UTF-8'); ?><br>
                </p>
                <button><a href="index.php">Register Another Person</a></button>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="../style/style.js"></script>
    </body>
</html>